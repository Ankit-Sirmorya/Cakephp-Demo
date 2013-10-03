<?php
/*
 * Patient is a model class for table patients.
 */
class Patient extends AppModel {

	public $primaryKey = 'patient_id';	
	
	// Perform Validation using $validate
	public $validate = array(
		'Title' => array(
		'rule' => 'notEmpty'
		),
		'First_Name' => array(
		'rule' => 'notEmpty'
		),
		'Last_Name' => array(
		'rule' => 'notEmpty'
		),
		'Gender' => array(
		'rule' => 'notEmpty'
		),
		'DOB' => array(
		'rule' => 'notEmpty'
		),
		'Mobile' => array(
		'rule' => 'numeric',
		'allowEmpty' => false, 
		'message'=>'Mobile number should be numeric'
		),
		'Emailid' => array(
		'rule' => 'notEmpty'
		),
		'Marital_Status' => array(
		'rule' => 'notEmpty'
		),
		'Occupation' => array(
		'rule' => 'notEmpty'
		),
		'Address_Line_1' => array(
		'rule' => 'notEmpty'
		),
		'City' => array(
		'rule' => 'notEmpty'
		),
		'State' => array(
		'rule' => 'notEmpty'
		),
		'Country' => array(
		'rule' => 'notEmpty'
		),
		'Pincode' => array(
		'rule' => 'notEmpty'
		),
		'Concession_type' => array(
		'rule' => 'notEmpty'
		),
		'Referral_source' => array(
		'rule' => 'notEmpty'
		),
		'search' => array(
		'rule' => 'notEmpty'
		)
	);	
}

?>

