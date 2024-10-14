<?php
session_start();
include 'includes/connection.php';
include 'includes/functions.php';
?>
<html lang="en">
    <head>
        <title><?php echo $sitename; ?></title>

        <!-- Meta tag Keywords -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <meta name="keywords" content="" />
        <script type="application/x-javascript">
            addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
            window.scrollTo(0, 1);
            }
        </script>
        <!--// Meta tag Keywords -->

        <!-- css files -->
        <link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
        <link rel="stylesheet" href="css/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
        <!-- //css files -->

        <!--web font-->
        <link href="//fonts.googleapis.com/css?family=PT+Sans+Caption:400,700&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
        <!--//web font-->

    </head>

    <body>


        <!-- header -->
        <?php
        include 'includes/header.php';
        ?>
        <!-- //header -->

        <!-- inner banner -->
        <div class="inner_banner layer" id="home">
            <div class="container">
                <div class="agileinfo-inner">
                    <h2 class="text-center text-white">
                    </h2>
                </div>
            </div>
        </div>
        <!-- //inner banner -->
        <!-- breadcrumbs -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Our team</li>
            </ol>
        </nav>
        <!-- //breadcrumbs -->


        <!-- welcome -->
        <section class="courses py-5">
            <div class="container py-sm-3">

                <div class="row course-grids">
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <img src="images/t1.jpg" class="img-responsive" alt=" " />
                            <div class="card-body">
                                <h5 class="card-title" style="color: #2e8b57;">Unknown Name</h5>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-6 mt-md-0 mt-5">
                        <div class="card">

                            <div class="card-body">

                                <p class="card-text mb-3" style=" text-align: justify; color: black;">
                                    Ag. NATIONAL CHAIRMAN. Born on The 15th of June 1978, to the family of (Late Mr) & Mrs Benjamin O. Kanu from 
                                    Arochukwu Obinkita in Arochukwu LGA of Abia State. He is the 5th Child out of 8 Children produced by that Wedlock.
                                    He Attended Umuola/Umuokahia Community Primary school Aba. And proceeded to Wilcox Memorial Comprehensive Secondary
                                    school Aba, BTW 1990 and 1996.  He Attended The Abia State Polytechnics Aba where he Obtained Higher National 
                                    Diploma in Computer Science. He Also went to Michael Okpara University of Agriculture Umudike  for his B.Sc 
                                    program in Information Mgt Technology. WORK EXPERIENCE: He worked in the Marketing Department of 7up Bottling 
                                    Company PLC Aba plant where he held several positions from Sales Clerk to Regional Secretary And to Personal 
                                    Assistant to Abia Regional Marketing Managers BTW 2000 to 2010. He has also worked with Prochoice Biz koncept 
                                    Abuja as Marketing Manager BTW January 2015 to Dec 2016. He is the Project Manager of Hammer Smith Real Estate 
                                    Group. BTW 2017 till Date. However, he is one of the Pioneer /Founding Members of AYEDCON. and the Current Ag. 
                                    National CHAIRMAN Of The Association. OTHER PREVILEDGED INFORMATION: (PLACES VISITED) 1) United Arab Emirates. 2) 
                                    Qatar - Doha. 3) Ethiopia (Addis Ababa). 4) Togo - Lome. 5) Benin Republic - Cotonu. 6) Ghana - Accra.
                                </p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!-- //stats -->

        <!-- about -->

        <!-- //about -->

        <!-- footer -->	
        <?php
        include 'includes/footer.php';
        ?>
        <!-- footer -->
        <!-- Login modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-uppercase" id="exampleModalLabel1">Login</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="#" method="post" class="p-3">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">User Name</label>
                                <input type="email" class="form-control" placeholder="User Name" name="Name" id="recipient-name" required="">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name1" class="col-form-label">Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="Name" id="recipient-name1" required="">
                            </div>
                            <div class="right-w3l mt-4 mb-3">
                                <input type="submit" class="form-control" value="Login">
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- //Login modal -->

        <!-- Register modal -->
        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-uppercase" id="exampleModalLabel1">Register Here</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="#" method="post" class="p-3">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">First Name</label>
                                <input type="text" class="form-control" placeholder="First Name" name="Name" id="recipient-name2" required="">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Last Name</label>
                                <input type="text" class="form-control" placeholder="Last Name" name="Name" id="recipient-name3" required="">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Email id</label>
                                <input type="email" class="form-control" placeholder="Email id" name="Name" id="recipient-name4" required="">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Mobile Number</label>
                                <input type="text" class="form-control" placeholder="Mobile Number" name="Name" id="recipient-name5" required="">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name1" class="col-form-label">Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="Name" id="recipient-name6" required="">
                            </div>
                            <div class="right-w3l mt-4 mb-3">
                                <input type="submit" class="form-control" value="Create account">
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- //Register modal -->


        <!-- js -->
        <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
        <!-- //js -->	

        <!-- search-bar -->
        <script src="js/main.js"></script>
        <!-- //search-bar -->

        <!-- stats -->
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/jquery.countup.js"></script>
        <script>
            $('.counter').countUp();
        </script>
        <!-- //stats -->

        <!-- start-smoth-scrolling -->
        <script src="js/SmoothScroll.min.js"></script>
        <script type="text/javascript" src="js/move-top.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();
                    $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
                });
            });
        </script>
        <!-- here stars scrolling icon -->
        <script type="text/javascript">
            $(document).ready(function () {
                /*
                 var defaults = {
                 containerID: 'toTop', // fading element id
                 containerHoverID: 'toTopHover', // fading element hover id
                 scrollSpeed: 1200,
                 easingType: 'linear' 
                 };
                 */

                $().UItoTop({easingType: 'easeOutQuart'});

            });
        </script>
        <!-- //here ends scrolling icon -->
        <!-- start-smoth-scrolling -->

    </body>
</html><?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

