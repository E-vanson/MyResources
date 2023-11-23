<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resend Verification</title>
</head>
<body>
    <?php
    session_start();
    include('navbar.php');
    include("header.php");
    ?>
    <div class="py-5">
        <div class="container">
            <div class="row justify-content-centre">
                <div class="col-md-5">

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
                        <div class="card-header">
                            <h5>Resend email verification</h5>
                        </div>
                        <div class="card-body">
                            <form action="resend-email.php" method="POST">
                                <div class="form-group mb-3"> 
                                    <label for="">Resend email</label>
                                    <input type="text" name="email" class="form-control" placeholder="Enter email address">
                                </div>
                                <div class="form-group mb-3">
                                    <button type="submit" name="resend-email-verification-btn" class="btn btn-prmary">Submit </button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <?php
    include("footer.php");
    ?>
    
</body>
</html>