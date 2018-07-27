<?php
        session_start();
// print_r($_POST);exit();
        require("db.php");
        if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $hash = md5(trim($password));
        $insert ="SELECT * FROM `user_registration` WHERE email ='$email' AND password ='$hash' LIMIT 1";
        $query =mysqli_query($db,$insert) or die("error selecting data".mysqli_error($db));
        $result =mysqli_fetch_array($query);


        if(mysqli_num_rows($query) > 0){
            // print_r($result['status']);exit();

            if($result['status'] !=1) {
                header('location: sign up.php?error=2');
            }else{
        // passing all user data to session
        $_SESSION['id'] = $result['id'];
        $_SESSION['firstname'] = $result['first_name'];
        $_SESSION['middlename'] = $result['middle_name'];
        $_SESSION['surname'] = $result['sur_name'];
        $_SESSION['country'] = $result['country'];
        $_SESSION['state of origin'] = $result['state_of_origin'];
        $_SESSION['LGA of origin'] = $result['lga_of_origin'];
        $_SESSION['gender'] = $result['gender'];
        $_SESSION['geopolitical zone'] = $result['geo_political_zone'];
        $_SESSION['continent'] = $result['continent'];
        $_SESSION['passport'] = $result['passport'];
        $_SESSION['date of birth'] = $result['date_of_birth'];
        $_SESSION['email'] = $result['email'];
        $_SESSION['phone number'] = $result['phone_number'];
        $_SESSION['access'] = $result['access_level'];
// print_r($_SESSION);exit();
header('location: index.php');
};
    }else{
            header('location: sign up.php?error=1');
        }
    // echo "<script>alert('successful')</script>";
        };

        if(isset($_POST['logout'])){
            session_destroy();
            echo "<script>alert('am here')</script>";
            header('location: index.php');
        }

        ?>
        <?php
 
if (isset($_POST['update2'])) {
    // passing post data to variables
    $first_name = $_POST['firstname'];
$middle_name = $_POST['middlename'];
$surname_name = $_POST['surname'];
$country = $_POST['country'];
$state_of_origin = $_POST['state_of_origin'];
$LGA_of_origin = $_POST['LGA_of_origin'];
$gender = $_POST['gender'];
$Geopolitical_zone = $_POST['geopolitical_zone'];
$continent = $_POST['continent'];
$passport = $_POST['passport'];
$date_of_birth = $_POST['date_of_birth'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$id =$_SESSION['id'];
// $password = $_POST['password'];
$date = date("d-M-Y H:m:s",time());
// updating database record for the user
$update = "UPDATE `user_registration` SET first_name='$first_name',middle_name='$middle_name',sur_name='$surname_name',country='$country',state_of_origin='$state_of_origin',lga_of_origin='$LGA_of_origin',gender='$gender',geo_political_zone='$Geopolitical_zone',continent='$continent',date_of_birth='$date_of_birth',email='$email',phone_number='$phone_number' WHERE id='$id'";
$r = mysqli_query($db, $update)or die("updating error".mysqli_error($db));
// $update_query = mysqli_query($db, $update)or die("error inserting data".mysqli_error($db));
 // passing all user data to session

if($r){
    $insert2 ="SELECT * FROM `user_registration` WHERE email ='$email' AND id ='$id' LIMIT 1";
        $query2 =mysqli_query($db,$insert2) or die("error selecting data".mysqli_error($db));
        $result1 =mysqli_fetch_array($query2);
        $_SESSION['id'] = $result1['id'];
        $_SESSION['firstname'] = $result1['first_name'];
        $_SESSION['middlename'] = $result1['middle_name'];
        $_SESSION['surname'] = $result1['sur_name'];
        $_SESSION['country'] = $result1['country'];
        $_SESSION['state of origin'] = $result1['state_of_origin'];
        $_SESSION['LGA of origin'] = $result1['lga_of_origin'];
        $_SESSION['gender'] = $result1['gender'];
        $_SESSION['geopolitical zone'] = $result1['geo_political_zone'];
        $_SESSION['continent'] = $result1['continent'];
        $_SESSION['passport'] = $result1['passport'];
        $_SESSION['date of birth'] = $result1['date_of_birth'];
        $_SESSION['email'] = $result1['email'];
        $_SESSION['phone number'] = $result1['phone_number'];
//  echo "data inserted";
// };
    // echo "<script>alert('successful')</script>";

header('location: profile.php?success=user_profile_updated_successful');

}else{
    echo "<script>alert('not successful')</script>";

};

}else{
    // do nothing;
};
// session_start();
        // print_r($_SESSION);exit();

//creating method


?>