<?php
include('login.php');
// session_start();
        // print_r($_SESSION);exit();

?>
<!DOCTYPE html>
<html lang="en">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<style type="text/css">
/* Style inputs with type="text", select elements and textareas */
input[type=text], select, textarea {
    width: 100%; /* Full width */
    padding: 12px; /* Some padding */  
    border: 1px solid #ccc; /* Gray border */
    border-radius: 4px; /* Rounded borders */
    box-sizing: border-box; /* Make sure that padding and width stays in place */
    margin-top: 6px; /* Add a top margin */
    margin-bottom: 16px; /* Bottom margin */
    resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
    background-color: #45a049;
}

/* Add a background color and some padding around the form */
.container1 {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
    width: 50%;
    float: right;
}
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
    width: 350px;
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
        position: top;
        background-color: #ffffff;
        /*padding-top: 0.5px;*/
    }
    body{
        background-color: white;
        padding-top: 50px;
        color: #00000f;
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
</style>

<head>
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
    <?php
if(isset($_SESSION['firstname'])){ ?>
  <ul>
    <li class="dropdown">
  <a href="#" class="dropdown">Welcome <?php echo $_SESSION['firstname']; ?></a>
  <div class="dropdown-content">
  <a href="profile.php">My Profile</a>
  <a href="Sign Up.php">Logout</a>
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
<body>
  <?php
require("db.php");
if(isset($_POST['submit'])){
$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$country = $_POST['country'];
$subject = $_POST['subject'];
$date_created = date("d-M-Y H:m:s",time());

//inseter
$insert ="INSERT INTO `contact_us`(`id`, `first_name`, `last_name`, `country`, `subject`, `date_created`) VALUES (null, '$first_name','$last_name','$country','$subject','$date_created')";
$query =mysqli_query($db,$insert) or die("error inserting data".mysqli_error($db));

if($query){
//  echo "data inserted";
// };



  echo "<div class='alert-success' style='height:50px; text-align:center; margin-top:20px;'> thank you $first_name for contacting us, we will get back to you</div>";
}else{
  echo "<script>alert('not successful')</script>";

};

}else{
  // echo "<script>alert('am not here')</script>";
};
?>  
  
  <form name="contact_us" method="POST" action="">
    <div class="container1">
  <form action="action_page.php">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
      <option value="usa">NIGERIA</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit" name="submit">

  </form>
</div>
</body>
</html>