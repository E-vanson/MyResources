<?php
$page_title="Registration page";
 include('/home/e-vans/projects/Sign up/Login/Includes/header.php');
 include('/home/e-vans/projects/Sign up/Login/Includes/navbar.php');
 ?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow">
                    <div class="card-header">
                        <h5>Registration form</h5>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="post">
                            <div class="form-group mb-3 d-flex flex-column">
                                <label for="">Name</label>
                                <input type="text" name="name" class="from-control">
                            </div>
                            <div class="form-group mb-3  d-flex flex-column">
                                <label for="">Phone Number</label>
                                <input type="text" name="number" class="from-control">
                            </div>
                            <div class="form-group mb-3  d-flex flex-column">
                                <label for="">Email</label>
                                <input type="text" name="email" class="from-control">
                            </div>
                            <div class="form-group mb-3  d-flex flex-column">
                                <label for="">Password</label>
                                <input type="text" name="password" class="from-control">
                            </div>
                            <div class="form-group mb-3  d-flex flex-column">
                                <label for="">Confirm Password</label>
                                <input type="text" name="confirm-password" class="from-control">
                            </div>
                            <div class="form-group">
                                <button type="Submit" class="btn btn-primary" name="register-btn">
                                    Register
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include('/home/e-vans/projects/Sign up/Login/Includes/footer.php');?> 