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

 //include('verify-email.php');
 ?>

<!-- <div class="py-5">
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
                        <hr>
                        <h5>Did not recieve verification email??
                                <a href="resend-email-verification.php">Resend</a>
                        </h5>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/pagesDesign/css/main.css">
    <title>Log In</title>
</head>
<body class="w-screen h-screen flex items-center justify-center">
    <>
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
    </>

    <div class="flex w-1/2 h-3/5 border-2 border-[#47A3FF] rounded-lg shadow-lg">

        <!-- left section -->
        <section class="w-1/2 h-full flex flex-col items-center">
            
            <div class="h-1/6 flex items-center">
                <p class="text-center text-5xl">
                    WELCOME!
                </p>
            </div>
            <div class="w-full h-5/6">
                <img src="/pagesDesign/images/login.jpg" class="w-full h-full rounded-bl-lg"  alt="">
            </div>
        </section>

        <!-- right section -->
        <section class="w-1/2 h-full flex flex-col items-center justify-evenly">
            
            <!-- Google sign-in -->
             <div class="google-btn w-full h-1/5 flex flex-col items-center justify-evenly">
                <div class="flex items-center justify-evenly w-2/3 h-1/2 border-2 rounded-md
                 hover:border-[#47A3FF] bg-[#e6ebfc] hover:cursor-pointer">
                    <a href="#" id="google-signin" class="w-[30px] h-[30px]">
                        <img src="/pagesDesign/images/google.png" class="h-full w-full" alt="">
                    </a>
                    <p>
                        Sign in with Google
                    </p>
                </div>
             </div>

             <!-- or -->
             <div class="flex items-center justify-evenly w-2/3 h-[30px]">
                <div class="w-1/3">
                    <hr class="w-full">
                </div>
                <span class="h-full">or</span>
                <div class="w-1/3">
                    <hr class="w-full">
                </div>
            </div>

             <!-- input division --> 
             <div class="relative w-full h-3/5 flex flex-col justify-evenly items-center">
             <form action="loginCode.php" method="post">
                <input name="email" type="text" placeholder="Email Address" class="w-2/3 h-[15%] border-2 rounded-md border-[#47A3FF] px-2">
                <input name="password" type="password" placeholder="Password" class="user-password w-2/3 h-[15%] border-2 rounded-md border-[#47A3FF] pl-2 pr-20">
                <button name="login-btn" type="submit" id="login-btn" class="w-1/2 h-[10%] border-2 rounded-lg hover:border-[#47A3FF] bg-[#e6ebfc]">
                    <!-- <a href="landing.html" id="login-link">log in</a> -->
                    Log in
                </button>
                <!-- visibility eye -->
                <div id="see-btn" class="absolute right-[20%] bottom-[42%] flex items-center justify-center h-[40px] w-[40px] hover:cursor-pointer opacity-80">
                    <img src="/pagesDesign/images/eye.svg" alt="">
                    <hr class="visibility-line visible fixed z-10 w-10 h-[3px] bg-[black]">
                </div>
                </form>
             </div>

             <!-- create account -->
             <div class="h-[30px]">
             <h5>Did not recieve verification email??
                                <a href="resend-email-verification.php">Resend</a>
                        </h5>
                <p class="text-sm">
                    if you don't have an account,
                    <span>
                        <a href="signin.html" class="text-xs text-[Blue] hover:text-[#47A3FF] underline">
                            Create account
                        </a>
                    </span>
                </p>
                
             </div>
        </section>
    </div>

    <script src="/pagesDesign/login.js"></script>

</body>
</html>