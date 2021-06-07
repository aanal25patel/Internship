<?php

$con = mysqli_connect("localhost", "root", "", "internship") or die("DATABASE NOT FOUND !!!");

if(!isset($_GET['id']) || empty($_GET['id'])){
    header("location:fetch_data.php");
}

$editid = $_GET['id'];

// Select data from table

$editq = $con->query("select * from tbl_student where ID=$editid") or die(mysqli_error($con));
$edit_data = mysqli_fetch_array($editq);
// print_r($edit_data);



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

    $uq = $con->query("update tbl_student set Name = '$name', ID = $id, Age = $age, Email = '$email', Mobile = $mobile, City = '$city', College = '$college', DOB = $dob, Field = '$field', Gender = '$gender' where ID = $editid)") or die(mysqli_error($con));

    if($uq){
        echo "<script>alert('Record Updated'); window.location = 'fetch_data.php'; </script>";
    }


}
    // <!-- $con->query("update studuent_info set sna='$na' , percentage='$per' where sid='$id'"); -->

?>


<html>
        <body>

                <form method="post">

                                Name: <input type="text" name="n1" placeholder="enter your name" value="<?php echo $edit_data['Name']; ?>"><br><br>
                                ID : <input type="number" name="id" placeholder="Enter your ID" value="<?php echo $edit_data['ID']; ?>"><br><br>
                                Age : <input type="number" name="age" placeholder="Enter your age" value="<?php echo $edit_data['Age']; ?>"><br><br>
                                Gender: <select type="text" name="gender" value="<?php echo $edit_data['Name']; ?>">
                                    <option <?=$edit_data['Gender'] == 'Male' ? ' selected="selected"' : '';?>>Male</option>
                                    <option <?=$edit_data['Gender'] == 'Female' ? ' selected="selected"' : '';?>>Female</option>
                                    <Option <?=$edit_data['Gender'] == 'Other' ? ' selected="selected"' : '';?>>Other</Option>

                                </select> 
                                    
                                <br>
                                <br>
                                
                                Email: <input type="email" name="e1" placeholder="Enter your email" value="<?php echo $edit_data['Email']; ?>"><br><br>
                                Mobile No: <input type="number" name="No" placeholder="Enter your mobile no." value="<?php echo $edit_data['Mobile']; ?>"><br><br>
                                City: 
                                <label for="city">Choose a city:</label>

                                <select name="city" value="<?php echo $edit_data['City']; ?>">
                                <option <?=$edit_data['City'] == 'Vadodara' ? ' selected="selected"' : '';?> value="Vadodara">Vadodara</option>
                                <option <?=$edit_data['City'] == 'Bharuch' ? ' selected="selected"' : '';?> value="Bharuch">Bharuch</option>
                                <option <?=$edit_data['City'] == 'Ahmedabad' ? ' selected="selected"' : '';?> value="Ahmedabad">Ahmedabad</option>
                                <option <?=$edit_data['City'] == 'Surat' ? ' selected="selected"' : '';?> value="Surat">Surat</option>
                                <option <?=$edit_data['City'] == 'Rajkot' ? ' selected="selected"' : '';?> value="Rajkot">Rajkot</option>
                                </select>

                                <br>
                                <br>

                                College Name: 
                                <!-- <label for="college">Choose You college:</label> -->

                                <select name="college" value="<?php echo $edit_data['College']; ?>">
                                <option <?=$edit_data['College'] == 'BITS' ? ' selected="selected"' : '';?> value="BITS Edu Campus">BITS Edu Campus</option>
                                <option <?=$edit_data['College'] == 'SVIT' ? ' selected="selected"' : '';?> value="SVIT">SVIT</option>
                                <option <?=$edit_data['College'] == 'NTC' ? ' selected="selected"' : '';?> value="NTC">NTC</option>
                                <option <?=$edit_data['College'] == 'VIT' ? ' selected="selected"' : '';?> value="VIT">VIT</option>
                                <option <?=$edit_data['College'] == 'ITM' ? ' selected="selected"' : '';?> value="ITM">ITM</option>
                                </select>

                                <br>
                                <br>

                                Date of Birth: 
                                <input type="date" name="birthday" value="<?php echo $edit_data['DOB']; ?>">
                                
                                
                                <br>
                                <br>


                                Field:
                                <label for="Field" value="<?php echo $edit_data['Field']; ?>"></label>

                                <select name="branches">
                                <option <?=$edit_data['Field'] == 'CSE' ? ' selected="selected"' : '';?> value="CSE"> CSE</option>
                                <option <?=$edit_data['Field'] == 'IT' ? ' selected="selected"' : '';?> value="IT">IT</option>
                                <option <?=$edit_data['Field'] == 'ME' ? ' selected="selected"' : '';?> value="ME">ME</option>
                                <option <?=$edit_data['Field'] == 'Chemical' ? ' selected="selected"' : '';?> value="Chemical">Chemical</option>
                                <option <?=$edit_data['Field'] == 'Electrical' ? ' selected="selected"' : '';?> value="Electrical">Electrical</option> 
                                </select>

                                <br>
                                <br>
                            
                                <input type="submit" value="Submit">




                </form>



        </body>

</html>