<html>

<center>
    <h2> Current Office Locations </h2>

<?php

session_start();

//Create connection to db
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'MedicCoDB');

$query = "select * from Office";
$result = mysqli_query($con,$query);

echo "<table border='1'>
<tr>
<th>Location</th>
<th>Phone Number</th>
<th>Email</th>
<th>Street</th>
<th>City</th>
<th>State</th>
<th>Zipcode</th>
<th>Opening Time</th>
<th>Closing Time</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
    if($row['OfficeID'] == 1)
    {
        $office = "Florida";
    }
    else $office = "Washington";

echo "<tr>";
echo "<td>" . $office . "</td>";
echo "<td>" . $row['PhoneNum'] . "</td>";
echo "<td>" . $row['Email'] . "</td>";
echo "<td>" . $row['Street'] . "</td>";
echo "<td>" . $row['City'] . "</td>";
echo "<td>" . $row['State'] . "</td>";
echo "<td>" . $row['Zipcode'] . "</td>";
echo "<td>" . $row['HourOpen'] . "</td>";
echo "<td>" . $row['HourClosed'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>

</center>
</html>