<?php
session_start();

include("connection.php");
if(!isset($_SESSION['reg_id']))
{
		header("location:Login.php");
}

?>
<!DOCTYPE html>

<html lang="en">

<head>
    <title>Search2</title>

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

    </div> <!-- end of sliderwrapper-->

    <!--============ MAP ============-->

    <!--============ Contact us ============-->

    <div class="contactwrapper">
        <div id="contactus" class="container">
            <h3 class="wow fadeInUp" data-wow-delay="0.3s">Search Result</h3>

            <form action="review_code.php" method="post" enctype="multipart/form-data">

                <?php 
				$id=$_GET['id'];
				 $q="select *from restaurantprofile where rest_id='$id'";
				$rs=mysqli_query($cn,$q);
				$row=mysqli_fetch_array($rs);
				
				?>
                <input type="hidden" name="rest_id" value="<?php print $id;?>">
                <table align="center">
                    <tr>
                        <td>Rest-Name:</td>
                        <td><?php print $row['rest_name'];?></td>
                    </tr>
                    <tr>
                        <td> Address</td>
                        <td><?php print $row['area'];?></td>
                    </tr>
                    <tr>
                        <td>Contact</td>
                        <td><?php print $row['contact'];?></td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <?php
				$c=0;
				$id=$_GET['id'];
				$qg="select *from galary where rest_id='$id'";
				$rsg=mysqli_query($cn,$qg);
				while($rowg=mysqli_fetch_array($rsg))
				{
					
				if($c%3==0)
				{
					print "</tr><tr>";
				}
				$c++;
				?>

                        <td><img src="<?php print $rowg['file'];?>" width="150px" height="150px"></td>
                        <?php
				}
				?>
                    </tr>
                </table>
                <table>
                    <tr>
                        <?php
				$c=0;
				$id=$_GET['id'];
				$qm="select *from menu where rest_id='$id'";
				$rsm=mysqli_query($cn,$qm);
				while($rowm=mysqli_fetch_array($rsm))
				{
					
				if($c%3==0)
				{
					print "</tr><tr>";
				}
				$c++;
				?>

                        <td><img src="<?php print $rowm['filename'];?>" width="150px" height="150px"><br>
                            <?php print $rowm['title'];?>
                        </td>
                        <?php
				}
				?>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td>Review</td>
                    </tr>
                    <tr>
                        <td><textarea name="msg" cols="50" rows="5"></textarea></td>
                    </tr>
                    <tr>
                        <td> <input type="submit" class="mybutton" name="submit" value="Submit" />
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