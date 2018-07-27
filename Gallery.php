<?php
include('login.php');
// session_start();
        // print_r($_SESSION);exit();

?>
<!DOCTYPE html>
<html>
<head>
<style>
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
        position: fixed;
        background-color: #ffffff;
    }
    body{
        background-color: white;
        /*padding-top: 100px;*/
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
    footer{
        padding-bottom: 0px;
        background-color: #00000f;
        color: white;
        height: 50px;
    }
/* The Image Box */
div.img {
    border: 1px solid #ccc;
}

div.img:hover {
    border: 1px solid #777;
}

/* The Image */
div.img img {
    width: 100%;
    height: 200px;
    cursor: pointer;
}

/* Description of Image */
div.desc {
    padding: 15px;
    text-align: center;
}

* {
    box-sizing: border-box;
}

/* Add Responsiveness */
.responsive {
    padding: 0 6px;
    float: left;
    width: 24.99999%;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}

/* Caption of Modal Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
}

/* Add Animation */
.modal-content, #caption {    
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0.1)} 
    to {transform:scale(1)}
}

/* The Close Button */
.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* Responsive Columns */
@media only screen and (max-width: 700px){
    .responsive {
        width: 49.99999%;
        margin: 6px 0;
    }
    .modal-content {
        width: 100%;
    }
}

@media only screen and (max-width: 500px){
    .responsive {
        width: 100%;
    }
}

/* Clear Floats */
.clearfix:after {
    content: "";
    display: table;
    clear: both;
}
/*Tool tipd start*/
/* Tooltip container */
.tooltip {
    position: relative;
    display: inline-block;
    border-bottom: 1px dotted black; /* If you want dots under the hoverable text */
}

/* Tooltip text */
.tooltip .tooltiptext {
    visibility: hidden;
    width: 120px;
    background-color: black;
    color: #fff;
    text-align: center;
    padding: 5px 0;
    border-radius: 6px;
 
    /* Position the tooltip text - see examples below! */
    position: absolute;
    z-index: 1;
}

/* Show the tooltip text when you mouse over the tooltip container */
.tooltip:hover .tooltiptext {
    visibility: visible;
}
/*Tool tipd end*/
</style>
<div id="girl">
    <img src="image/hox.jpg" class="image-logo">
    <div style="width: 100px; float: left;">
        <br>
        <br>
        <br>
        <marquee>
        <b><i style="color: #00000f;">....quality is our trademark </i></b>
    </marquee>
    </div> <div id="girl">
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
<!-- <ul id="menu">
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
</div> -->
</head>
<body>
<div class="wraper">

<h2 style="text-align:center">Montana Interiors Image Gallery</h2>

<div class="responsive">
  <div class="img">
      <img src="image/FB_IMG_15196914769787825.jpg" alt="Trolltunga Norway" width="300" height="200">
    <div class="desc">Trolltunga Norway</div>
  </div>
</div>


<div class="responsive">
  <div class="img">
    <img src="image/FB_IMG_15196914545216586.jpg" style="height: 200px;" alt="Forest" width="300" height="200">
    <div class="desc">Forest Bridge</div>
  </div>
</div>

<div class="responsive">
  <div class="img">
    <img src="image/FB_IMG_15196914378366682.jpg" alt="Northern Lights" width="300" height="200">
    <div class="desc">Northern Lights, Norway</div>
  </div>
</div>

<div class="responsive">
  <div class="img">
    <img src="image/FB_IMG_15196913642439866.jpg" alt="Mountains" width="300" height="200">
    <div class="desc">Beautiful Mountains</div>
</div>
</div>

<!-- Secon Line -->
<div class="responsive">
    <div class="img">
      <img src="image/FB_IMG_15196913150449592.jpg" alt="Trolltunga Norway" width="300" height="200">
    <div class="desc">Trolltunga Norway</div>
  </div>
</div>

<div class="responsive">
  <div class="img">
    <img src="image/FB_IMG_15196914320341160.jpg" alt="Forest" width="300" height="200">
    <div class="desc">Forest Bridge</div>
  </div>
</div>

<div class="responsive">
  <div class="img">
    <img src="image/imago.jpg" alt="Northern Lights" width="300" height="200">
    <div class="desc">Northern Lights, Norway</div>
  </div>
</div>

<div class="responsive">
  <div class="img">
    <img src="image/pap.jpg" alt="Mountains" width="300" height="200">
    <div class="desc">Beautiful Mountains</div>
  </div>
  </div>

<div class="clearfix"></div>

<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">Close</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}

// Get all images and insert the clicked image inside the modal
// Get the content of the image description and insert it inside the modal image caption
var images = document.getElementsByTagName('img');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
var i;
for (i = 0; i < images.length; i++) {
   images[i].onclick = function(){
       modal.style.display = "block";
       modalImg.src = this.src;
       modalImg.alt = this.alt;
       captionText.innerHTML = this.nextElementSibling.innerHTML;
   }
}
</script>

<div style="padding:6px;">
<div class="tooltip">Hover over me
  <span class="tooltiptext">Tooltip text</span>
</div>
  <p>This example combines CSS3 (animation and media queries) and JavaScript, to create a responsive image gallery that will enlarge an image when it is clicked on.</p>
</div>
<footer>
<center>&copy REDUNAPS TRIANGLE GROUP</center>
</footer>
</div>

</body>
</html>