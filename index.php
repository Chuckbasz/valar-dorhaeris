<?php
include('login.php');
// session_start();
        // print_r($_SESSION);exit();

?>
<html>
<style type="text/css">
/*tr{
		
	border: solid black 1px;
	padding : 100%;
}*/

	a:link    {color:green; background-color:transparent; text-decoration:none}
	a:visited {color:#00000f; background-color:transparent; text-decoration:none}
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
    /*background-color: #00000f;*/
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 4px 4px 0 0;
}

ul#menu li a:hover {
    background-color: darkorange;
}

	/*td{
		border: solid black 1px;
	}
	th{
		border: solid black 1px;
		background-color: black;
		color: red;
	}*/
.image-logo{
	float: left;
	height: 100px;
	width: 300;
	display: inline;
	padding-right: 20px;
}
.mango{
	border-radius: 40px 40px 40px 40px;
	background-color: #00000f;
	color: white;
	height: 50px;
	width: 60%;
}
	#girl{
		margin: 0px;
		margin-left: 0px;
		width: 100%;
		height: 100px;
		position: fixed;
		background-color: #ffffff;
	}
	body{
		background-color: #ffffff;
		/*padding-top: 100px;*/
		color: #00000f;
		margin: 0;
	}
	p.cursive{
		font-family: florence, cursive;
	}
	.wraper{
		padding-top: 100px;
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
n
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
/*dropdown end*/
	footer{
		padding-bottom: 0px;
		background-color: #00000f;
		color: white;
		height: 50px;
	}
</style>
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
		<li><a class="active">Home</a></li>
		<?php
if(isset($_SESSION['firstname'])){ ?>
	<ul>
		<li><a href="#">Welcome <?php echo $_SESSION['firstname']; ?></a>
	<li><a href="Sign Up.php">My Profile</a></li>
	<li><a href="Sign Up.php">Logout</a></li>
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

<body>
<!--bodystart -->
<div class="wraper">
<img src="image/AXI.jpg" width="100%" height="60%">

<center>
<div class="mango">
<h1>WELCOME TO MONTANA INTERIOR DECOR</h1></div>
</center>
<center><h2>MISSION</h2></center>
<center><p class="cursive">Montana interior decor is a firm that specialises in various forms of home decorations and designs ranging from fittings to home setting and paintings. we work according to customers' specification by creating good aesthetic appeal using qualitative and affordable framework to execute projects leveraging on artisan craftmanship.we also carryout structural consultation on residential buidings ranging from bungalow, duplex,tree house and storey building </p></center>
</div>
</body>

<footer>
<center>&copy REDUNAPS TRIANGLE GROUP</center>
</footer>
</html>