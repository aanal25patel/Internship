
<?php

session_start();

$cna=$_SESSION['name'];
$tad=$_SESSION['add'];
$mob=$_SESSION['mobile'];

echo "<h1 align='center'> WEL-COME TO Aanal's Book store MR./MS. ".$cna."</h1>";


$con = new mysqli("localhost", "root", "", "book") or die("DATABASE NOT FOUND !!!");

$q = $con->query("select * from books") or die(mysqli_error($con));

$con->close();

echo "<table border='1' align='center' width='1000' bordercolor='blue'>";
echo "<tr bgcolor='#FF5733'>";
echo "<th height='70'>Book_ID</th>";
echo "<th width='250'>Book Image</th>";
echo "<th>Book Name</th>";
echo "<th>Author</th>";
echo "<th>Price</th>";

echo "</tr>";

while($row=$q->fetch_row()){
    echo "<tr>";
    echo "<td> <center>$row[0]</center> </td>";
    echo "<td><center><a href='$row[4]'><img src='".$row[4]."' height='100' width='100' /></a></center> </td>";
    echo "<td><center> $row[1]</center> </td>";
    echo "<td><center> $row[2] </center></td>";
    echo "<td><center> $row[3] </center></td>";
    echo "</tr>";
    
}
echo "</table>";


if(isset($_REQUEST['sb'])){
    
    $sb = $_REQUEST['sb'];

    if($sb=="ADD TO CART"){
        $bid = $_REQUEST['bid'];
        $qty = $_REQUEST['qty'];

        $con = new mysqli("localhost", "root", "", "book") or die("DATABASE NOT FOUND !!!");

        $result = $con->query("select * from books where Book_id = $bid");

        $row = $result->fetch_row();

        $book_name = $row[1];
        $price = $row[3];

        $amt = $price*$qty;

        $con->query("insert into cart values('$cna',$mob,'$tad',$bid,'$book_name',$qty,$price,$amt)");
        // con->query("insert into books values ($id,'$name','$author',$price,'$folder')"); 

        $con->close();
        
    }
    else if($sb=="BUY NOW"){


        $con = new mysqli("localhost", "root", "", "book") or die("DATABASE NOT FOUND !!!");

        $res = $con->query("select sum(amount) from cart");

        $row = $res->fetch_row();
        $sum = $row[0]; 

        $con = new mysqli("localhost", "root", "", "book") or die("DATABASE NOT FOUND !!!");
        $con->query("insert into buy values('$cna',$mob,$dt,$sum)");

    
        // $con->query("delete from cart");

        date_default_timezone_set("Asia/Kolkata");
        $dt = date("d/M/Y")." , ".date("H:i:s");


        $con->close();

        $_SESSION['sum'] = $sum;

        setcookie('mydate',$dt);    //used to create cookie
        setcookie('amount',$sum);

        header("location:Invoice.php");

    }

}






?>



<!-- <?php 

// fetching the data:
$con = mysqli_connect("localhost", "root", "", "book") or die("DATABASE NOT FOUND !!!");



?> -->

<html>

<form name="f2" action="Menu.php">

<b><center>ENTER Book_ID: <input type="text" name="bid"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center><br>
<center>ENTER QTY: <input type="text" name="qty"> <br><br></center></b>

<center><input type="submit" name="sb" value="BUY NOW"> 
<input type="submit" name="sb" value="ADD TO CART"> 
<input type="reset" name="res" value="CANCEL"></center>


</html>




