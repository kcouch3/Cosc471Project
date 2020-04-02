<?php

session_start();

//Create connection to db
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'MedicCoDB');

//Gets values
$fname = filter_input(INPUT_POST, 'fname');
$lname = filter_input(INPUT_POST, 'lname');
$pn = filter_input(INPUT_POST, 'phoneNum');
$email = filter_input(INPUT_POST, 'email');
$dob = filter_input(INPUT_POST, 'dob');
$password = filter_input(INPUT_POST, 'pw');
$street = filter_input(INPUT_POST, 'street');
$city = filter_input(INPUT_POST, 'city');
$state = filter_input(INPUT_POST, 'state');
$zipcode = filter_input(INPUT_POST, 'zipcode');
$password = filter_input(INPUT_POST, 'pw');

if(isset($gender) && $gender == "female") 
{
	$gender = "F";
} else $gender = "M";

//Query db
	$reg = " insert into Patient(OfficeID, ApptID, FName, PhoneNum, Email, Street, City, State, Zipcode, Gender, DOB, Password) values (2, 321, '$fname' , '$lname', '$pn', '$email', '$street', '$city', '$state', '$zipcode', '$gender', '$dob', '$password')";
	mysqli_query($con, $reg);
	echo "New Patient Created";

?>
