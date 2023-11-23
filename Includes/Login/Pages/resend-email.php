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
    include('/home/e-vans/projects/Sign up/Login/Includes/Db/dbcon.php');

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    //Load Composer's autoloader
require '/home/e-vans/projects/Sign up/Login/Includes/vendor/autoload.php';


    function resend_email_verification($name, $email, $verify_token){
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
        $mail->Subject = 'Resend email verification from MyResources Website';
    
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

    //check if button is clicked
    if(isset($_POST['resend-email-verification-btn'])){

        //check if input s empty
        if(!empty($_POST[trim('email')])){
            //if input if filled
            $email = mysqli_real_escape_string($con, $_POST['email']);

            $checkemail_query = "SELECT * FROM UserLoginInfo WHERE email ='$email' LIMIT 1";
            $checkemail_query_run = mysqli_query($con, $checkemail_query);

            //if any record is exists
            if(mysqli_num_rows($checkemail_query_run) > 0){
                //check if email is verified
                $row = mysqli_fetch_array($checkemail_query_run);
                if($row['verify_status'] == 0){

                    $name = $row['name'];
                    $email = $row['email'];
                    $verify_token = $row['verify_token'];

                    //call the resend function
                    resend_email_verification($name, $email, $verify_token);

                    $_SESSION['status'] = "Email verification link sent to your email";
                    header("Location: login.php");
                    exit(0);

                }
                else{
                    $_SESSION['status'] = "Email is already registered!! Login:)";
                    header("Location: login.php");
                    exit(0);
                }

            }
            //if no record exists ... email not registered
            else{
                $_SESSION['status'] = "Email is not registered!! Please register your email";
            header("Location: register.php");
            exit(0);
            }

        }else{
            //if input field is empty
            $_SESSION['status'] = "Enter all field";
            header("Location: resend-email-verification.php");
            exit(0);

        }

    }else{

    }
    ?>
    
</body>
</html>