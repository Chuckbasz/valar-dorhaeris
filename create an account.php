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
.col-success{
width: 100%;
color: white;
font-size: 14px;
background-color: darkgreen;
}
.col-danger{
width: 100%;
color: white;
font-size: 16px;
background-color: darkred;
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
<div class="col-md-3">
	<?php
require("db.php");
	
    // $db= mysqli_connect("","root","","chuckbass") or die("Unabletoconnect".mysqli_error($conn));
    // if($conn){
    //     echo "connected";
    // }else{
    //     echo "not connected";
    // }
$target_dir = "uploads/";
$uploadOk = 1;
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    // print_r($_POST);exit();
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	// print_r(getimagesize($_FILES["fileToUpload"]["tmp_name"],$target_file));exit();
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    $check =getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    // print_r($check);exit();
    if($check !== false) {
        // echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "<div class='col-danger'>File is not an image.</div>";
        $uploadOk = 0;
    }

    // Check if file already exists
if (file_exists($target_file)) {
    echo "<div class='col-danger'>Sorry, file already exists.</div>";
    $uploadOk = 0;
}
// Check file size
// print_r($_FILES["fileToUpload"]["size"]);exit();
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "<div class='col-danger'>Sorry, your file is too large.</div>";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "<div class='col-danger'>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</div>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<div class='col-danger'>Sorry, your file was not uploaded.</div>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "<div class='col-success'>The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.</div>";
    } else {
        echo "<div class='col-danger'>Sorry, there was an error uploading your file.</div>";
    }
}
//pass all post data to a variable
$first_name = $_POST['first_name'];
$middle_name = $_POST['middle_name'];
$surname_name = $_POST['surname_name'];
$country = $_POST['country'];
$state_of_origin = $_POST['state_of_origin'];
$LGA_of_origin = $_POST['LGA_of_origin'];
$gender = $_POST['gender'];
$Geopolitical_zone = $_POST['Geopolitical_zone'];
$continent = $_POST['continent'];
$passport = $target_file;
// print_r($passport);exit();
// $passport = $_POST['fileToUpload'];
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
$query =mysqli_query($db,$insert);
// or die("error inserting data".mysqli_error($db));

if($query){
    echo "<div class='col-success'>Your account has beencreatedsuccessfully, Our admin will review and activate your account soon<br><strong>Note:</strong> You cant login untill that is done Thanks.";
}else{
    echo "<div class='col-danger'>There Was an error creating your account, Please try again letter</div>";
};
};


?> 
</div>	
<div class="form" style="display: inline-block; padding-left: 10px; padding-right: 10px">
<!-- <img src="image/hox.jpg" class="image-logo" width="100" height="50"> -->
<form action="" method="post" enctype="multipart/form-data">
	<div class="form-group">
    <label>First Name</label>
    <br/>
<input type="text" name="first_name" class="input" required="required">
</div>

<div class="form-group">
<label>Middle Name</label>
<br/>
<input type="text" name="middle_name" class="input">
</div>

<div class="form-group">
<label>Surname Name</label>
<br/>
<input type="text" name="surname_name" class="input">
</div>

<div class="form-group">
<label>country</label>
<br/>
<input type="text" name="country" class="input">
</div>

<div class="form-group">
<label>State of origin</label>
<br/>
<input type="text" name="state_of_origin" class="input">
</div>

<div class="form-group">
<label>LGA of origin</label>
<br/>
<input type="text" name="LGA_of_origin" class="input">
</div>

<div class="form-group">
<label>Gender</label>
<br/>
<select name="gender" class="input">  
<option value="male">male</option>
<option value="female">female</option>
</select>
</div>

<div class="form-group">
<label>Geopolitical zone</label>
<br/>
<select name="Geopolitical_zone" class="input">   
<option value="northcentral">northcentral</option>
<option value="northeast">northeast</option>
<option value="northwest">northwest</option>
<option value="southwest">southwest</option>
<option value="southeast">southeast</option>
<option value="southsouth">southsouth</option>
</select>
</div>

<div class="form-group">
<label>continent</label>
<br/>
<select name="continent" class="input">   
<option value="asia">asia</option>
<option value="europe">europe</option>
<option value="africa">africa</option>
<option value="northamerica">northamerica</option>
<option value="southamerica">southamerica</option>
<option value="antactica">antactica</option>
<option value="australia">australia</option>
</select>
</div>

<div class="form-group">
<label>Date of Birth</label>
<br/>
<input type="date" name="DOB" class="input">
</div>


<div class="form-group">
<label>Email</label>
<br/>
<input type="email" name="email" class="input" required="required">
</div>

<div class="form-group">
<label>phone number</label>
<br/>
<input type="number" name="phone_number" class="input">
</div>

<div class="form-group">
<label>password</label>
<br/>
<input type="password" name="password" class="input">
</div>


<div class="form-group">
	<input type="file" name="fileToUpload" id="fileToUpload" class="input"><br/>
<small class="text-muted block">Max file size: 1Mb (Gif/Jpeg/jpg/png)</small>
</div>
<br/>
 <input type="submit" value="Create" name="submit" class="btn btn-md btn-success">
</form>
</div>


</body>
<footer>
&copy Redunaps Triangle Group

</footer>
</html>