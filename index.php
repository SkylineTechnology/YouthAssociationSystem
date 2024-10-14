<?php
session_start();
include 'includes/connection.php';
include 'includes/functions.php';
?>
<html lang="en">
    <head>
        <title>Home | <?php echo $sitename; ?></title>

        <!-- Meta tag Keywords -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <meta name="keywords" content="Eduversity Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
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

        <link rel="stylesheet" href="css/jquery.countdown.css" />

        <!--web font-->
        <link href="//fonts.googleapis.com/css?family=PT+Sans+Caption:400,700&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
        <!--//web font-->

    </head>

    <body>


        <!-- header -->
        <?php
        include 'includes/header2.php';
        ?>
        <!-- //header -->

        <!-- banner -->
        <section class="banner layer" id="home">
            <div class="container">
                <div class="banner-text">
                    <div class="slider-info mb-4">
                        <div class="agileinfo-logo">
                            <h3>
                                Practice makes you better
                            </h3>
                        </div>
                        <h3 class="txt-w3_agile mb-3"> Its time to master your skills</h3>
                       
                    </div>
                    <!-- To bottom button-->
                    <div class="thim-click-to-bottom">
                        <div class="rotate">
                            <a href="#welcome" class="scroll">
                                <i class="fas fa-angle-double-down"></i>
                            </a>
                        </div>
                    </div>
                    <!-- //To bottom button-->

                </div>
            </div>
        </section>
        <!-- //banner -->

        <!-- welcome -->
        <section class="welcome py-5" id="welcome">
            <div class="container py-sm-3">
                <h3 class="heading text-capitalize mb-lg-5 mb-4"> AYDECON - <span>Few Words About Us</span> </h3>
                <div class="row welcome-grids">
                    <div class="col-lg-4 mb-lg-0 mb-5" style="float: left !important;">
                        <h4  style="color: #2e8b57">About Aydecon</h4>
                        <p class="mb-3">
                            AYDECON connects youth with opportunities to transform 
                            their lives. Our holistic, systems-based approach emphasizes 
                            life skills in combination with a mix of technical, vocational, 
                            cultural orientation and entrepreneurship training. As a result,
                            youths are prepared to enter the workforce, create their own opportunities,
                            and be agents of change in their communities. 
                            Together with our partners and global network, we 
                            build effective, sustainable, and scalable initiatives 
                            that drive change around four interconnected strategic objectives:
                            Youth Agency: Youth agency is the desire.

                        </p>
                        <p> <i class="fas mr-2 fa-hand-point-right" style="color: #2e8b57"></i><a href="about_aydecon"  style="color: #2e8b57">Read More</a></p>


                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="image1 mb-4">
                            <h4  style="color: #2e8b57">ENTREPRENEURSHIP</h4>
                            <p class="mt-3">We empower youth to succeed in self-employment, because we know that the global market can’t keep pace </P>
                            <span class="fa fa-cog" aria-hidden="true"></span>
                            <a href="entrepreneurship"  style="color: #2e8b57"> <i class="fas fa-angle-double-right"></i> Read More</a>
                        </div>
                        <div class="image1 pt-0">
                            <h4  style="color: #2e8b57">EDUCATION & EMPLOYMENT</h4>
                            <p class="mt-3">We’re addressing the problem of a global skills gap by preparing youth to succeed in the jobs employers are seeking to the ability of youth</P>
                            <span class="fas fa-graduation-cap"></span>
                            <a href="education_employment"  style="color: #2e8b57"> <i class="fas fa-angle-double-right"></i> Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mt-md-0 mt-4">
                        <div class="image1 mb-4">
                            <h4  style="color: #2e8b57">CULTURAL ORIENTATION </h4>
                            <p class="mt-3">The reality show is all about reviving our cultural heritage. We are a team of young Nigerians who see the need to harness</P>
                            <span class="fab fa-accusoft"></span>
                            <a href="cultural_orientation"  style="color: #2e8b57"> <i class="fas fa-angle-double-right"></i> Read More</a>
                        </div>
                        <div class="image1 pt-0">
                            <h4  style="color: #2e8b57">GENDER EQUITY AND SOCIAL INCLUSION</h4>
                            <p class="mt-3">To support all youth throughout the world in realizing the future they want, AYDECON is committed to advancing social inclusion.</P>
                            <span class="fab fa-skyatlas"></span>
                            <a href="gender_equity"  style="color: #2e8b57"> <i class="fas fa-angle-double-right"></i> Read More</a>
                        </div>
                    </div>


                </div>

                <div class="row welcome-grids" style="float: right;">
                    <a href="about" class="btn btn-primary"> Read More</a>


                </div>
            </div>
        </section>
        <!-- welcome -->

        <!-- welcome bottom -->
        <section class="welcome-bottom">
            <div class="image-layer py-5">
                <div class="container py-sm-3">
                    <h3 class="heading text-capitalize mb-lg-5 mb-4"> Main Features</span> </h3>
                    <div class="row bottom-grids">
                        <div class="row col-lg-4 mb-lg-0 mb-5">
                            <div class="col-lg-3 col-2">
                                <i class="fab fa-studiovinari"></i>
                            </div>
                            <div class="col-lg-9 col-10">
                                <h4>VISION</h4>
                                <p>Envisions a world where all youths are inspired and equipped to realize the future they want and cultural orientation.</p>
                            </div>
                        </div>
                        <div class="row col-lg-4 mb-lg-0 mb-5">
                            <div class="col-lg-3 col-2">
                                <i class="fas fa-book"></i>
                            </div>
                            <div class="col-lg-9 col-10">
                                <h4>MISSION</h4>
                                <p>Connects youths with opportunities to transform their lives, ethics and cultural values.</p>
                            </div>
                        </div>
                        <div class="row col-lg-4">
                            <div class="col-lg-3 col-2">
                                <i class="fab fa-firstdraft"></i>
                            </div>
                            <div class="col-lg-9 col-10">
                                <h4>CULTURAL NORMS</h4>
                                <p>Youths have their own cultures through which they make a statement about themselves. 
                                </p>
                                <a href="#"> Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- //welcome bottom -->

        <!-- services -->
        <section class="services py-5">
            <div class="container py-sm-3">
                <h3 class="heading text-capitalize mb-lg-5 mb-4"> Values - <span>What We Value</span> </h3>
                <div class="row service-grids">
                    <div class="col-lg-4 col-md-6 mt-md-0 mt-5" style="margin-bottom: 15px;">
                        <div class="service-grid1">
                            <i class="fas fa-book"></i>
                            <h5>1</h5>
                            <h4 class="mb-3" style="color: #2e8b57;">Inclusion</h4>
                            <p>Consider all perspectives equally and honestly.</p>				
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-md-0 mt-5">
                        <div class="service-grid1">
                            <i class="fas fa-book"></i>
                            <h5>2</h5>
                            <h4 class="mb-3" style="color: #2e8b57;">Integrity</h4>
                            <p>Honor the best in ourselves and others.</p>				
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-0 mt-5">
                        <div class="service-grid1">
                            <i class="fas fa-book"></i>
                            <h5>3</h5>
                            <h4 class="mb-3" style="color: #2e8b57;">Inspiration</h4>
                            <p>Move youths to believe in better.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-md-0 mt-5">
                        <div class="service-grid1">
                            <i class="fas fa-book"></i>
                            <h5>4</h5>
                            <h4 class="mb-3" style="color: #2e8b57;">Innovation</h4>
                            <p>Make a difference, differently.</p>				
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-md-0 mt-5">
                        <div class="service-grid1">
                            <i class="fas fa-book"></i>
                            <h5>5</h5>
                            <h4 class="mb-3" style="color: #2e8b57;">Impact</h4>
                            <p>Create change that matters.</p>				
                        </div>
                    </div>




                </div>
            </div>
        </section>
        <!-- //services -->

        <!-- Admission form & counter plugin -->
         <section class="courses py-5">
            <div class="container py-sm-3">
                <h3 class="heading text-capitalize mb-lg-5 mb-4" style="text-align: center;"> Our Team</span> </h3>
                <div class="row course-grids">
                    <div class="col-lg-3 col-md-6 mt-lg-0 mt-5">
                        <div class="card">
                            <img src="images/t2.jpg" class="img-responsive" alt=" " />
                            <div class="card-body">
                                <h5 class="card-title" style="color: #2e8b57;">com.Mohammed Musa</h5>
                                <p style="font-weight: bold; color: #2e8b57;">The Founder</p>
                                <p class="card-text mb-3" style="text-align: justify;">com.Mohammed Musa,from the family of late Alhaji Musa ishiaku of mayo-ndaga sardauna local 
                                    government taraba state. Brief Biography of the founder of association of youth...</p>
                                <a href="mohammedMusa" class="btn btn-primary"> Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <img src="images/t1.jpg" class="img-responsive" alt=" " />
                            <div class="card-body">
                                <h5 class="card-title" style="color: #2e8b57;">Obinkita</h5>
                                <p class="card-text mb-3" style="text-align: justify;">Born on The 15th of June 1978, to the family of (Late Mr) & Mrs Benjamin O. Kanu from Arochukwu 
                                    Obinkita in Arochukwu LGA of Abia State. He is the 5th Child out of 8 Children produced by that ...</p>
                                <a href="unknownName" class="btn btn-primary"> Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-md-0 mt-5">
                        <div class="card">
                            <img src="images/t3.jpg" class="img-responsive" alt=" " />
                            <div class="card-body">
                                <h5 class="card-title" style="color: #2e8b57;">Abdulhameed Shehu Jijji</h5>
                                <p class="card-text mb-3" style="text-align: justify;">QUALIFICATION INFORMATION NYSC SERVICE(kwara state 20-2015) B.Sc(Hons) Statistics 
                                    (Nasarawa State University Keffi 2009/2010-2013/2014) Senior...</p>
                                <a href="shehuJijji" class="btn btn-primary"> Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-md-0 mt-5">
                        <div class="card">
                            <img src="images/t4.jpg" class="img-responsive" alt=" " />
                            <div class="card-body">
                                <h5 class="card-title" style="color: #2e8b57;">Muhammed Auwal Abdullahi</h5>
                                <p class="card-text mb-3" style="text-align: justify;">Com.Muhammed Auwal Abdukkahi is from Obi LGA, 12/November/1984, 
                                   born and grow up in kaduna, but now stay in lafia, His a computer ...</p>
                                <a href="auwalAbdullahi" class="btn btn-primary"> Read More</a>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </section>
        <!-- //Admission form & counter plugin -->

        

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

        <!-- Countdown-Timer-JavaScript -->
        <script src="js/simplyCountdown.js"></script>
        <!-- easy to customize -->
        <script>
$('#simply-countdown-losange').simplyCountdown({
    year: 2020,
    month: 1,
    day: 06
});
        </script>
        <!-- //Countdown-Timer-JavaScript -->

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
</html>