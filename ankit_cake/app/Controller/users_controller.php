<!-- File: /app/Controller/users_controller.php -->
<?php
class UsersController extends AppController {

	var $name = 'Users';

    // Display user data (R)
	function index()
    {
     	/* $conditions = $this->postConditions(
    			$this->request->data,
    			array(
    					'mobile' => '1231231231'
    					
    	)
    	); */ 
    	   
    
		$this->set('users', $this->User->find('all',array('order','User.id DESC')));

	}

    // Add new user data function  (C)
	function add()
    {
    	
        if (!empty($this->data)) {
            if ($this->User->save($this->data)) {
            	//$this->Session->setFlash($this->request->isPost());
               // $this->Session->setFlash('Your user data has been saved.');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    // Delete user data function (D)
    function delete($id)
    {
    	if ($this->request->isGet()==1) {
    		throw new MethodNotAllowedException();
    		return;
    	}
    	 
    	$this->User->delete($id);
        $this->Session->setFlash('The user with id: '.$id.' has been deleted. Is the request get ? '.$this->request->isGet());
        $this->redirect(array('action'=>'index'));
    }

    

    //Update user data function (U)
    function edit($id = null) {
        $this->User->id = $id;
        if (empty($this->data))
        {
            $this->data = $this->User->read();
        }
        else 
        {
            if ($this->User->save($this->data)) 
            {
                $this->Session->setFlash('Your user with id: '.$id.' has been updated.');
                $this->redirect(array('action' => 'index'));
              //  $this->redirect(array('action' => 'edit'));
            }
        }
    }
    
    
    public function  sendIcs(){
    	$icsString = 'Ankit';
$this->response->body($icsString);
$this->response->type(’ics’);
//Optionally force file download
$this->response->download(’filename_for_download.ics’);
//Return response object to prevent controller from trying to render a view
//return $this->response;
    	
    	 
    }
    
    
}
?>
