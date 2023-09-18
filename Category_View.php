<?php
session_start();
if(!isset($_SESSION['ad_id']))
{
	header("location:Admin_Lgoin.php");
}
include("connection.php");
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$q="delete from category where cat_id='$id'";
	mysqli_query($cn,$q);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Category_View</title>

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

            <?php
		include("admin_menu.php");
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
            <h3 class="wow fadeInUp" data-wow-delay="0.3s">Category_View</h3>

            <form method="post" action="Category_Add_code.php">
                <table borderstyle="3%" cellspacing="10" cellpadding="10">
                    <tr>
                        <td>CategoryName</td>
                        <td>Category_icon</td>
                        <td> option</td>
                    </tr>

                    <?php
					$q="select * from category";
					$rs=mysqli_query($cn,$q);
					while($row=mysqli_fetch_array($rs))
					{
						?>

                    <tr>
                        <td><?php print $row['cat_name'];?></td>
                        <td><img src="<?php print $row['cat_icon'];?>" width="100px" height="100px" /></td>
                        <td><a href="Category_View.php?id=<?php print $row['cat_id'];?>">Delete</a> |
                            <a href="Category_Edit.php?id=<?php print $row['cat_id'];?>">Edit</a>
                        </td>

                    </tr>
                    <?php
					}
					?>
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
        <a href="H"><img src="images/facebook.png" width="20" height="20" alt="fb"> </a>
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