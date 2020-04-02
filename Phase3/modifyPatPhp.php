<?php

session_start();

//Create connection to db
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'MedicCoDB');

//Get employee id that was entered
$username = filter_input(INPUT_POST, 'user');

$reg = "select FName, LName, PhoneNum, Email, Street, City, State, Zipcode, Gender, DOB, Password from Patient where PatientID = '$username'";

$result = mysqli_query($con, $reg);

$row = mysqli_fetch_array($result);

?>

<center>
	<h2> Modify Employee Record </h2>

<br>
<br>
<form action="modifyEmpPhp.php" method="POST">

<p>	Patient ID &nbsp;&nbsp;
<input type="text" id="user" name="user"></input>
</p>

<input type="submit" id="btn" value="Enter"></input>

</center>

<div style="float: left; width: 50%;">
<ul>

<h3>Personal Information</h3>

<p>	First Name &nbsp; &nbsp; &nbsp; &nbsp;
<input type="text" name="FName" value="<?php echo $row['FName']; ?>"></input>
</p>

<p>	Last Name &nbsp; &nbsp; &nbsp; &nbsp;
<input type="text" name="lname" value="<?php echo $row['LName']; ?>"></input>
</p>

<p>	Phone Number &nbsp;
<input type="text" name="phoneNum" value="<?php echo $row['PhoneNum']; ?>"></input>
</p>

<p>	Email &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<input type="text" name="email" value="<?php echo $row['Email']; ?>"></input>
</p>

<p>	Date of Birth &nbsp; &nbsp;
<input type="text" name="dob" value="<?php echo $row['DOB']; ?>"></input>
</p>

<p>	Gender &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
<input type="radio" id="male" name="gender" value="male" <?php echo ($row['Gender'] == "M")?'checked':'' ?>>
<label for="male">Male</label>
<input type="radio" id="female" name="gender" value="female" <?php echo ($row['Gender'] == "F")?'checked':'' ?>>
<label for="female">Female</label>
</p>

<p>	Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="pw" value="<?php echo $row['Password']; ?>"></input>
</p>

</ul>
</div>

<div style="float: right; width: 50%;">
<ul>

<h3>Current Address</h3>

<p>	Street &nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="street" value="<?php echo $row['Street']; ?>"></input>
</p>

<p>	City &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="city" value="<?php echo $row['City']; ?>"></input>
</p>

<p>	State &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text"" name="state" value="<?php echo $row['State']; ?>"></input>
</p>

<p>	Zipcode &nbsp;
<input type="text" name="zipcode" value="<?php echo $row['Zipcode']; ?>"></input>
</p>

</ul>
</div>

<div style="float: center;">
<center>
<input type="submit" id="btn" value="Update"></input>
<input type="submit" id="btn2" value="Delete"></input>
</center>
</div>

<?php

?>