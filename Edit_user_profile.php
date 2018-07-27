<?php
require("db.php");
require('top.php');
if(!isset($_SESSION['firstname'])){
    header('location: sign up.php?error=6');
};
?>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<style type="text/css">
    input{
        height: 40px;
        width: 60%;
    }
</style>
</header>
<body>
    <form name="edit_user" method="post" action="login.php">
        <div class="wraper">
	<table class="table">
		<?php 
// print_r($_SESSION);exit();
?>
		<tr><th>First Name</th><td><input type="text" name="firstname" required value=<?php echo $_SESSION['firstname'] ?>></td></tr>
		<tr><th>middle Name</th><td><input type="text" name="middlename" required value=<?php echo $_SESSION['middlename'] ?>></td></tr>
		<tr><th>surName</th><td><input type="text" name="surname" required value=<?php echo $_SESSION['surname'] ?>></td></tr>
		<tr><th>country</th><td><input type="text" name="country" required value=<?php echo $_SESSION['country'] ?>></td></tr>
		<tr><th>state of origin</th><td><input type="text" name="state_of_origin" required value=<?php echo $_SESSION['state of origin'] ?>></td></tr>
		<tr><th>LGA of origin</th><td><input type="text" name="LGA_of_origin" required value=<?php echo $_SESSION['LGA of origin'] ?>></td></tr>
		<tr><th>gender</th><td><input type="text" name="gender" required value=<?php echo $_SESSION['gender'] ?>></td></tr>
		<tr><th>geopolitical zone</th><td><input type="text" name="geopolitical_zone" required value=<?php echo $_SESSION['geopolitical zone'] ?>></td></tr>
		<tr><th>continent</th><td><input type="text" name="continent" required value=<?php echo $_SESSION['continent'] ?>></td></tr>
		<tr><th>passport</th><td><input type="text" name="passport" required value=<?php echo $_SESSION['passport'] ?>></td></tr>
		<tr><th>date of birth</th><td><input type="text" name="date_of_birth" required value=<?php echo $_SESSION['date of birth'] ?>></td></tr>
		<tr><th>email</th><td><input type="text" name="email" required value=<?php echo $_SESSION['email'] ?>></td></tr>
		<tr><th>phone number</th><td><input type="text" name="phone_number" required value=<?php echo $_SESSION['phone number'] ?>></td></tr>
        <tr><td><input type="submit" class="btn-primary" name="update2" value="Save"></td></tr>
	</table>
</form>
</div>
</body>
<footer>
	<center>&copy REDUNAPS TRIANGLE GROUP</center>
</footer>
</html>