<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Food Zone</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="js/jquery.js"></script>
    <script src="js/jquery.glide.js"></script>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
    <script type="text/javascript" src="js/MyJQ.js"></script>
    <script src="js/jquery.localScroll.min.js" type="text/javascript"></script>
    <script src="js/jquery.scrollTo.min.js" type="text/javascript"></script>
    <script src="js/wow.min.js" type="text/javascript"></script>

    <!-- scroll function -->
    <script type="text/javascript">
    $(document).ready(function() {
        $('#navigations').localScroll({
            duration: 800
        });
    });
    </script>
    <script src="js/wow.min.js"></script>
    <script>
    new WOW().init();
    </script>
</head>

<body>

    <!--============ Navigation ============-->

    <div class="headerwrapper">
        <div id="header" class="container">
            <div class="logo"> <a href="#"><img src="images/logo.png" alt="logo" width="165" height="74"></a> </div>
            <!--end of Logo-->

            <?php
		include("visitor_menu.php");
		?>
        </div>
        <!--end of header-->
    </div> <!-- end of headerwrapper-->

    <!--============ Slider ============-->

    <div class="sliderwrapper">
        <div id="slider" class="container">
            <div class="slider">
                <ul class="slides">
                    <li class="slide">
                        <h5 class="wow fadeInDown" data-wow-delay="0.8s">What Is Foodzone? </h5>
                        <p class="wow fadeInUp" data-wow-delay="0.8s">Our Mission is to Nobody has a Bad Meal.We do this
                            by Helping People Discover Great Places Around Them.
                            Our Team Gathers Information From Every Restaurants Basis to Ensure Our Data is Fresh.Our
                            Vast Community Of Food Lovers Share Their Reviews and Photos,So You have All that You Need
                            to Make an Informed Choice.</p>
                        <img src="images/restaurants3.jpg" width="317" height="256" class="wow fadeInRight"
                            data-wow-delay="0.8s" alt="slide1img">
                    </li>
                    <li class="slide">
                        <h5 class="wow fadeInDown" data-wow-delay="0.8s">Amazing Experience About Dining:- </h5>
                        <p class="wow fadeInUp" data-wow-delay="0.8s">Starting With Information for over 1 Million
                            Restaurants Globally,We're Making Dining Smoother And More Enjoyable With Services like
                            Online Ordering and table Reservations.
                            With Dedicated Engagement And Management Tools,We're Enabling Restaurants To Spend More Time
                            Focusing On Food Itself,Which Translates Directly to Better Dining Experiences.</p>
                        <img src="images/restaurants 2.jpg" width="317" height="256" class="wow fadeInRight"
                            data-wow-delay="0.8s" alt="slideimg2">
                    </li>
                    <li class="slide">
                        <h5 class="wow fadeInDown" data-wow-delay="0.8s">Scope Of Restaurants:- </h5>
                        <p class="wow fadeInUp" data-wow-delay="0.8s">Foodzone is a Restaurant Search and Discovery
                            Service Founded And Same that Other sites.you Can Any One Select a City than You Collected a
                            Information
                            of Restaurants.It Provides the Details Of the User,to get a better Experience Before
                            Visiting The Restaurants. </p>
                        <img src="images/restaurant4.jpg" width="317" height="256" class="wow fadeInRight"
                            data-wow-delay="0.8s" alt="slideimg2">
                    </li>
                </ul>
            </div>
        </div> <!-- End of Slider-->
    </div> <!-- end of sliderwrapper-->

    <!--============ Best Dishes ============-->

    <div class="bestdisheswrapper">
        <div id="bestdishes" class="container">

            <h2 class="wow fadeInUp" data-wow-delay="0.3s">BEST DISHES</h2>
            <div class="slider">
                <ul class="slides">
                    <li class="slide">
                        <div class="item">
                            <img src="images/punjabi1.jpg" width="226" height="225" alt="sliderimg" class="wow flipInX"
                                data-wow-delay=".8s">
                            <h3>Paneer Cheese Kofta</h3>
                        </div> <!-- end of item-->

                        <div class="item2">
                            <img src="images/chinese2.jpg" width="226" height="225" alt="sliderimg" class="wow flipInX"
                                data-wow-delay=".8s">
                            <h3>Chinese Food </h3>
                        </div> <!-- end of item-->

                        <div class="item3">
                            <img src="images/roll.jpg" width="226" height="225" alt="sliderimg" class="wow flipInX"
                                data-wow-delay=".8s">
                            <h3>orange Sandwich Rolls</h3>
                        </div> <!-- end of item-->
                    </li>
                    <li class="slide">
                        <div class="item">
                            <img src="images/pizza.jpg" width="226" height="225" alt="sliderimg">
                            <h3>Pizza Time</h3>
                        </div> <!-- end of item-->

                        <div class="item2">
                            <img src="images/guj.jpg" width="226" height="225" alt="sliderimg">
                            <h3>Gujarati Rasthal</h3>
                        </div> <!-- end of item-->

                        <div class="item3">
                            <img src="images/thumb3.png" width="226" height="225" alt="sliderimg">
                            <h3>Pasta Fusilli</h3>
                        </div> <!-- end of item-->
                    </li>

                </ul>
            </div> <!-- end of slider-->
        </div> <!-- end of besth dishes-->
    </div> <!-- end of bestdishes wrapper-->

    <!--============ About us ============-->

    <div class="contactwrapper">
        <div id="contactus" class="container">
            <h3 class="wow fadeInUp" data-wow-delay="0.3s">Eat Well Feel Well</h3>
            <p class="wow fadeInUp" data-wow-delay="0.8s">


        </div>
        <!--contactus class-->
    </div> <!-- end of contact wrapper-->

    <!--============ COPYRIGHTS ============-->


    <div class="copyrightswrapper">
        <div id="copyrights" class="container">

            <p> Developed By Gidwani Sumit, Tank Jaydip, Makwana Bhavin</p>

        </div> <!-- end of copyrights-->
    </div> <!-- end of website-->

    <div class="fixedsocial">
        <a href=""><img src="images/facebook.png" width="20" height="20" alt="fb"> </a>
        <a href=""><img src="images/behance.png" width="20" height="20" alt="behance">
        </a>

    </div>

    <script type="text/javascript">
    $('.sliderwrapper .slider').glide({
        autoplay: 7000,
        animationDuration: 3000,
        arrows: true,
    });
    </script>

    <script type="text/javascript">
    $('.bestdisheswrapper .slider').glide({
        autoplay: false,
        animationDuration: 700,
        arrows: true,
        navigation: false,
    });
    </script>
</body>

</html>