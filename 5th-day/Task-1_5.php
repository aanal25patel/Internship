<?php
echo "<center><h1>Implementing different functions of php</h1></center>";
?>

<?php
echo "<strong>1) To count the number of elements in an array.<br></strong>";
$arr = array(1,2,3,'SEO','Email Marketing','Social media Marketing','SEM',1.233);
echo count($arr);
?>



<?php
echo "<strong><br><br>2) To return the array values as keys and their count is the count</strong>";
$arr = array("SEO","php","c","android","SEO","java");
$newarr = array_count_values($arr);
foreach ($newarr as $key => $value) {
echo "<br/>$key - <strong>$value</strong> ";
}
?>

<br><br>

<?php
echo "<strong><br><br> 3)To calculate the sum of the array elements<br></strong>";
$myarray = array(99,66,77,11,34,67);
echo array_sum($myarray);
?>


<br>
<br>

<?php
echo "<strong>4) To find the product of the array values.</strong>";
$myarray = array(99,66,77,11,34,67);
echo array_product($myarray);
?>
<br>
<br>


<?php
echo "<strong>5) To reverse the array elements.</strong><br>";
$arr = array('SEO', 'DM', 'CSE', 'ME', 'Chemical');
$revarr = array_reverse($arr);
print_r($revarr);
?>
<br>
<br>

<?php
echo "<strong>6) To see if any values in the array exists or not.</strong><br>";
$arr = array('SEO', 'c++', 'java', 'SEM', 'php');
$temp = in_array('php',$arr);
echo $temp;
?>

<br>
<br>

<?php
echo "<strong>7) It will  select one or more keys from an array at random. </strong><br>";
$arr = array('SEO', 'DM', 'CSE', 'ME', 'Chemical');
$indexofarray = array_rand($arr);//Returns Array Index 
echo $arr[$indexofarray];
?>

<br>
<br>

<?php
echo "<strong><br> 8) To select multiple keys at random.</strong>";
$arr = array('SEO', 'c++', 'java', 'android', 'php');
$indexofarray = array_rand($arr,2);//Returns Array Index 
foreach ($indexofarray as $key => $value) 
{
echo "<br />$key - <strong>" . $arr[$value] . "</strong>";
}
?>

<br>
<br>

<?php
echo "<strong> <br> 9) The array_unique() array function in PHP will remove all duplicate values from within an array</strong><br>";
$arr = array('SEO', 'c++','android', 'java', 'android', 'php');
print_r(array_unique($arr));
?>

<br>
<br>


<?php
echo "<strong><br> 10) It will merge multiple arrays.</strong><br>";
$arr1 = array('SEO','c++','android','java','php');
$arr2 = array(10,20,30,40,50);
$NewArr = array_merge($arr1,$arr2);
print_r($NewArr);
?>

<br>
<br>


<?php
echo "<strong><br> 11) It will search for any value in the array.</strong><br>";
$myarr = array('c', 'c++','android', 'java', 'php');
$check = array_search('android', $myarr);
echo $check; // Return Index
?>

<br>
<br>


<?php
echo "<strong><br> 12) It is used to specify the range.</strong><br>";
$arr = range("110", "120");
foreach($arr as $key => $value)
{
echo "<br /> $key - $value ";
} 
?>

<br>
<br>

<?php
echo "<strong><br> 13) It is used to sort the array.</strong><br>";
$arr = array(80,60,50,40,8,74);
sort($arr);
print_r($arr);
?>
<br>
<br>


<?php
echo "<strong><br> 14) It is used to sort the array in reverse order.</strong><br>";

$arr = array(80,60,50,40,8,74);
rsort($arr);
print_r($arr);
?>


<br>
<br>


<?php
echo "<strong><br> 15) It is used to sort all the elements in ascending order.</strong><br>";

$arr = array(80,60,50,40,8,74);
asort($arr);
print_r($arr);
?>


<br>
<br>


<?php
echo "<strong><br> 16) It is used to sort in asc order, according to the keys.</strong><br>";

$arr = array(
"Yellow" => "Banana", 
"Aanal" => "Patel", 
"Blue" => "Sky");
ksort($arr);
foreach ($arr as $key => $value) {
echo "<br />$key - $value ";
}
?>

<br>
<br>


<?php
echo "<strong><br> 17) It is used to randomly shuffle the array elements.</strong><br>";

$myArray = array("Football", "Baseball", "Hockey", "Tennis", 
"Boxing");
shuffle($myArray); // Shuffle the array
foreach ($myArray as $key => $value) {
echo "<br /> $value ";
}
?>


<br>
<br>


<?php
echo "<strong><br> 18) It The array_key_exists() array function in PHP will return either true or false when it runs .</strong><br>";

$arr = array("a" => "apple", "b" => "banana");
echo array_key_exists('a',$arr);
?>

<br>
<br>

<?php
echo "<strong><br> 19) The array_change_key_case() function is used to change all keys of a given array to lower case or upper case..</strong><br>";

$arr = array(
"Banana" => "Yellow", 
"Apple" => "Red", 
"Mango" => "Green");
$uppercase = array_change_key_case($arr,CASE_UPPER);
print_r($uppercase);
?>


<br>
<br>


<?php
echo "<strong><br> 20)The array_combine() function is used to creates an array by using one array for keys and another for its values..</strong><br>";

$arr1 = array("Banana" , "Apple" , "Mango");
$arr2 = array("Yellow","Red", "Green");
$NewVar = array_combine($arr1, $arr2);
print_r($NewVar);
?>


<br>
<br>


<?php
echo "<strong><br> 21) The end() array function in PHP will return the value of the last element in an array.</strong><br>";

$myarr = array('c', 'c++','android', 'java', 'php');
echo end($myarr);
?>

<br>
<br>


<?php
echo "<strong><br> 22)Create an array from variables and their values.</strong><br>";

$name = "AANAL";
$subject = "Digital Marketing";
$arr = compact("name", "subject");
print_r($arr);
?>

<br>
<br>


<?php
echo "<strong><br> 23)Flip all keys with their associated values in an array</strong><br>";

$arr = array("a" => "Aanal", "b" => "banana", "c" => "computer");
$fliparray = array_flip($arr);
print_r($fliparray);
?>

<br>
<br>


<?php
echo "<strong><br> 24)Compare the values of two arrays, and return the differences.</strong><br>";

$a=array("Banana" , "Apple" , "Mango");
$b=array("Banana" , "Apple" , "Mango","kiwi","watermelon");
$diff = array_diff($a, $b);
print_r($diff);
?>

<br>
<br>


<?php
echo "<strong><br> 25)The array function in PHP will create a new array from comparing arrays against each other to see if any values match..</strong><br>";

$arr1 = array(0=>"Sunday",1=>"Monday",2=>"Tuesday");
$arr2 = array(3=>"Tuesday",4=>"Sunday",5=>"Thursday");
print_r(array_intersect($arr1,$arr2));
?>

<br>
<br>

<?php
echo "<strong><br> 26) The array_values() array function in PHP will return a new array made 
up of the values from a target array.</strong><br>";

$arr = array("i"=>"c","want"=>"c++","learn"=>"php");
$myarr = array_values($arr);
foreach($myarr as $key => $value) {
echo " <br />$key - $value";
}
?>

<br>
<br>

<?php
echo "<strong><br> 27)The array_push() function inserts one or more elements to the end of a Numerical array.</strong><br>";

$a=array("c","c++");
array_push($a,"java","php");
print_r($a);
?>

<br>
<br>

<?php
echo "<strong><br> 28)The array_pop() function deletes the last element of an array</strong><br>";

$a = array("c", "c++", "Java", "PHP", "ASP");
array_pop($a); //Remove
print_r($a);
array_pop($a); //Remove
print_r($a);
?>

<br>
<br>

<?php
echo "<strong><br> 29)Explode function is used to break a string into an array.</strong><br>";

$mystring = "I Love Digital Marketing";
$arr = explode(" ",$mystring);
print_r($arr);
?>

<br>
<br>

<?php
echo "<strong><br> 30)Php implode function is used to convert an array into string. It return output as 
a string..</strong><br>";

$arr = array("I","love","Digital","Marketing");
$mystring = implode(" ", $arr);
echo $mystring;
?>







