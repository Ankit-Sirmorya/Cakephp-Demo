<?php 

/*
 * PatientsController is a Controller class for model Patient and table patients.
 */
class PatientsController extends AppController {
	
	public $helpers = array('Html', 'Form', 'Session' , 'CountryList'); // Various helpers used for registration form.
	public $components = array('Session');	// Used for setFlash.

	/* 
	 * Description : First function to be called.
	 */
	public function index(){
		$this->set('patients', $this->Patient->find('all'));	// Lists all patients registered in database.
	}

	/*
	 * Description : Function to show complete information for a particular patient based on Patient Id.
	 * @param : $id -> patient_id
	 */
	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Patient doesn\'t exists'));
		}
		$patient = $this->Patient->findByPatientId($id);
		if (!$patient) {
			throw new NotFoundException(__('Patient doesn\'t exists'));
		}
		$this->set('patient', $patient);
	}
	
	/*
	 * Description : Function to add patient in database ( patients table ) and renders add.ctp view to show registration form.
	 */
	public function add(){
		if ($this->request->is('post')) {
		    $this->Patient->create();		
		    if ($this->Patient->save($this->request->data)) {
				$this->Session->setFlash(__('User is registered.'));
				return $this->redirect(array('action' => 'index'));
		    }
		$this->Session->setFlash(__('Unable to add user.'));
		}
	}
	
	/*
	 * Description : Function to edit patient information corresponding to Patient Id and renders edit.ctp view to show editable form.
	 * @param : $id -> patient_id
	 */ 
	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Patient doesn\'t exists'));
		}
		$patient = $this->Patient->findByPatientId($id);
		if (!$patient) {
			throw new NotFoundException(__('Patient doesn\'t exists'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {	// Checks if request is post or put.
			$this->Patient->patient_id = $id;
			if ($this->Patient->save($this->request->data)) {
				$this->Session->setFlash(__('Patient information has been updated.'));
				return $this->redirect(array('action' => 'index'));
			}
		$this->Session->setFlash(__('Unable to update patient information.'));
		}
		if (!$this->request->data) {		// If no changes made save the previous data. 
			$this->request->data = $patient;
		}
	}
	
	/*
	 * Description : Function to delete patient information from database. 
	 * @param : $id -> patient_id
	 */
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		if ($this->Patient->delete($id)) {
			$this->Session->setFlash(__('The patient with id: %s has been deleted.', h($id)));
			return $this->redirect(array('action' => 'index'));
		}
	}
	
	/*
	 * Description : Function to search patients on the basis of First name, Last name, DOB, City, State, Country.
	 */
	public function search(){
		if (!empty($this->request->data)) {
			$searchstr = $this->request->data['Patient']['search'];
			$this->set('searchstring', $this->request->data['Patient']['search']);
			$conditions = array(
            'conditions' => array(
            'or' => array(
                "Patient.First_Name LIKE" => "%$searchstr%",
                "Patient.Last_Name LIKE" => "%$searchstr%",
				"Patient.DOB LIKE" => "%$searchstr%",
				"Patient.Mobile LIKE" => "%$searchstr%",
				"Patient.City LIKE" => "%$searchstr%",
				"Patient.State LIKE" => "%$searchstr%",
				"Patient.Country LIKE" => "%$searchstr%"
            )
            )
        );
			
			$found_patients = array_filter($this->Patient->find('all', $conditions));
			if (!empty($found_patients)) {
				$this->set('found_patients', $found_patients);
			}else{
					$this->set('found_patients', "No Results Found!!");		// If no patients found satisfying the condition.
			}
		} 
	}
}

?>
