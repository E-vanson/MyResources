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

    //check if is autheticated
    if(!isset($_SESSION['authenticated']) ){
        $_SESSION['status'] = "Log in to access user dashboard";
        header("Location: login.php");
        exit(0);
    }
    else{

    }
    
    ?>
</body>
</html>