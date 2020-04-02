<?php

session_start();

//Create connection to db
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'MedicCoDB');

//Gets values
$user = filter_input(INPUT_POST, 'user');
$diagnosis = filter_input(INPUT_POST, 'diagnosis');
$plan = filter_input(INPUT_POST, 'plan');
$meds = filter_input(INPUT_POST, 'meds');

//Query db
	$reg = " insert into Patient (Diagnosis, Medications, TreatmentPlan) values ('$diagnosis', '$meds', '$plan') where PatientID = '$user";

	mysqli_query($con, $reg);
	
	echo "New Diagnosis Added";

?>