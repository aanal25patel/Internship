
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



	$con-> query("insert into tbl_student values('$name',$id,$age,'$email',$mobile,'$city','$college',$dob,'$field','$gender')");

	if($con){
		echo "<script>alert('Successfully submitted the information')</script>";
	}

	$con->close();
}

?>

<html>

<body>

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

</body>

</html>

<a href='fetch_data.php'>Display Record </a>