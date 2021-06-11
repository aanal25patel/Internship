<!-- <?php 

// fetching the data:
$con = mysqli_connect("localhost", "root", "", "book") or die("DATABASE NOT FOUND !!!");

$q = $con->query("select * from books") or die(mysqli_error($con));


echo "<table border='1'>";
echo "<tr>";

echo "<th>Book_ID</th>";
echo "<th>Book Name</th>";
echo "<th>Author</th>";
echo "<th>Price</th>";

echo "</tr>";

while($row=$q->fetch_row()){
    echo "<tr>";
    echo "<td> $row[0] </td>";
    echo "<td> $row[1] </td>";
    echo "<td> $row[2] </td>";
    echo "<td> $row[3] </td>";
    
}
echo "</table>";


?> -->



<?php
if(isset($_POST['submit']))
{
    $id = $_POST['id'];
    $name = $_POST['n1'];
	$author = $_POST['auth'];
	$price = $_POST['p'];
    $filename = $_FILES['uploadfile'] ['name'];
    $tempname = $_FILES['uploadfile'] ['tmp_name'];
    $folder = "books/".$filename;
    move_uploaded_file($tempname, $folder);

    if($id!="" && $name!="" && $author!="" && $price!="" && $filename!="")
    {
         $con->query("insert into books values ($id,'$name','$author',$price,'$folder')"); 
    }

    // if($con){
	// 	echo "<script>alert('Successfully submitted the information')</script>";
	// }

	$con->close();

}


?>



<html>
    <body>
        <form action="" method="post" enctype="multipart/form-data">
            Book_id: <input type="number" name="id" placeholder="Enter Book's ID"><br><br>
			Book Name: <input type="text" name="n1" placeholder="Enter Book's name"><br><br>
			Author : <input type="text" name="auth" placeholder="Author of book"><br><br>
            Price : <input type="number" name="p" placeholder="Enter Price"><br><br>
            <input type="file" name="uploadfile" value=""/>
            <input type="submit" name="submit" value="submit"/>

        </form>

    </body>

</html>



