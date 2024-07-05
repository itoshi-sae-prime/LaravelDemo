<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @vite('resources/css/app.css')
    <title>Document</title>
    <style>
        @media(max-width:2000px) {
            section {
                padding: 0rem 12%;
            }

            .sub-hotline {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .sub-hotline .address {
                display: flex;
                justify-content: space-around;
                align-items: center;
            }

            .footer {
                background-color: black;
                background-size: cover;
                background-position: center;
                background-attachment: fixed;
            }

            .footer .box a {
                display: flex;
                flex-direction: row;
            }



            .footer .box-container .box h3 {
                color: white;
                font-size: 25px;
                font-weight: 700;
            }

            .footer .box-container .box a {
                color: white !important;
                font-size: 1rem;
                padding-bottom: 1rem;

            }

            .footer .box-container .box a i {
                padding-right: .5rem;
                transition: .2s linear;
            }

            .footer .box-container .box a:hover i {
                padding-left: 2rem;
            }

            .credit {
                padding: 20px;
                text-align: center;
                color: white;
            }
        }
    </style>
</head>

<body>
    <!-- header -->
    <section class="header border-b-2">
        <div class="flex justify-between items-center sm:none ">
            <div class="flex">
                <p class="text-[16px] px-4 py-2 border-2 border-solid border-b-[0px] font-bold">1900-6750</p>
                <div class="text-[16px] px-4 py-2 border-2 border-solid border-l-[0px] border-b-[0px] font-bold">support@kin.com.vn</div>
            </div>
            <div class="flex">
                <button class="py-2 px-3 border-2 border-solid border-b-[0px]  hover:bg-red-500 transition-colors 2s ease-out  hover:text-white"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></button>
                <button class="py-2 px-3 border-2 border-solid border-b-[0px] border-l-[0px] hover:bg-blue-700 transition-colors 2s ease   hover:text-white"><a href=""><i class="fa-brands fa-facebook"></i></a></button>
                <button class="py-2 px-3 border-2 border-solid border-b-[0px] border-l-[0px] hover:bg-red-800 transition-colors 2s ease hover:text-white"><a href=""><i class="fa-brands fa-pinterest"></i></a></button>
                <button class="py-2 px-3 border-2 border-solid border-b-[0px] border-l-[0px] hover:bg-blue-400 transition-colors 2s ease hover:text-white"><a href=""><i class="fa-brands fa-twitter"></i></a></button>
            </div>
        </div>
    </section>
    <section class="navbar flex justify-around items-center">
        <div class="flex justify-center items-center">
            <p class="text-[50px]">Kin</p>
            <div class="logo flex justify-center w-[40%] hover:transiton hover:ease-in-out hover:duration-300">
                <img class="w-[80%]" src="https://static.vecteezy.com/system/resources/previews/000/623/239/original/auto-car-logo-template-vector-icon.jpg" alt="">
            </div>
            <p class="text-[50px]">91</p>
        </div>
        <ul class="flex justify-between items-center">
            <li>
                <a href="{{ route('HomePage') }}" class="text-[25px] py-2 px-3 mx-3 font-semibold text-black hover:text-red-500 transition ease-in-out duration-300">
                    Home
                </a>
            </li>
            <li><a href="{{ route('IntroPage') }}" class="text-[25px] py-2 px-3 mx-3 font-semibold text-black hover:text-red-500 transition ease-in-out duration-300">Intro</a></li>
            <li><a href="{{ route('ProductPage') }}" class="text-[25px] py-2 px-3 mx-3 font-semibold text-black hover:text-red-500 transition ease-in-out duration-300">Product</a></li>
            <li><a href="" class="text-[25px] py-2 px-3 mx-3 font-semibold text-black hover:text-red-500 transition ease-in-out duration-300">Contact</a></li>
            <li><a href="" class="text-[25px] py-2 px-3 mx-3 font-semibold text-black hover:text-red-500 transition ease-in-out duration-300">Test</a></li>
            <li><a href="" class="text-[25px] py-2 px-3 mx-3 font-semibold text-black hover:text-red-500 transition ease-in-out duration-300">Post</a></li>
            <li><a href="" class="text-[25px] py-2 px-3 mx-3 font-semibold text-black hover:text-red-500 transition ease-in-out duration-300">Agency</a></li>
        </ul>
    </section>
    <!-- slide -->
    @yield("slide")
    <!-- product -->
    @yield('product')
    <!-- content -->
    <div class="flex ">
        @yield('content')
    </div>

    <!-- footer -->
    <section class="footer">
        <div class="box-container grid grid-cols-4 pt-[20px]">
            <div class="box">
                <h3 class="py-3">Quick Links</h3>
                <a class="item-footer" href="home.php"><i class="fa-solid fa-minus"></i> Home</a>
                <a class="item-footer" href="about.php"><i class="fa-solid fa-minus"></i> About</a>
                <a class="item-footer" href="packages.php"><i class="fa-solid fa-minus"></i> Packages</a>
                <a class="item-footer" href="book.php"><i class="fa-solid fa-minus"></i> Book</a>
            </div>
            <div class="box">
                <h3 class="py-3">Extra Links</h3>
                <a class="item-footer" href="home.php"><i class="fa-solid fa-minus"></i> Ask question</a>
                <a class="item-footer" href="about.php"><i class="fa-solid fa-minus"></i> About us</a>
                <a class="item-footer" href="packages.php"><i class="fa-solid fa-minus"></i> Privacy policy</a>
                <a class="item-footer" href="book.php"><i class="fa-solid fa-minus"></i> Terms of us</a>
            </div>
            <div class="box">
                <h3 class="py-3">Contack Links</h3>
                <a class="item-footer" href="home.php"><i class="fa-solid fa-chevron-right"></i> +123-456-7890</a>
                <a class="item-footer" href="about.php"><i class="fa-solid fa-chevron-right"></i> +111-222-3333</a>
                <a class="item-footer" href="packages.php"><i class="fa-solid fa-chevron-right"></i> Kinsofoolish</a>
                <a class="item-footer" href="packages.php"><i class="fa-solid fa-chevron-right"></i>Thaodien/5555/5</a>
            </div>
            <div class="box">
                <h3 class="py-3">Follow Us</h3>
                <a class="item-footer" href="about.php"><i class="fa-solid fa-chevron-right"></i> Facebook</a>
                <a class="item-footer" href="packages.php"><i class="fa-solid fa-chevron-right"></i> Twitter</a>
                <a class="item-footer" href="packages.php"><i class="fa-solid fa-chevron-right"></i> Instagram</a>
                <a class="item-footer" href="packages.php"><i class="fa-solid fa-chevron-right"></i>Linkedin</a>
            </div>
        </div>
        <div class="credit">Created by Kin-PHP-2024 | All Right Reserved!</div>
    </section>
</body>

</html>