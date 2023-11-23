<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include('/home/e-vans/projects/Sign up/Login/Includes/Db/dbcon.php');
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '/home/e-vans/projects/Sign up/Login/Includes/vendor/autoload.php';

//install and set up php mailer: composer require phpmailer/phpmailer
function sendEmail_verification($name, $email, $verify_token){
    $mail = new PHPMailer(true);

    $mail->SMTPDebug = 2;//   SMTP::DEBUG_SERVER; //                  //Enable verbose debug output
    $mail->Debugoutput='html';
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'denziedon@gmail.com';                     //SMTP username
    $mail->Password   = 'mdpg pkqi vpbr xcco';                               //SMTP password
    $mail->SMTPSecure = "tls";            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('denziedon@gmail.com', $name);
   // $mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
    $mail->addAddress($email);               //Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Email verification from MyResources Website';

    $email_template ="
    <h3>You have logged into Myresources Website</h5>
    <h4>Verify your email address to log in</h4>
    <br></br>
    <a href='http://localhost:4000/verify-email.php?token=$verify_token'>Click me</a>
    ";
    $mail->Body = $email_template;
    $mail->AltBody = 'This is a verification email';

    $mail->send();
   // echo 'Message has been sent';

}

if(isset($_POST['register-btn'])){
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    //generate random values
    $verify_token = md5(rand());

    sendEmail_verification("$name", "$email", "$verify_token");
   //  echo "Sent or not?";

    //email exists or not
    $check_email_query = "SELECT email FROM UserLoginInfo WHERE email='$email' LIMIT 1";
    $check_email_query_run = mysqli_query($con, $check_email_query);

    if(mysqli_num_rows($check_email_query_run) > 0){
        $_SESSION['status'] = "Email id already exists";
        header("Location: register.php");
    }else{
        $query = "INSERT INTO UserLoginInfo(name,email,password,phone,verify_token) VALUES('$name', '$email', '$password', '$number', '$verify_token')";
        $query_run = mysqli_query($con, $query);

        if($query_run){
            sendEmail_verification("$name", "$email", "$verify_token");
            $_SESSION['status'] = "Registration is successfull: Please verify your email address";
            header("Location: register.php");
        }else{
            $_SESSION['status'] = "Registration failed";
            header("Location: register.php");
        }
    }
 }
?>
</body>
</html>
