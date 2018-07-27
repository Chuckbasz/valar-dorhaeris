<?php
require('top.php');
if(!isset($_SESSION['firstname'])){
    header('location: sign up.php?error=6');
};
?>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</header>
<body>
        <?php
        if(isset($_REQUEST['success'])){
// $error = $_REQUEST['error'];
        $success = $_REQUEST['success'];
if($success =='user_profile_updated_successful'){     
            echo "<div class='alert-success' style='height:50px; text-align:center;'> profile updated successfully</div>";
};
};
        ?>
<div class="wraper">
	
	<table class="table">
		<?php 
// print_r($_SESSION);exit();
?>
		<tr><th>Passport</th><td><img style="width: 200px; height: 200px;" src=<?php echo $_SESSION['passport']?> ></td></tr>
		<tr><th>First Name</th><td><?php echo $_SESSION['firstname'] ?></td></tr>
		<tr><th>middle Name</th><td><?php echo $_SESSION['middlename'] ?></td></tr>
		<tr><th>surName</th><td><?php echo $_SESSION['surname'] ?></td></tr>
		<tr><th>country</th><td><?php echo $_SESSION['country'] ?></td></tr>
		<tr><th>state of origin</th><td><?php echo $_SESSION['state of origin'] ?></td></tr>
		<tr><th>LGA of origin</th><td><?php echo $_SESSION['LGA of origin'] ?></td></tr>
		<tr><th>gender</th><td><?php echo $_SESSION['gender'] ?></td></tr>
		<tr><th>geopolitical zone</th><td><?php echo $_SESSION['geopolitical zone'] ?></td></tr>
		<tr><th>continent</th><td><?php echo $_SESSION['continent'] ?></td></tr>
		<tr><th>passport</th><td><?php echo $_SESSION['passport'] ?></td></tr>
		<tr><th>date of birth</th><td><?php echo $_SESSION['date of birth'] ?></td></tr>
		<tr><th>email</th><td><?php echo $_SESSION['email'] ?></td></tr>
		<tr><th>phone number</th><td><?php echo $_SESSION['phone number'] ?></td></tr>
	</table>
</div>
</body>
<footer>
	<center>&copy REDUNAPS TRIANGLE GROUP</center>
</footer>
</html>