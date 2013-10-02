<?php
class ContactsController extends AppController {
	public function cities_dropdown ()
	{
		$cities = '';
		$this->set('cities', $cities);
	}
	public function find() {
		$this->Contact->recursive = -1;
		if ($this->request->is('ajax')) {
			$this->autoRender = false;
			$this->layout = 'ajax';
			$results = $this->Contact->find('all', array('fields' => array('Contact.city'),
					'conditions' => array('Contact.city LIKE ' => $this->request->query['term'] . '%'),
					'group' => array('Contact.city'),
			));
			$cities = Set::extract('../Contact/city', $results);
			//Encodes the array into json format
			echo json_encode($cities);
		}
	}
}
?>