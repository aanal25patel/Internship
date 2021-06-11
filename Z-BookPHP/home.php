<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php


if(isset($_COOKIE['mydate']) && isset($_COOKIE['amount']))   //jo cookie made to...
{
    echo "<h1 align='center'> Your last purchase was of ".$_COOKIE['amount']." on ".$_COOKIE['mydate']."</h1>";
}

if(isset($_REQUEST['sub'])){

    session_start();

    $cna = $_REQUEST['cna'];
    $tad = $_REQUEST['tad'];
    $mob = $_REQUEST['mob'];

    
    $_SESSION['name'] = $cna;
    $_SESSION['add'] = $tad;
    $_SESSION['mobile'] = $mob;

    header("Location: Menu.php");

}

else{

?>

<body align="center">
    <form name="f1" action="home.php">
        Name:<input type="text" name="cna"><br>
        Address : <textarea name="tad"></textarea><br>
        Mobile : <input type="text" name="mob"><br><br>

        <input type="submit" name="sub" value="Show Menu">
        <input type="reset" name="res" value="Cancel">

    </form>

<?php
}
?>

</body>
</html>