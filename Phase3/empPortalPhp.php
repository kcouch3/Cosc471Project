<?php 

if(isset($_POST['modBtn'])) 
{ 
	header("Location: http://localhost/Phase3/modifyEmp.html"); 
}
else if(isset($_POST['createBtn']))
{
	header("Location: http://localhost/Phase3/newPatient.html"); 
}
else if(isset($_POST['modPatBtn']))
{
	header("Location: http://localhost/Phase3/modifyPat.html"); 
}
else if(isset($_POST['createApptBtn']))
{
	header("Location: http://localhost/Phase3/newAppt.html"); 
}
else if(isset($_POST['viewApptBtn']))
{
	header("Location: http://localhost/Phase3/viewApptPhp.php");
}
else if(isset($_POST['billBtn']))
{
	header("Location: http://localhost/Phase3/viewBills.php");
}
else if(isset($_POST['officeBtn']))
{
	header("Location: http://localhost/Phase3/viewOfficePhp.php");	
}
else
{
	header("Location: http://localhost/Phase3/addPatientRecord.html");	
}

?>