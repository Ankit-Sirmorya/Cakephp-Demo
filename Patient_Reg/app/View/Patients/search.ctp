<!-- File: /app/View/Patients/search.ctp -->

<!-- Description : This file shows search results found. -->

<?php

	if($found_patients == "No Results Found!!"){
		echo "No Results Found!!";
	}else{ ?>

<h1>Results found :</h1>

<table>

	<tr>
		<td>Patient Id</td>
		<td>First Name</td>
		<td>Last Name</td>
	</tr>

<?php foreach($found_patients as $patient): ?>
    <tr>
        <td> <?php echo $this->Html->link($patient['Patient']['patient_id'],array('controller' => 'Patients', 'action' => 'view', $patient['Patient']['patient_id'])); ?></td>
		<td> <?php echo $patient['Patient']['First_Name']; ?> </td>
		<td> <?php echo $patient['Patient']['Last_Name']; ?> </td>
    </tr>
<?php endforeach; } ?>
 
</table>