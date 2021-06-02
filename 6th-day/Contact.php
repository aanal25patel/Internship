<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Welcome to Aanal's Blog</title>
<!-- <link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css" /> -->
<!-- <link href="http://fonts.googleapis.com/css?family=Coda:400,800" rel="stylesheet" type="text/css" /> -->
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>



<div id="header-wrapper">
	<div id="header">
		<div id="logo">
			<h1><a href="#">Welcome to Aanal's Blog</a></h1>
			<!-- <p>Template design by <a href="http://www.freecsstemplates.org">FCT</a></p> -->
		</div>
	</div>
</div>

<?php

$con = mysqli_connect("localhost", "root", "", "internship") or die("DATABASE NOT FOUND !!!");

if($_POST){
	$name = $_POST['n1'];
	$id = $_POST['id'];
	$age = $_POST['age'];
	$email = $_POST['e1'];
	$mobile = $_POST['No'];
	$city = $_POST['city'];
	$college = $_POST['college'];
	$dob = $_POST['birthday'];
	$field = $_POST['branches'];
	$gender = $_POST['gender'];


	// $q = mysqli_query($con, "insert into tbl_student (Name, ID, Age, Email, Mobile No, City, College Name, DOB, Field) values('$name',$id,$age,'$email',$mobile,'$city','$college',$dob,'$field','$gender')") or die(mysqli_error($con));

	$con-> query("insert into tbl_student values('$name',$id,$age,'$email',$mobile,'$city','$college',$dob,'$field','$gender')");

	if($con){
		echo "<script>alert('Successfully submitted the information')</script>";
	}

	//   $con->query("insert into cart values('$cna','$mob','$tad',$pid,'$pna',$qty,$price,$amt)");
	$con->close();
}

?>




<div id="wrapper"> 
	<!-- end #header -->
	<div id="page-bgtop"></div>
	<div id="page">
		<div><img src="images/Aanal's Blog.png" width="900" height="410" alt="" /></div><br>
		
		<h1> About You </h1>

		<div class="post">

			<form method="post">
				Name: <input type="text" name="n1" placeholder="enter your name"><br><br>
				ID : <input type="number" name="id" placeholder="Enter your ID"><br><br>
				Age : <input type="number" name="age" placeholder="Enter your age"><br><br>
				Gender: <select type="text" name="gender">
					<option>Male</option>
					<option>Female</option>
					<Option>Other</Option>

				</select> 
					
				<br>
				<br>
				
				Email: <input type="email" name="e1" placeholder="Enter your email"><br><br>
				Mobile No: <input type="number" name="No" placeholder="Enter your mobile no."><br><br>
				City: 
				<label for="city">Choose a city:</label>

				<select name="city">
				<option value="Vadodara">Vadodara</option>
				<option value="Bharuch">Bharuch</option>
				<option value="Ahmedabad">Ahmedabad</option>
				<option value="Surat">Surat</option>
				<option value="Rajkot">Rajkot</option>
				</select>

				<br>
				<br>

				COllege Name: 
				<label for="college">Choose You college:</label>

				<select name="college">
				<option value="BITS Edu Campus">BITS Edu Campus</option>
				<option value="SVIT">SVIT</option>
				<option value="NTC">NTC</option>
				<option value="VIT">VIT</option>
				<option value="ITM">ITM</option>
				</select>

				<br>
				<br>

				Date of Birth: 
				<input type="date" name="birthday">
				
				
				<br>
				<br>


				Field:
				<label for="Field">Choose Your Field:</label>

				<select name="branches">
				<option value="CSE">CSE</option>
				<option value="IT">IT</option>
				<option value="ME">ME</option>
				<option value="Chemical">Chemical</option>
				<option value="Electrical">Electrical</option>
				</select>

				<br>
				<br>
			
				<input type="submit" value="Submit">

			</form>
		</div>
	
		<div class="post">
			<ul>
				<li>
				<br>
					<h2>Contact &nbsp; Me</h2><br>
					<p>Email Id: patelaanal2@gmail.com</p>
                    <p>linkedin: linkedin.com/in/aanal-patel-6207421a9</p>
				</li>
			</ul>
		</div>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<div id="page-bgbtm"></div>
	<!-- end #page --> 
</div>

</body>
</html>
