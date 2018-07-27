<?php
if(!isset($_SESSION['firstname'])){
include('login.php');
}else{

};
// session_start();
        // print_r($_SESSION);exit();

?>
<html>
<link rel="stylesheet" type="text/css" href="css/my.css">
<head>
<title>Montana Interiors</title>
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
		<li><a href="index.php" class="active">Home</a></li>
		<?php
if(isset($_SESSION['firstname'])){ ?>
	<ul>
		<li class="dropdown">
	<a href="#" class="dropdown">Welcome <?php echo $_SESSION['firstname']; ?></a>
	<div class="dropdown-content">
	<a href="profile.php">My Profile</a>
	<a href="Edit_user_profile.php">Edit Profile</a>
	<?php
if($_SESSION['access'] == 3){ ?>
	<a href="admin.php">Dashboard</a>
	<?php
}else{

};
?>
	
	<form name="Logout" method="post">
		<input type="hidden" name="email" value=<?php echo $_SESSION['email'] ?>>
		<input type="submit" class="btn-warning" name="logout" value="Logout" style="background-color: red;">
	<!-- <a href="#" onclick="logout()">Logout</a> -->
	</form>
</div>
</li>
	<?php }else{ ?>

		<li><a href="Sign Up.php">Sign Up</a></li>

<?php };

	?>
			
			<li class="dropdown">
    <a href="#" class="dropbtn">Blog</a>
    <div class="dropdown-content">
      <a href=# onclick="window.open('http://www.moondockcityproduction.blogspot.com');">NEWS BLOG</a>
      <a href="http://www.moondockcityproduction.blogspot.com">BLOG1</a>
      <a href=# onclick="window.open('http://www.blogger.com');">Blogger</a>
      </div>
</li>
		<li><a href="contact us.php">Contact Us</a></li>
		<li><a href="luz.php">Company</a></li>
		<li><a href="about us.php"> About Us</a></li>
		<li><a href="our staff.php"> Our Staff</a></li>
		<li><a href="Gallery.php"> Gallery</a></li>
	
</ul>
</div>

</head>