<!-- sorting, palindrome, To take marks and calculate sum and percentage, leap year -->

<?php

$arr = array(9,4,6,2,3,4,1,5);
sort($arr);

$arr_length = count($arr);

for($i=0;$i<$arr_length;$i++){
    echo $arr[$i];
    echo "<br>";
}

