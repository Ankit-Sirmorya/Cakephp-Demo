<!-- File: /app/View/Patients/add.ctp -->

<!-- Description : This file shows patient registration form. -->

<font size='5'> <strong>Patient Registration Form </strong></font>

<?php
echo $this->Form->create('Patient'); ?>

<table>
   <tr>
	<td> <?php echo $this->Form->input('Title',array('type'=> 'select','options'=>array('Mr.', 'Mrs.', 'Miss')));?> </td>
	<td> <?php echo $this->Form->input('First_Name',array('label'=>'First name','type'=>'text','style'=>'width:200px; height:20px;'));?></td>
	<td> <?php echo $this->Form->input('Last_Name',array('label'=>'Last name','type'=>'text','maxlength'=>'45','size'=>3));?></td>
   </tr>

   <tr>	
	<td><?php echo $this->Form->input('Gender',array('type'=> 'select','options'=>array('Male', 'Female')));?>
	<td><?php echo $this->Form->input('DOB', array('label' => 'Date of birth',
    							'dateFormat' => 'DMY',
    							'minYear' => date('Y') - 70,
    							'maxYear' => date('Y') - 0
							));  ?>
   </tr>
   
   <tr>	
	<td><?php echo $this->Form->input('Mobile',array('type'=>'tel','maxlength'=>'10','style'=>'width:150px; height:20px;'));?>
	<td><?php echo $this->Form->input('Emailid',array('label'=>'Email Id','type'=>'email','maxlength'=>'30','style'=>'width:250px; height:20px;'));?>
   </tr>

   <tr>	
	<td><?php echo $this->Form->input('Marital_Status',array('label'=>'Marital Status','type'=> 'select','options'=>array('Unmarried', 'Married')));?>
	<td><?php echo $this->Form->input('Occupation',array('type'=>'text','maxlength'=>'20','style'=>'width:200px; height:20px;'));?></td>
   </tr>

   <tr>
	<td> <?php echo $this->Form->input('Address_Line_1',array('label'=>'Address Line 1','type'=>'text'));?></td>
	<td> <?php echo $this->Form->input('Address_Line_2',array('label'=>'Address Line 2','type'=>'text'));?></td>
   </tr>   
   
   <tr>
	<td> <?php echo $this->Form->input('City',array('type'=>'text','style'=>'width:200px; height:20px;'));?></td>
	<td> <?php echo $this->Form->input('State',array('type'=>'text','style'=>'width:200px; height:20px;'));?></td>
	<td> <?php echo $this->CountryList->select('Country','Country');?></td> 
	<td> <?php echo $this->Form->input('Pincode',array('type'=>'text','style'=>'width:200px; height:20px;'));?></td>
   </tr>
   
   <tr>
	<td> <?php echo $this->Form->input('Concession_type',array('label'=>'Concession Type','type'=>'select','options'=>array('Student','Senior','Women')));?></td>
	<td> <?php echo $this->Form->input('Emergency_contact',array ('label'=>'Emergency Contact No.','type' => 'tel' , 'maxlength' => '10','style' =>'width:150px;height:20px;')); ?> </td>
   </tr>
</table>
	
	<?php 	
	echo $this->Form->input('Referral_source',array('label'=>'Referral Source','type'=>'text','rows'=>2));
	echo $this->Form->end('Submit');
	//echo $this->Form->button('List Patients', array('onclick' => "location.href='".$this->Html->url("/PatientReg/lists")."'"));	
	?>
	