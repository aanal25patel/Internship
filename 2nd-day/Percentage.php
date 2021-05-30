<?php

$a = 48;
$b = 57;
$c = 67;

$sum = ($a+$b+$c);
$per = ($sum/300)*100;

echo "$per";

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
    echo "<br>You need Improvement";
}

?>