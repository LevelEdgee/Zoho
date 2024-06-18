<?php
// Include the content of about.php

?>

<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">

<!-- Mirrored from shreethemes.in/techwind/layouts/index-it-solution.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Apr 2023 16:16:43 GMT -->

<head>
    <meta charset="UTF-8" />
    <title>Leveledge-ZOHO's authorized partner</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Tailwind CSS Saas & Software Landing Page Template" />
    <meta name="keywords"
        content="agency, application, business, clean, creative, cryptocurrency, it solutions, modern, multipurpose, nft marketplace, portfolio, saas, software, tailwind css" />
    <meta name="author" content="Shreethemes" />
    <meta name="website" content="https://shreethemes.in/" />
    <meta name="email" content="support@shreethemes.in" />
    <meta name="version" content="1.8.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />

    <!-- Css -->
    <link href="assets/libs/tiny-slider/tiny-slider.css" rel="stylesheet">
    <link href="assets/libs/tobii/css/tobii.min.css" rel="stylesheet">
    <!-- Main Css -->
    <link href="assets/libs/%40iconscout/unicons/css/line.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/icons.css" />
    <link rel="stylesheet" href="assets/css/tailwind.min.css" />
    <style>
        .logo img {
            height: 50px;
        }


        body {
            font-family: "Jost", sans-serif;
            /* Change font family */
            font-weight: 800;
            /* Set font weight to heavy */
        }


        /* Optionally, you might want to maintain aspect ratio by setting the width to auto */
        .logo img {
            height: 55px;
            width: auto;
        }

        /* Prevent color change and underline on hover for specific links */
       

        
        
        .nav-button {
            text-decoration: none;
            position: absolute;
            border: none;
            right: 0px;
            margin-top: 12px;
            margin-right: 1px;
            font-size: 14px;
            font-family: inherit;
            cursor: pointer;
            color: #fff;
            width: 9em;
            height: 2.8em;
            line-height: 2em;
            text-align: center;
            background: linear-gradient(90deg, #03a9f4, #f441a5, #ffeb3b, #03a9f4);
            background-size: 300%;
            border-radius: 30px;
            z-index: 1;

        }

        @media (max-width: 768px) {
            .button-container {
                display: none;
                /* Hide the button container on small screens */
            }
        }

        .nav-button:hover {
            animation: ani 8s linear infinite;
            border: none;
        }

        @keyframes ani {
            0% {
                background-position: 0%;
            }

            100% {
                background-position: 400%;
            }
        }

        .nav-button:before {
            content: "";
            position: absolute;
            top: -5px;
            left: -5px;
            right: -5px;
            bottom: -5px;
            z-index: -1;
            background: linear-gradient(90deg, #03a9f4, #f441a5, #ffeb3b, #03a9f4);
            background-size: 400%;
            border-radius: 35px;
            transition: 1s;
        }

        .nav-button:hover::before {
            filter: blur(20px);
        }

        .nav-button:active {
            background: linear-gradient(32deg, #03a9f4, #f441a5, #ffeb3b, #03a9f4);
        }
    </style>

</head>

<body class="font-nunito text-base text-black dark:text-white dark:bg-slate-900">



    <!-- Start Navbar -->
    <nav id="topnav" class="defaultscroll is-sticky">
        <div class="container">
            <!-- Logo container-->
            <a class="logo" href="index.html">
                <span class="inline-block dark">
                    <img src="assets/images/Logo.png" class="l-dark" height="24" alt="">
                    <img src="assets/images/authorized_partner.png" class="l-dark" height="24" alt="">
                    <!-- <img  src="assets/images/Logo.png" class="l-light" height="24" alt=""> -->

                    <img src="assets/images/Log2.png" class="l-light" height="24" alt="">
                    <img src="assets/images/authorized_partner.png" class="l-light" height="24" alt="">
                </span>
            </a>

            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu nav-light">
                    <div class="button-container">
                    <button class="nav-button" onclick="window.location.href='https://wa.me/8356941131'">Get Started</button>

                    </div>


                </ul><!--end navigation menu-->
            </div><!--end navigation-->
        </div><!--end container-->
    </nav><!--end header-->
    <!-- End Navbar -->







    <!-- JAVASCRIPTS -->
    <script src="assets/libs/tiny-slider/min/tiny-slider.js"></script>
    <script src="assets/libs/tobii/js/tobii.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/plugins.init.js"></script>
    <script src="assets/js/app.js"></script>
    <!-- JAVASCRIPTS -->
</body>

<!-- Mirrored from shreethemes.in/techwind/layouts/index-it-solution.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Apr 2023 16:16:44 GMT -->

</html>