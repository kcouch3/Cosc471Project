<html>

<center>
    <h2> Current Invoices </h2>

<?php

session_start();

//Create connection to db
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'MedicCoDB');

$query = "select * from Billing";
$result = mysqli_query($con,$query);

echo "<table border='1'>
<tr>
<th>Patient Name</th>
<th>Date Issued</th>
<th>Date Due</th>
<th>Date Paid in Full</th>
<th>Total Amount Due</th>
<th>Total Amount Paid</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
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
echo "<td>" . $row['DateIssued'] . "</td>";
echo "<td>" . $row['DateDue'] . "</td>";
echo "<td>" . $row['DatePaid'] . "</td>";
echo "<td>" . $row['TotalAmnt'] . "</td>";
echo "<td>" . $row['PaidAmnt'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>

</center>
</html>