<html>

<center>
    <h2> Upcoming Appointments </h2>

<?php

session_start();

//Create connection to db
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'MedicCoDB');

$query = "select * from Appointment";
$result = mysqli_query($con,$query);

echo "<table border='1'>
<tr>
<th>Patient Name</th>
<th>Doctor</th>
<th>Office</th>
<th>Start Time</th>
<th>End Time</th>
<th>Date</th>
<th>Appt Type</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
    if($row['OfficeID'] == 1)
    {
        $office = "Florida";
    }
    else $office = "Washington";

    if($row['EmployeeID'] == 2)
    {
        $doctor = "Doctor Bridges";
    }
    else $doctor = "Doctor Hill";

    if($row['PatientID'] == 1)
    {
        $name = "Donna White";
    } 
    else if($row['PatientID'] == 2)
    {
        $name = "Eddie Roy";
    }
    else $name = "Chris Penskie";

echo "<tr>";
echo "<td>" . $name . "</td>";
echo "<td>" . $doctor . "</td>";
echo "<td>" . $office . "</td>";
echo "<td>" . $row['StartTime'] . "</td>";
echo "<td>" . $row['EndTime'] . "</td>";
echo "<td>" . $row['Date'] . "</td>";
echo "<td>" . $row['ApptType'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>

</center>
</html>