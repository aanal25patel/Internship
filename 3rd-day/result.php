<?php
$name = $_POST['n1']; 
$a = $_POST['n3'];
$b = $_POST['n4'];
$c = $_POST['n5'];

$per = (($a+$b+$c)/300)*100;

echo "Percentage of $name is ".$per;


if($per>90){
    echo '<body style="background-color:Green">';
    echo "<br> First Class";
}
else if($per>80){
    echo '<body style="background-color:yellow">';
    echo "<br> Second Class";
}
else if($per>60){
    echo '<body style="background-color:red">';
    echo "<br> Third Class";
}
else{
    echo '<body style="background-color:red">';
    echo "<br>You need Improvement";
}