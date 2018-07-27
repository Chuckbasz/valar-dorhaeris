<!DOCTYPE html>

<html lang="en">

<style type="text/css">
.btn-twitter{
	background-color: green;
}
.btn-facebook{
	background-color: blue;
}
.btn-goggle{
	background-color: red;
}	
	a:link    {color:green; background-color:transparent; text-decoration:none}
	a:visited {color:blue; background-color:transparent; text-decoration:none}
	a:hover   {color:red; background-color:transparent; text-decoration:underline}
	a:active  {color:yellow; background-color:transparent; text-decoration:underline}

ul#menu {
    padding: 0;
    float: right;
}

ul#menu li {
    display: inline;
}

ul#menu li a {
    background-color: #00000f;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 4px 4px 0 0;
}

ul#menu li a:hover {
    background-color: orange;
}
#girl{
		padding-top: 0px;
		width: 100%;
		height: 100px;
		/*position: fixed;*/
		background-color: white;

	}
.image-logo{
	float: left;
	height: 100px;
	width: 300px;
	display: inline;
	padding-right: 20px;
}
	/*#nav {
    line-height:0.50px;
    background-color:#00000f;
    height:520px;
    width:100px;
    float: right;
    padding-top: :5px; 
}*/
.stone{
		padding-top: 150px;
	}

body{
	background-color: #0f000f;
	color: red;
}
input{
	background-color: #ffffff;
}
  /*dropdown start*/
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #00000f;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: darkorange;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #00000f;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
footer{
		padding-bottom: 0px;
		background-color: #00000f;
		color: white;
		height: 30%;
}
</style>
<head>
<!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Log In : Montana interiors</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Monoton">

    <link rel="stylesheet" href="styles.css">
<div id="girl">
    <img src="image/hox.jpg" class="image-logo">
    <div style="width: 100px; float: left;">
        <br>
        <br>
        <br>
        <marquee>
        <b><i style="color: #00000f;">....quality is our trademark </i></b>
    </marquee>
    </div>
<ul id="menu">
     <li><a href="index.php">Home</a></li>
     <li><a href="Sign Up.php">Sign Up</a></li>
 <li class="dropdown">
    <a href="#" class="dropbtn">Blog</a>
    <div class="dropdown-content">
      <a href=# onclick="window.open('http://www.moondockcityproduction.blogspot.com');">NEWS BLOG</a>
      <a href="http://www.moondockcityproduction.blogspot.com">Link 2</a>
      <a href="#">Link 3</a>
      </div>
</li>
        <li><a href="contact us.php">Contact Us</a></li>
        <li><a href="luz.php">Company</a></li>
        <li><a href="about us.php"> About Us</a></li>
        <li><a href="our staff.php"> Our Staff</a></li>
        <li><a href="gallery.php"> Gallery</a></li>
    
</ul>
</div>

<!-- <div id="girl">
	<img src="image/hox.jpg" class="image-logo";>
	<div style="width: 100px; float: left;">
		<br>
		<br>
		<marquee>
	    <b><i style="color: #00000f;">....quality is our trademark </i></b>
	</marquee>
	</div>
	<ul id="menu">
		<li><a href="index.php">Home</a></li>
		<li><a href="sign up.php">Sign Up</a></li>
		<li><a href="contact us.php">Contact Us</a></li>
		<li><a href="luz.php">Company</a></li>
		<li><a href="about us.php"> About Us</a></li>
		<li><a href="our staff.php"> Our Staff</a></li>
		<li><a href="gallery.php"> Gallery</a></li>
	</ul>
</div> -->
</head>
<body>
	<!-- <div id="nav">
<a href="index.php">&#8592; Home</a>
</div>
 -->
	<div class="stone">

		<div class="header">

			<h5><strong class="header-title">Sign In=</strong><small class="pull-center header-link">Don't have an account? <a href="create an account.php"><b>Create an account.</b></a></small></h5>

		</div>
        

    <div class="row">
    	<div class="form col-sm-6">
    
<?php
if(isset($_REQUEST['error'])){
$error = $_REQUEST['error'];
// print_r($error);exit();
if($error == 1){     
            echo "<div class='alert-danger' style='height:50px; text-align:center; margin-top:20px;'> Invalid username or password</div>";
};

if($error == 2){     
            echo "<div class='alert-danger' style='height:50px; text-align:center; margin-top:20px;'><strong> Oops! Sorry That Account Has been Disabled Please contact Admin for Help</strong> </div>";
};
if($error == 6){     
            echo "<div class='alert-danger' style='height:50px; text-align:center; margin-top:20px;'><strong> Oops! Sorry you have to login to view this page</strong> </div>";
};
};
?>

    <form name="login" method="post" action="login.php">

    	<input type="email" name="email" class="form-control log-in-inputs" placeholder="email address" required="">

    	<input type="password" name="password" class="form-control log-in-inputs" placeholder="Password" required="">

<!--     	<input type="password" name="password2" class="form-control log-in-inputs" placeholder="Confirm Password"> -->

    	<p><input type="checkbox" name="checkbox"><small>Remember me</small></p>

    	<input type="submit" name="login" class="btn btn-lg btn-success" value="Sign In">

    	<p><a href="#"><small>Forgot password?</small></a></p>

    </form>

    </div>

    <div class="col-sm-6 pull-right">

    	<div class="social-media">

    	<h5>Sign In with : </h5>

    	<input type="button" name="google" class="btn-goggle" value="Google">

    	<input type="button" name="facebook" class="btn-facebook" value="Facebook">

    	<input type="button" name="twitter" class="btn-twitter" value="Twitter">

    	</div>

    </div>

    </div>


	</div>

	<div id="footer">

		<footer>

   	<a href="#">Privacy Policy</a>

   	<a href="#">About Montana Interiors</a>

   	<a href="#">Community</a>

   	<a href="#">Join</a>
<br>
<p><center>&copy REDUNAPS TRIANGLE GROUP</center></p>

 </footer>
</div>



    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <script src="scripts.js"></script>

</body>

</html>
