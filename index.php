<?php
session_start();
include("connect.php");
$q= mysqli_query($success,"SELECT * from details");
$rowcount=mysqli_num_rows($q);
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Indian Bank</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>
<body style="background: url(images/comp.jpg) no-repeat ;">
<style>
.login100-form {
    width: 100%;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 3px 28px 3px 19px;
2
}

element.style {
    margin-left: -20px;
    margin-top: 50px;
}
.modal-footer>:not(:last-child) {
    margin-right: 9rem;
}
</style>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <nav class=”navbar fixed-top navbar-expand-md navbar-light bg-light”>


       

        <header class="header">
            <div class="header-area ">
                <div id="sticky-header" class="main-header-area">
                    <div class="container-fluid p-0">
                        <div class="row align-items-center no-gutters">
                            <div class="col-xl-2 col-lg-2 ">
                                <div class="logo-img">
                                    <br>

                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-8">
                                <div class="main-menu  d-none d-lg-block text-center">
                                    <nav>
                                        <ul id="navigation">
                                            <br>
                                            <li class="nav-item">
                                                <div class="container-login100-form-btn" style="margin-left: 220px;">

                                                </div>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </nav>
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area" style="background-image: url(images/front.jpg);">
        <div class="single_slider  d-flex align-items-center slider_bg_1 overlay"
            style="background-image: url(images/front.jpg);">
            <div class="container">
                <div class="row align-items-center justify-content-start">
                    <div class="col-lg-10 col-md-10">
                        <div class="slider_text">
                            <h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".1s"
                                style="color: #00bfff; margin-left: -100px;">
                                <b>Indian Bank</b>
                            </h3>
                            <h2 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".1s"
                                style="color: #ffb3b3; margin-left: -100px; margin-top:-35px;">
                                Money transfer between different accounts
                            </h2>
                            <br>
                            <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".1s"
                                style="color:#00bfff; margin-left: -100px;">
                                <b>Relationship beyond banking!</b>
                            </p>
                            <br>
                            <a name="getstarted" href="#services" style="margin-left: -100px; width: 50px; "
                                class="login100-form-btn ">
                                Get Started
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- slider_area_end -->

    <!-- service_area  -->
    <div class="service_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb-70">
                        <span class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s"
                            style="font-size: 50px; color:#57b846; margin-top: -110px;" id="services"> AVAILABLE SERVICES</span>


                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-md-4">
                        <div style="background-color:#B4EBF3;"class="single_service text-center wow fadeInLeft" data-wow-duration="1.2s"
                            data-wow-delay=".4s">
                            <!-- <a href="add.php"> -->
                            <button type="button" data-toggle="modal" data-target="#myModal">
                                <div class="icon">
                                    <img src="images\addcust.png" alt="" height="70px" width="70px">
                                </div>
                                <h3 style="color:red;"><b>ADD CUSTOMER</b></h3>
                                <p>Add new clients to the list with all of the necessary information, and you're ready to transact</p>
                            </button>

                        </div>
                    </div>
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <!-- <button style="margin-left: -200px;" class="close" data-dismiss="modal">&times;</button> -->
                                    <h4 style="margin-left: 0px; color: red;"><b>ADD CUSTOMER</b></h4>
                                </div>
                                <div class="modal-body">
                                    <form class="login100-form validate-form" action="insert.php" method="post">
                                        <br>

                                        <div class="wrap-input100 validate-input m-b-26"
                                            data-validate="Username is required">
                                            <br>
                                            <br>
                                            <input class="input100" type="text" name="cname"
                                                placeholder="Enter Customer Name">
                                            <span class="focus-input100"></span>
                                        </div>

                                        <div class="wrap-input100 validate-input m-b-18"
                                            data-validate="Password is required">

                                            <input class="input100" type="number" name="mobile"
                                                placeholder="Enter Customer Mobile-no">
                                            <span class="focus-input100"></span>
                                        </div>
                                        <div class="wrap-input100 validate-input m-b-18"
                                            data-validate="Password is required">

                                            <input class="input100" type="email" name="email"
                                                placeholder="Enter Customer Email-id">
                                            <span class="focus-input100"></span>
                                        </div>
                                        <div class="wrap-input100 validate-input m-b-18"
                                            data-validate="Password is required">

                                            <input class="input100" type="number" name="amount"
                                                placeholder="Enter Depositing Amount">
                                            <span class="focus-input100"></span>
                                        </div>
                                        <div class="wrap-input100 validate-input m-b-18"
                                            data-validate="Password is required">

                                            <input class="input100" type="number" name="accno"
                                                placeholder="Enter Unique customer ID">
                                            <span class="focus-input100"></span>
                                        </div>

                                        <br>
                                        <br>


                                        <div class="modal-footer">
                                            <br><br>
                                            <button style="margin-left: -10px; margin-top:50px;" type="button"
                                                class="login100-form-btn" data-dismiss="modal">Close</button>
                                            <input style="margin-left: 20px; margin-top:50px;" type="submit"
                                                value="Save" name="sub" class="login100-form-btn" >
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="col-xl-4 col-md-4">
                        <div style="background-color:#B4EBF3;"class="single_service text-center wow fadeInUp" data-wow-duration="1s"
                            data-wow-delay=".3s">
                            <button type="button" onclick="window.location.href='transact.php'" >
                                <div class="icon">
                                    <img src="images\transaction.png" alt="" height="74px" width="74px">
                                </div>
                                <h3 style="color:red;"><b>TRANSFER MONEY</b></h3>
                                <p>Money transfer between different accounts</p>
                                <br>
                            </button>
                        </div>

                    </div>
                    <!-- <div class="modal fade" id="myModal1" role="dialog">
                        <div class="modal-dialog">
Modal content-->
                            <!-- <div class="modal-content">
                                <div class="modal-header">
                                <button style="margin-left: -170px;" class="close" data-dismiss="modal">&times;</button> 
                                    <h4 style="margin-left: 0px;">Transact</h4>
                                </div>
                                <div class="modal-body">
                                    <form class="login100-form validate-form" action="insert1.php" method="post">
                                        <br>

                                        <div class="wrap-input100 validate-input m-b-26"
                                            data-validate="Username is required">
                                           
                                            <input class="input100" type="text" name="st" list="devename" placeholder="Send To">
                                            <span class="focus-input100"></span>

                                            <datalist id="devename">
                                                <?php
                        for($i=1;$i<=$rowcount;$i++)
                        {
                            $row=mysqli_fetch_array($q);
                            
                    ?>
                                                <option value="<?php echo ' '.$row['cname'].' ('. $row['cid'].')' ?>">
                                                    <?php
                     }
                     ?>

                                            </datalist>
                                        </div>

                                        <div class="wrap-input100 validate-input m-b-26"
                                            data-validate="Username is required">
                                           
                                            <input class="input100" type="text" name="st" list="devename" placeholder="Debit From">
                                            <span class="focus-input100"></span>

                                            <datalist id="devename">
                                                <?php
                        for($i=1;$i<=$rowcount;$i++)
                        {
                            $row=mysqli_fetch_array($q);
                            
                    ?>
                                                <option value="<?php echo ' '.$row['cname'].' ('. $row['cid'].')' ?>">
                                                    <?php
                     }
                     ?>

                                            </datalist>
                                        </div>

                                        <div class="wrap-input100 validate-input m-b-18"
                                            data-validate="Password is required">

                                            <input class="input100" type="number" name="amt" placeholder="Enter amount">
                                            <span class="focus-input100"></span>
                                        </div>
                                        <div class="wrap-input100 validate-input m-b-18"
                                            data-validate="Password is required">

                                            <input class="input100" type="password" name="email"
                                                placeholder="Enter Employee Secure ID">
                                            <span class="focus-input100"></span>
                                        </div>

                                        <br>
                                        <br>


                                        <div class="modal-footer">
                                            <br><br>
                                            <button style="margin-left: -10px; margin-top:50px;" type="button"
                                                class="login100-form-btn" data-dismiss="modal1">Close</button>
                                            <input style="margin-left: 20px; margin-top:50px;" type="submit"
                                                value="Transact" name="sub1" class="login100-form-btn">
                                        </div>
                                    </form> 
                                </div>
                            </div>

                        </div>

                    </div>  -->

                    <!--<div class="col-xl-4 col-md-4">
                        <div class="single_service text-center wow fadeInRight" data-wow-duration="1.2s"
                            data-wow-delay=".4s">
                            <a href="progress.php">
                                <div class="icon">
                                    <img src="img/svg_icon/history.svg" alt="" height="74px" width="74px">
                                </div>
                                <h3>TRANSACTION HISTORY</h3>
                                <p>Check all the Transaction History till date</p>
                                <br>
                            </a>
                        </div>
                    </div>-->
                    <div class="col-xl-4 col-md-4" >
                        <div style="background-color:#B4EBF3;"class="single_service text-center wow fadeInUp" data-wow-duration="1s"
                            data-wow-delay=".3s">
                            <button type="button" onclick="window.location.href='view.php'">
                                <div class="icon">
                                    <img src="images\th.jpg" alt="" height="74px" width="74px">
                                </div>
                                <h3 style="color:red;"><b>VIEW CUSTOMERS</b></h3>
                                <p>View all the customers having accounts in our bank</p>
                                <br>
                    </button>
                        </div>

                    </div>


                </div>
            </div>
        </div>
      
        <!--/ service_area  -->

    </div>


<div class="border-top">
<h6 class="text-center mt-3">Copyright ©2021 All rights reserved<p style="color: green;">
            With &#10084;&#65039; by Anupriya
          </p>

</h6>
</div>       
</body>

</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        // Add smooth scrolling to all links
        $("a").on('click', function (event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 500, function () {

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        });
    });
</script>


<script src="js/vendor/modernizr-3.5.0.min.js"></script>
<script src="js/vendor/jquery-1.12.4.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/ajax-form.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/scrollIt.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/nice-select.min.js"></script>
<script src="js/jquery.slicknav.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/gijgo.min.js"></script>

<!--contact js-->
<script src="js/contact.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/mail-script.js"></script>

<script src="js/main.js"></script>

