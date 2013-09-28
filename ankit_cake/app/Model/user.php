<!-- File: /app/Model/user.php -->
<?php
class User extends AppModel {
    var $name = 'User';

    
    var $validate = array(

    	// validate user first_name
        'first_name' => array(
            'rule' => 'notEmpty',
            'message' => 'Please enter your first name.' 
        ),

        // validate user last_name
        'last_name' => array(
            'rule' => 'notEmpty',
            'message' => 'Please enter your last name.' 
        ),

		// validate user email
        'email' => array(
            'rule' => 'email',
            'message' => 'Please enter your proper E-mail ID.' 
        ),

        // validate user mobile number
        'mobile' => array(
            'rule' => '/([89]{1}[0-9]{9})/',
            'message' => 'Please enter your valid mobile number.' 
        )


    );
}
?>