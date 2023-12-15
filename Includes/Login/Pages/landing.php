
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
</head>
<body>
<?php
$page_title="Home page";
//  include('header.php');
//  include('navbar.php');
 

 ?>


<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h4>
                    Login and Verification
                </h4>
                <h5>
                    For Project X
                </h5>
            </div>
        </div>
    </div>
</div>



<?php include('footer.php');?> 
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\main.css">
    <title>Landing Page</title>
</head>
<body class="overflow-x-hidden w-screen h-screen">

    <header class=" w-full h-[100px]">
        <div class="flex container mx-auto bg-[#c4d8ff] h-full items-center justify-evenly">

            <!-- logo -->
            <img src="images\logo.svg" class="h-4/5" alt="">

            <!-- menu buttons -->
            <div class="flex w-2/3 h-1/2 items-center justify-evenly bg-[white] rounded-[10px]">
                <button class="bg-[#47A3FF] w-[15%] h-4/5 rounded-[10px] pb-1 text-[white] font-semibold
                hover:opacity-80">
                    <a href="#">Home</a>
                </button>
                <button class="bg-[#47A3FF] w-[15%] h-4/5 rounded-[10px] pb-1 text-[white] font-semibold
                hover:opacity-80">
                <a href="#">Resources</a>
                </button>
                <button class="bg-[#47A3FF] w-[15%] h-4/5 rounded-[10px] pb-1 text-[white] font-semibold
                hover:opacity-80">
                    <a href="#">Institutions</a>
                </button>
                <button class="bg-[#47A3FF] w-[15%] h-4/5 rounded-[10px] pb-1 text-[white] font-semibold
                hover:opacity-80">
                    <a href="#">Blogs</a>
                </button>
            </div>

            <!-- logIn button -->
            <button class="bg-[#847AF5] pb-1 w-[150px] h-1/3 rounded-[10px] hover:opacity-80 hover:text-[white]
            login--btn">
                <a href="#">Log In / sign In</a>
            </button>
        </div>
    </header>

    <!-- section 1 -->
    <section class="w-screen h-1/2">
        <div class="container mx-auto h-full relative flex justify-center bg-[#F1F8FF]">
            <!-- left image -->
            <div class="left--img w-1/4 h-2/5 absolute top-12 left-8 rotate-[-10deg]">
                <img src="images\library2.jpg" class="w-full h-full rounded-lg" alt="">
            </div>
            <!-- left content -->
            <div class="left--content w-1/4 h-1/4 absolute bottom-20 left-20 rotate-[5deg]">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore 
                    magna aliqua. Egestas egestas fringilla phasellus faucibus scelerisque. Quisque id diam vel quam. Lacus vestibulum 
                    sed arcu non odio euismod. Ultricies lacus sed turpis tincidunt id aliquet risus feugiat. Id leo in vitae turpis 
                    massa sed elementum.
                </p>
            </div>

            <!-- main content -->
            <div class="main--content w-1/3 h-1/3 absolute top-[10%]">
                <p class=" text-2xl font-bold ">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore 
                    magna aliqua.
                </p>
            </div>
            
            <!-- right image -->
            <div class="left--img w-1/4 h-2/5 absolute top-12 right-8 rotate-[10deg]">
                <img src="images\library3.jpg" class="w-full h-full rounded-lg" alt="">
            </div>
            <!-- right content -->
            <div class="left--content w-1/4 h-1/4 absolute bottom-20 right-20 rotate-[-5deg]">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore 
                    magna aliqua. Egestas egestas fringilla phasellus faucibus scelerisque. Quisque id diam vel quam. Lacus vestibulum 
                    sed arcu non odio euismod. Ultricies lacus sed turpis tincidunt id aliquet risus feugiat. Id leo in vitae turpis 
                    massa sed elementum.
                </p>
            </div>

            <!-- bottom image -->
            <div class="left--img w-1/4 h-1/2 absolute bottom-[10%]">
                <img src="images\shelves.jpg" class="w-full h-full rounded-lg" alt="">
            </div>
        </div>
    </section>

    <!-- section 2 -->
    <section class="w-screen h-1/2">
        <div class="flex flex-col justify-evenly container mx-auto h-full bg-[#f2f5f2]">
            <p class="font-semibold text-4xl mx-5 text-[#000030]">
                Study Resources
            </p>
            <div class="flex items-center w-full h-4/5">
                <div class="flex justify-evenly w-full h-4/5">
                    <div class="flex flex-col items-center w-1/5 bg-[#F1F8FF] shadow-md">
                        <img src="images\library1.jpg" class="w-full h-1/2 rounded-t-lg" alt="">
                        <div class="flex flex-col items-center justify-around w-full h-1/3 my-[8%]">
                            <p class="text-sm font-semibold underline">
                            Books
                            </p>
                            <p class="text-sm w-4/5">
                                If you love getting your knowledge from books inspired by profecient writers
                                this section while suit you best. All books are available to you for free! 
                                <span class="text-[#47A3FF] text-xs hover:underline"><a href="Includes/Login/Pages/books.php">looking for me?</a></span>
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center w-1/5 bg-[#F1F8FF] shadow-md">
                        <img src="images\pdf.jpg" class="w-full h-1/2 rounded-t-lg" alt="">
                        <div class="flex flex-col items-center justify-around w-full h-1/3 my-[8%]">
                            <p class="text-sm font-semibold underline">
                            PDF's
                            </p>
                            <p class="text-sm w-4/5">
                                There are times where you need to study and don't want to search online for documents. Here 
                                you gain access to our PDF's repository where you can download them and read offline, any place, 
                                any time. <span class="text-[#47A3FF] text-xs hover:underline"><a href="pdf.html">looking for me?</a></span>
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center w-1/5 bg-[#F1F8FF] shadow-md">
                        <img src="images\articles.jpg" class="w-full h-1/2 rounded-t-lg" alt="">
                        <div class="flex flex-col items-center justify-around w-full h-1/3 my-[8%]">
                            <p class="text-sm font-semibold underline">
                            Articles
                            </p>
                            <p class="text-sm w-4/5">
                                Many people have read what you are studying and have shared different opinions on the same. 
                                Why don't you check on the articles they have published to get their point of view. 
                                <span class="text-[#47A3FF] text-xs hover:underline"><a href="articles.html">looking for me?</a></span>
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center w-1/5 bg-[#F1F8FF] shadow-md">
                        <img src="images\links.jpg" class="w-full h-1/2 rounded-t-md" alt="">
                        <div class="flex flex-col items-center justify-around w-full h-1/3 my-[8%]">
                            <p class="text-sm font-semibold underline">
                            Links
                            </p>
                            <p class="text-sm w-4/5">
                                Studing through reading isn't enough, One sometimes need to get extra knowledge and 
                                illustration from visual sources. In here you will find any link that will take you to what are 
                                looking for. <span class="text-[#47A3FF] text-xs hover:underline"><a href="links.html">looking for me?</a></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="w-full h-1/5">
        <div class="flex items-center justify-center container mx-auto bg-[#000030] h-full"> 

            <!-- social links -->
            <a href="#">
                <div class="w-[75px] h-[60px] flex flex-col items-center justify-between">
                    <img src="images\facebook.svg" class="facebook--icon h-[40px] w-[40px]" alt="">
                    <small class="text-[white] text-align text-xs">Facebook</small>
                </div></a>
            <a href="#">
                <div class="w-[75px] h-[60px] flex flex-col items-center justify-between">
                    <img src="images\twitter.svg" class="twitter--icon h-[40px] w-[40px]" alt="">
                    <small class="text-[white] text-align text-xs">Twitter</small>
                </div></a>
            <a href="#">
                <div class="w-[75px] h-[60px] flex flex-col items-center justify-between">
                    <img src="images\instagram.svg" class="instagram--icon h-[40px] w-[40px]" alt="">
                    <small class="text-[white] text-align text-xs">Instagram</small>
                </div></a>
            <a href="#">
                <div class="w-[75px] h-[60px] flex flex-col items-center justify-between">
                    <img src="images\linkedin.svg" class="linkedin--icon h-[40px] w-[40px]" alt="">
                    <small class="text-[white] text-align text-xs">LinkedIn</small>
                </div></a>
        </div>
    </footer>

</body>
</html>
