<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Registration</title>
</head>
<body>
<?php
include('authentication.php');
$page_title="Dashboard page";
 include('header.php');
 include('navbar.php');

 ?>


<div class="py-5 m-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
            <?php
            
            if(isset($_SESSION['status'])){
                ?>
                <div class="alert alert-success">
                    <h5><?= htmlspecialchars( $_SESSION['status']); ?></h5>
                </div>
                <?php
                    unset($_SESSION['status']);
            }
            ?>
                <div class="card">
                    <div class="card-header text-center bg-sky">
                        <h3>User Dashboard</h3>
                    </div>
                    <div class="card-body text-center">
                    <h4> User Dashboard</h4>
                <h5>Only used when user is logged in</h5>
                <hr>
                <h5>Hello <?= $_SESSION['auth_user']['username']; ?></h5>
                <h5>Your email is <?= $_SESSION['auth_user']['email']; ?></h5>
                <h5>Phone number is: <?= $_SESSION['auth_user']['number']; ?></h5>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>



<?php include('footer.php');?> 
</body>
</html>
