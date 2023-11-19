<?php
session_start();
include('/Db/bdcon.php');

if(isset($_GET['token'])){
    $token = $_GET['token'];
    $verify_query ="SELECT verify_token,verify_status FROM UserLoginInfo WHERE $verify_token='$token' LIMIT 1";
    $verify_query_run = mysqli($con, $verify_query);

    if(mysqli_num_row($verify_query_run) > 0){
        $row = mysqli_fetch_array($verify_query_run);
        if($row['verify_status'] == '0'){
            $clicked_token = $row['verify_token'];
            $update_query = "UPDATE UserLogin SET verify_status='1' WHERE verify_token='$clicked_token' LIMIT 1";
            $update_query_run = mysqli($con, $update_query);

            if($update_query_run){
                $_SESSION['status'] ="Your account has been verified Successfully!";
                header("Location: login.php");
                exit(0);
            }else{
                $_SESSION['status'] ="Verification Failed!";
                header("Location: login.php");
                exit(0);
            }
        }else{
            $_SESSION['status'] ="Email already verified...Login";
            header("Location: login.php");
            exit(0);
        }
    }else{
        $_SESSION['status'] ="Token does not exist!";
        header("Location: login.php");
        exit(0);
    }
}
else{
    $_SESSION['status']="Not allowed";
    header("Location: login.php");
    exit(0);
}
?>