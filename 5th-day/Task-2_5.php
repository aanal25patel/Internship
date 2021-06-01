<!-- Arrays in php -->

<!-- Numerical array -->
<?php
$z[0] = "aanal";
$z[1] = "kashish";
$z[2] = "Simran";


$z = array(1,2,3,"Aanal","Kashish","Simran");
echo $z[1];

// Printing whole array
for($i=0;$i<count($z);$i++){
    echo "<br>".$z[$i];
}

echo "<pre>";
print_r($z);

echo "<pre>";
echo "<pre>";

var_dump($z);

echo "<pre>";


?>