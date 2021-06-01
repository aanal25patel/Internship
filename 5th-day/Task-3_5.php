<?php

// Associative Array

$a[0] = 1;
$a[1] = 2;
$a[2] = 3;
$a['A'] = "Apple";
$a["B"] = "Bali";


// Method-2

$a = array(
    0 => 1,
    1 => 2,
    2 => 3,
    "A" => "Apple",
    "B" => "Bali"
);
echo "A for ".$a['A'];


// using foreach loop
foreach ($a as $value){
    echo "<br>Value is $value";
}



foreach ($a as $key=>$value){
    echo "<br> key is $key and value is $value";
}


?>