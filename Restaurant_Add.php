<!DOCTYPE html>
<html lang="en">

<head>

    <title>Restaurant_Add</title>
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
            <div class="logo"> <a href="#"><img src="images/LOGO.png" alt="logo" width="165" height="74"></a> </div>
            <!--end of Logo-->

            <nav>
                <ul id="navigations">
                    <li><a href="#navigations">HOME</a></li>
                    <li> <a href="#slider">REGISTER</a></li>
                    <li><a href="#map">LOGIN</a></li>
                    <li><a href="#bestdishes">SEARCH</a></li>
                    <li><a href="#contactus">CONTACT</a></li>
                </ul>
            </nav>

        </div>
        <!--end of header-->
    </div> <!-- end of headerwrapper-->

    <!--============ Slider ============-->


    <div class="sliderwrapper">

    </div> <!-- end of sliderwrapper-->

    <!--============ MAP ============-->

    <!--============ Contact us ============-->

    <div class="contactwrapper">
        <div id="contactus" class="container">

            <h3 class="wow fadeInUp" data-wow-delay="0.3s">Restaurant_Add</h3>

            <form method="post" action="Restaurant_Add_code.php">
                <table style="padding-left:300px;text-align:left">

                    <tr>
                        <td> Name </td>
                        <td> <input class="mytextbox" type="text" name="Name" title="only name" type="text"
                                pattern="[a-zA-Z ]*$" required /> </td>
                    </tr></br>

                    <tr>
                        <td> Email </td>
                        <td> <input class="mytextbox" type="text" name="Email" title="email" required
                                pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" /> </td>
                    </tr></br>

                    <tr>
                        <td> Password </td>
                        <td> <input class="mytextbox" type="password" name="Password"
                                title="at least eight symbols containing at least one number, one lower" type="text"
                                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" required /> </td>
                    </tr></br>

                    <tr>
                        <td> Contact </td>
                        <td> <input type="text" class="mytextbox" name="Contact" required pattern="(\+?\d[- .]*){7,13}"
                                title="international, national or local phone number" /> </td>
                    </tr></br>

                    <tr>
                        <td> City </td>
                        <td> <input class="mytextbox" type="text" name="city" title="only name" pattern="[a-zA-Z ]*$"
                                required /> </td>
                    </tr></br>

                    <tr>
                        <td> Status </td>
                        <td> <input class="mytextbox" type="text" name="Status" required /> </td>
                    </tr></br>

                    <tr>
                        <td>&nbsp;</td>
                        <td> <input type="submit" class="mybutton" name="submit" value="Add" />

                            <input type="Reset" class="mybutton" name="reset" value="Reset">
                        </td>
                    </tr>
                </table>
            </form>
            <img src="images/popup2.png" width="487" height="137" class="secondpop" alt="pop">
            <img src="images/popup3.png" width="487" height="137" class="thirdpop" alt="pop">
            <img src="images/popup4.png" width="487" height="137" class="fourthpop" alt="pop">
            <img src="images/popup6.png" width="487" height="137" class="fifthpop" alt="pop">
            <img src="images/popup7.png" width="487" height="137" class="sixthpop" alt="pop">
        </div>
        <!--contactus class-->
    </div> <!-- end of contact wrapper-->


    <!--============ FOOTER ============-->

    <!--============ COPYRIGHTS ============-->

    <div class="copyrightswrapper">
        <div id="copyrights" class="container">

            <p> Developed By Gidwani Sumit, Tank Jaydip, Makwana Bhavin</p>

        </div>
        <!-- end of copyrights
    </div> end of website-->

        <div class="fixedsocial">
            <a href=""><img src="images/facebook.png" width="20" height="20" alt="fb">
            </a>
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