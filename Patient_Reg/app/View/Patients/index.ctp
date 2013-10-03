<!-- File: /app/View/Patients/index.ctp -->

<!-- Description : This file shows patients lists already registered. -->

<?php

	echo $this->Form->create('Patient',array('action' => 'search'));
	echo $this->Form->input('search',array('type'=>'text','style'=>'width:200px; height:20px;')); 
	echo $this->Form->end('Search'); 
?>

<h1>List of Patients</h1>

<table>
<tr>
<td>Patient Id</td>
<td>First Name</td>
<td>Last Name</td>
<td>Action</td>
</tr>

<!-- Here is where we loop through our $patients array, printing out pateint info -->

<?php
foreach ($patients as $patient):?>

<tr>

<td> <?php echo $this->Html->link($patient['Patient']['patient_id'],array('controller' => 'Patients', 'action' => 'view', $patient['Patient']['patient_id'])); ?></td>
<td> <?php echo $patient['Patient']['First_Name']; ?> </td>
<td> <?php echo $patient['Patient']['Last_Name']; ?> </td>
<td> <?php echo $this->Html->link('Edit',array('controller' => 'Patients', 'action' => 'edit', $patient['Patient']['patient_id'])); ?></td>
<td> <?php echo $this->Form->postLink('Delete',array('action' => 'delete', $patient['Patient']['patient_id']),
											   array('confirm' => 'Are you sure?')); ?></td>

</tr>
<?php endforeach; ?>
<?php unset($patient); ?>
<td> <?php echo $this->Html->link('Add Patient',array('controller' => 'Patients', 'action' => 'add')); ?></td>
</table>

