<?php

$con = mysqli_connect("localhost", "root", "", "internship") or die("DATABASE NOT FOUND !!!");

$id = $_GET["deleteid"];

$q =  $con->query("update tbl_student SET is_delete=1 WHERE ID = $id") or die(mysqli_error($con));

if($q){
    echo "<script>alert('Record Deleted Successfully'); window.location='fetch_data.php';</script>";
}

$con -> close();


?>