<?php
        session_start();

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
                
                // redirect to sign up page 
                header('location: sign up.php?error=2');
            }else{
        // passing all user data to session
        $_SESSION['firstname'] = $result['first_name'];
        $_SESSION['middlename'] = $result['middle_name'];
        $_SESSION['surname'] = $result['sur_name'];
        $_SESSION['country'] = $result['country'];
        $_SESSION['state of origin'] = $result['state_of_origin'];
        $_SESSION['LGA of origin '] = $result['LGA_of_origin '];
        $_SESSION['gender'] = $result['gender'];
        $_SESSION['geopolitical zone'] = $result['geo_political_zone'];
        $_SESSION['continent'] = $result['continent'];
        $_SESSION['passport'] = $result['passport'];
        $_SESSION['date of birth'] = $result['date_of_birth'];
        $_SESSION['email'] = $result['email'];
        $_SESSION['phone number'] = $result['phone_number'];



        header('location: index.php');
        };
    }else{
            header('location: sign up.php?error=1');
        }
    // echo "<script>alert('successful')</script>";
        };

        ?>