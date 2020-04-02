<?php

session_start();

//Create connection to db
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'MedicCoDB');

//Gets values
$fname = filter_input(INPUT_POST, 'fname');
$lname = filter_input(INPUT_POST, 'lname');
$pn = filter_input(INPUT_POST, 'phoneNum');
$office = filter_input(INPUT_POST, 'office');
$doctor = filter_input(INPUT_POST, 'doctor');
$date = filter_input(INPUT_POST, 'date');
$start = filter_input(INPUT_POST, 'start');
$end = filter_input(INPUT_POST, 'end');
$type = filter_input(INPUT_POST, 'type');

//Query db
	$reg = " insert into Appointment( PatientID, EmployeeID, OfficeID, StartTime, EndTime, Date, ApptType) values (2, 5, 2, '$start', '$end', '$date', '$type')";

	mysqli_query($con, $reg);
	
	echo "New Appointment Created";

?>