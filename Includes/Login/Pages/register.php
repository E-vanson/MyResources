<?php
session_start();
$page_title="Registration page";
 
 ?>

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
        <form action="registerCode.php" method="post" class="flex flex-col items-center justify-evenly w-full h-4/5">
            <div class="alert">
                <?php
                if(isset($_SESSION['status'])){
                    echo "<h4>".$_SESSION['status']."</h4>";
                    unset($_SESSION['status']);
                }
                ?>
            </div>
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
    </div>

    <script src="/pagesDesign/signin.js"></script>
 
</body>
</html>