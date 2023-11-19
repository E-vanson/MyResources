<?php
$page_title="Registration page";
 include('Login/Pages/Includes/header.php');
 include('Login/Pages/Includes/navbar.php');
 ?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <?php
                if(isset($_SESSION['status'])){
                    ?>
                    <div class="alert alert-success">
                        <h5><?= $_SESSION['status']; ?></h5>
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
                        <form action="">
                            <div class="form-group mb-3">
                                <label for="">Email</label>
                                <input type="text" name="email" class="from-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Password</label>
                                <input type="text" name="password" class="from-control">
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include('Login/Pages/Includes/footer.php');?> 