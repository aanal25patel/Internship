
<html>
    <head>

    </head>
    <body align="center">

    <?php

   session_start();
   
   $cna = $_SESSION['name'];
   $tad = $_SESSION['add'];
   $mob = $_SESSION['mobile'];
   $sum = $_SESSION['sum'];
   
   $con = new mysqli("localhost", "root", "", "book") or die("DATABASE NOT FOUND !!!");
   
   $result1 = $con->query("select * from cart");

   date_default_timezone_set("Asia/Kolkata");
   $dt = date("d/M/Y");
   $ti = date("H:i:s");

   echo "<h1 align='center'> INVOICE </h1>";
   echo "<br>";

   echo "<table border='5' cellpadding='10' align='center'>";

   echo "<tr colspan='5' rowspan='2' align='center' ><td colspan='1'> <img src='books/Screenshot_19.png' alt='Book logo' width='80' height='70'> </td><th colspan='3' bgcolor='#b4eb34'> Aanal's Book Store </th><td  bgcolor='#b4eb34'> Date : $dt <br> Time : $ti </td></tr>
         <tr align='center'><td colspan='2' bgcolor='#e0f2ce'> Customer Name : <br> $cna </td><td colspan='2' bgcolor='#e0f2ce'> Customer Address : <br> $tad </td><td bgcolor='#e0f2ce'> Customer Ph no : $mob </td></tr> 
         <tr align='center' bgcolor='#e0f2ce'><td><b> Book Id </td><td><b> Book Name </td><td><b> Quantity </td><td bgcolor='#e0f2ce'><b> Price </td><td><b> Amount </td></tr>";
    
   while($row = $result1->fetch_row()){
       echo "<tr align='center'><td> $row[3] </td><td> $row[4] </td><td> $row[5] </td><td> $row[6] </td><td> $row[7] </td></tr>";
   }
   
   echo "<tr align='center' bgcolor='#e0f2ce'><td colspan='4'><b> Total </td><td> $sum </td></tr>";

   echo "</table>";

   $con->query("delete from cart");
   

   $con->close();

?>

</body>
</html>