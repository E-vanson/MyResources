<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    include('/home/e-vans/projects/Sign up/Includes/Login/Db/dbcon.php');
    //check if log in button is clicked
    if(isset($_POST['login-btn'])){

        //check if input is empty and button is clicked
        //trim the inputs
        if(!empty(trim($_POST['email'])) &&  !empty(trim($_POST['password']))){
            //escape special characters in user input...prevents sql injection attacks
            $email = mysqli_real_escape_string($con, $_POST['email']);
            $password = mysqli_real_escape_string($con, $_POST['password']);

            //check if email and password are in db
            $login_query = "SELECT * FROM UserLoginInfo WHERE email = '$email' AND password = '$password' LIMIT 1";
            $login_query_run = mysqli_query($con, $login_query);

            //check if any email exists
            if(mysqli_num_rows($login_query_run) > 0){
               //CHECK THE VERIFIED STATUS
               $row = mysqli_fetch_array($login_query_run);
               //echo $row['verify_status'];
               //check if 0 or 1
               if($row['verify_status'] == '1'){
                $_SESSION['authenticated'] = TRUE;
                $_SESSION['auth_user'] = [
                    "username" => $row['name'],
                    "number" => $row['phone'],
                    "email" => $row['email'],
                ];
                $_SESSION['status'] = 'You are logged in successfully!!';
                header("Location: dashboard.php");
                exit(0);

               }
               else
               {
                $_SESSION['status'] = 'Verify your email address to login!!';
                header("Location: login.php");
                exit(0);
               }
            }
            else{
                $_SESSION['status'] = 'Invalid email or password!!';
            header("Location: login.php");
            exit(0);
            }

        }
        else{
            $_SESSION['status'] = 'Fill in all fields!!';
            header("Location: login.php");
            exit(0);
        }
    }
    else{

    }
    ?>
</body>
</html>