<!DOCTYPE html>
<html>
<style type="text/css">
.input{
	width: 95%;
	height: 40px;
	margin: 10px;
	
}
label{
	color: #00000f;
}
select{
	width: 95%;
	height: 40px;
	margin: 10px;
	
}
/*.image-logo{
	height: 100px;
	width: 200;
	display: inline;
}*/
footer{
		padding-bottom: 50px;
		background-color: #00000f;
		color: white;
}
.form{
	width: 95%;
	display: inline-block;
	padding-top: 100px;
	border: solid red;
	height: 40%;
	background-color: #eeeeee;
}
body{
	background-color: white;
	border-top: 0.5px 
	padding: 20%;
	border:solid black 0.5px;
	color: #00000f;
	width: 94%;
}
</style>
<head>
	<title>Registration portal</title>
<div class="head" style="display: inline-block;"></div>
</head>
<p> <b><big> <center>Registration Form</center> </big></p>
<body>
<div id="nav">
<a href="sign up.php">&#8592; log in/sign up page</a><br>
</div>
<?php
require("db.php");
if(isset($_POST['create'])){
$first_name = $_POST['first_name'];
$middle_name = $_POST['middle_name'];
$surname_name = $_POST['surname_name'];
$country = $_POST['country'];
$state_of_origin = $_POST['state_of_origin'];
$LGA_of_origin = $_POST['LGA_of_origin'];
$gender = $_POST['gender'];
$Geopolitical_zone = $_POST['Geopolitical_zone'];
$continent = $_POST['continent'];
$passport = $_POST['passport'];
$date_of_birth = $_POST['DOB'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$password = $_POST['password'];
$date = date("d-M-Y H:m:s",time());

//hashing password
// $hashpassword=crypt($password, 'sha6');
$md5=md5($password);
// print_r(trim(crypt($password, 'salt'))); exit();
// print_r($hashpassword); exit();

//inseter
$insert ="INSERT INTO `user_registration`(`id`, `first_name`, `middle_name`, `sur_name`, `country`, `state_of_origin`, `lga_of_origin`, `gender`, `geo_political_zone`, `continent`, `passport`, `date_of_birth`, `email`, `phone_number`, `password`, `date_created`) VALUES (null,'$first_name','$middle_name','$surname_name','$country','$state_of_origin','LGA_of_origin','$gender','$Geopolitical_zone','$continent','$passport','$date_of_birth','$email','$phone_number','$md5','$date')";
$query =mysqli_query($db,$insert) or die("error inserting data".mysqli_error($db));

if($query){
// 	echo "data inserted";
// };



	echo "<script>alert('successful')</script>";
}else{
	echo "<script>alert('not successful')</script>";

};

}else{
	// echo "<script>alert('am not here')</script>";
};
?>	
<div class="form" style="display: inline-block; padding-left: 10px; padding-right: 10px">
<!-- <img src="image/hox.jpg" class="image-logo" width="100" height="50"> -->
<form name="user_registration" method="POST" action="">
	<label>First Name</label>
<input type="text" name="first_name" class="input" required="required">
<br>

<label>Middle Name</label>
<input type="text" name="middle_name" class="input">
<br>

<label>Surname Name</label>
<input type="text" name="surname_name" class="input">
<br>

<label>country</label>
<input type="text" name="country" class="input">

<br>

<label>State of origin</label>
<input type="text" name="state_of_origin" class="input">

<br>

<label>LGA of origin</label>
<input type="text" name="LGA_of_origin" class="input">


<br>
<label>Gender</label>
<select name="gender">	
<option value="male">male</option>
<option value="female">female</option>
</select>
<br>
<label>Geopolitical zone</label>
<select name="Geopolitical_zone">	
<option value="northcentral">northcentral</option>
<option value="northeast">northeast</option>
<option value="northwest">northwest</option>
<option value="southwest">southwest</option>
<option value="southeast">southeast</option>
<option value="southsouth">southsouth</option>
</select>
<br>
<label>continent</label>
<select name="continent">	
<option value="asia">asia</option>
<option value="europe">europe</option>
<option value="africa">africa</option>
<option value="northamerica">northamerica</option>
<option value="southamerica">southamerica</option>
<option value="antactica">antactica</option>
<option value="australia">australia</option>
</select>
<br>

<label>Passport</label>
<input type="file" name="passport" class="input">

<br>

<label>Date of Birth</label>
<input type="Date" name="DOB" class="input">

<br>

<label>Email</label>
<input type="email" name="email" class="input" required="required">

<br>

<label>phone number</label>
<input type="number" name="phone_number" class="input">

<br>

<label>password</label>
<input type="password" name="password" class="input">
<br>
<input type="submit" name="create" value="submit form">
</form>
</div>	
</body>
<footer>
&copy Redunaps Triangle Group

</footer>
</html>