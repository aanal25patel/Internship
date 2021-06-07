<?php

// DB connection
$con = mysqli_connect("localhost", "root", "", "internship") or die("DATABASE NOT FOUND !!!");

// Firing select query 
$q = $con->query("select * from tbl_student") or die(mysqli_error($con))
;
// to store the data and to display it:

echo "<table border='1'>";
echo "<tr>";
echo "<th>Name</th>";
echo "<th>ID</th>";
echo "<th>Age</th>";
echo "<th>Email</th>";
echo "<th>Mobile</th>";
echo "<th>City</th>";
echo "<th>College</th>";
echo "<th>DOB</th>";
echo "<th>Field</th>";
echo "<th>Gender</th>";
echo "<th>Action</th>";
echo "</tr>";

while($row=$q->fetch_row()){
    echo "<tr>";
    echo "<td> $row[0] </td>";
    echo "<td> $row[1] </td>";
    echo "<td> $row[2] </td>";
    echo "<td> $row[3] </td>";
    echo "<td> $row[4] </td>";
    echo "<td> $row[5] </td>";
    echo "<td> $row[6] </td>";
    echo "<td> $row[7] </td>";
    echo "<td> $row[8] </td>";
    echo "<td> $row[9] </td>";

    echo "<td><a href='edit.php?id=$row[1]'>Edit </a> | <a href='delete.php?deleteid = $row[1]'>Delete</a></td>";

    

    echo "</tr>";
}
echo "</table>";

echo"<a href='7th-day-without_theme.php'>Add Record </a>";

$con->close();
?>