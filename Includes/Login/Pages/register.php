<?php
session_start();
$page_title="Registration page";
 
 ?>

<!-- <div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="alert">
                    <?php
                    // if(isset($_SESSION['status'])){
                    //     echo "<h4>".$_SESSION['status']."</h4>";
                    //     unset($_SESSION['status']);
                    // }
                    ?>
                </div>
                <div class="card shadow">
                    <div class="card-header">
                        <h5>Registration form</h5>
                    </div>
                    <div class="card-body">
                        <form action="registerCode.php" method="post">
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
                            </div> -->
                            <!-- <div class="form-group">
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
</div> --> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/pagesDesign/css/main.css">
    <title>Sign In</title>
</head>
<body class="flex w-screen h-screen items-center justify-center">
    
    <div class=" flex flex-col justify-evenly w-1/4 h-5/6 border-2 rounded-lg border-[#47A3FF] shadow-lg">
        <p class="text-2xl font-semibold ml-2">
            Please enter the details below.
        </p>

        <!-- details input section -->
        <section class="flex flex-col items-center justify-evenly w-full h-4/5">
        <div class="alert">
                    <?php
                    if(isset($_SESSION['status'])){
                        echo "<h4>".$_SESSION['status']."</h4>";
                        unset($_SESSION['status']);
                    }
                    ?>
                </div>
            <form action="registerCode.php" method="post">
            <div class="w-[90%] h-1/6">
                <p class="mt-5 text-xl">
                    <span class="text-[red]">*</span>
                    Enter your First Name:
                </p>

                
                <div class="ml-8">
                    <input type="text" class="w-3/4 h-8 focus:outline-none pt-3" name="fname">
                    <hr class="w-3/4 h-[2px] bg-[#47A3FF]">
                </div>
            </div>
            <div class="w-[90%] h-1/6">
                <p class="mt-5 text-xl">
                    <span class="text-[red]">*</span>
                    Enter your Last Name:
                </p>
                <div class="ml-8">
                    <input type="text" class="w-3/4 h-8 focus:outline-none pt-3" name="sname">
                    <hr class="w-3/4 h-[2px] bg-[#47A3FF]">
                </div>
            </div>
            <div class="w-[90%] h-1/6">
                <p class="mt-5 text-xl">
                    <span class="text-[red]">*</span>
                    Enter your email:
                </p>
                <div class="ml-8">
                    <input type="email" class="w-3/4 h-8 focus:outline-none pt-3" name="email">
                    <hr class="w-3/4 h-[2px] bg-[#47A3FF]">
                </div>
            </div>
            <div class="w-[90%] h-1/6">
                <p class="mt-2 text-xl">
                    <span class="text-[red]">*</span>
                    Enter your Password: 
                    <span class="text-xs text-[red]">
                        (should contain alphanumerical characters)
                    </span>
                </p>
                <div class="flex justify-between ml-8 w-3/4">
                    <input type="password" class="user-password-1 w-4/5 h-8 focus:outline-none pt-3" name="password">
                    <!-- visibility eye -->
                    <div id="see-btn-1" class="flex items-center justify-center relative h-[40px] w-[40px] hover:cursor-pointer opacity-80">
                        <img src="/pagesDesign/images/eye.svg" alt="">
                        <hr class="visibility-line-1 visible fixed z-10 w-10 h-[3px] bg-[black]">
                    </div>
                </div>
                <hr class="w-3/4 h-[2px] ml-8 bg-[#47A3FF]">
            </div>
            <div class="relative w-[90%] h-1/6">
                <p class="mt-5 text-xl">
                    <span class="text-[red]">*</span>
                    Re-enter your Password:
                </p>
                <div class="flex justify-between ml-8 w-3/4">
                    <input type="password" class="user-password-2 w-4/5 h-8 focus:outline-none pt-3" name="confirmPassword">
                    <!-- visibility eye -->
                    <div id="see-btn-2" class="flex items-center justify-center relative h-[40px] w-[40px] hover:cursor-pointer opacity-80">
                        <img src="/pagesDesign/images/eye.svg" alt="">
                        <hr class="visibility-line-2 visible fixed z-10 w-10 h-[3px] bg-[black]">
                    </div>
                </div>
                <hr class="w-3/4 h-[2px] ml-8 bg-[#47A3FF]">
            </div>
            <button type="submit" name="register-btn" id="signin-btn" class="self-center w-40 h-12 border-2 rounded-md bg-[#639aff] text-[white]
            hover:scale-105">
                <!-- <a href="./login.html" id="signin-link">Sign In</a> -->
                Sign in
            </button>
         </form>
        </section>
    </div>

    <script src="/pagesDesign/signin.js"></script>
 
</body>
</html>