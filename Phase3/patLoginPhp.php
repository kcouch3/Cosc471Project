<?php 

session_start();

//Gets values
$username = filter_input(INPUT_POST, 'user');
$password = filter_input(INPUT_POST, 'pass');

//Create connection to db
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'MedicCoDB');

//Query db for user
$s = "select * from Patient where PatientID = '$username' && password = '$password'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1)
{
	//head('location:home.php');
	echo "Login Success";
}
else
{
	//head('location:login.php');
	echo "Login Fail";
}

?>