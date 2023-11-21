<?php
$page_title="Registration page";
session_start();

if(isset($_SESSION['authenticated']) ){
    $_SESSION['status'] = "You are already logged in :)";
    header("Location: dashboard.php");
    exit(0);
}
else{

}

 include('header.php');
 include('navbar.php');
 //include('verify-email.php');
 ?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
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
                <div class="card shadow">
                    <div class="card-header">
                        <h5>Login form</h5>
                    </div>
                    <div class="card-body">
                        <form action="logincode.php" method="POST">
                            <div class="form-group mb-3 d-flex flex-column">
                                <label for="">Email</label>
                                <input type="text" name="email" class="from-control">
                            </div>
                            <div class="form-group mb-3 d-flex flex-column">
                                <label for="">Password</label>
                                <input type="text" name="password" class="from-control">
                            </div>
                            <div class="form-group">
                                <button type="Submit" class="btn btn-primary" name="login-btn">
                                    Login Now
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php
 include('footer.php');
 ?> 