<?php
session_start();
include 'includes/connection.php';
include 'includes/functions.php';

if (isset($_POST["contactUs"])) {
    // $contactUsid = uniqueCode($conn);
    $fullname = secure($_POST["fullname"]);
    $email = secure($_POST["email"]);
    $phone = secure($_POST["phone"]);
    $msg = secure($_POST["msg"]);
    $date = date("Y-m-d H:i:s");
   
        $contactUs = mysqli_query($conn, "insert into contact values ('','$fullname','$email','$phone','$msg','$date')") or die(mysqli_error($conn));
        
        if($contactUs){
            echo "<script>alert('Message has Been Sent Successfully')</script>";
        }else{
            echo "<script>alert('There is an error try after some time')</script>";
             echo mysqli_error($conn);
        }
        
    }
    

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $sitename;?></title>

        <!-- Meta tag Keywords -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <meta name="keywords" content=" Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
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

        <!-- inner banner -->
        <div class="inner_banner layer" id="home">
            <div class="container">
                <div class="agileinfo-inner">
                    <h2 class="text-center text-white">
                        Contact Page
                    </h2>
                </div>
            </div>
        </div>
        <!-- //inner banner -->
        <!-- breadcrumbs -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
            </ol>
        </nav>
        <!-- //breadcrumbs -->

        <!-- contact -->
        <section class="contact py-5">
            <div class="container py-sm-3">
                <h3 class="heading text-capitalize mb-lg-5 mb-4" style="color: #2e8b57;"> Contact Us - <span>Get In Touch</span> </h3>
                <div class="address row">
                    <div class="col-md-4 address-grid">
                        <div class="address-info">
                            <div class="address-left text-center">
                                <i class="far fa-map"></i>
                            </div>
                            <div class="address-right text-center">
                                <h6 class="ad-info text-uppercase mb-2">Address</h6>
                                <p> 2466H 5th Street Parking, King Block, New York City.

                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 address-grid">
                        <div class="address-info">
                            <div class="address-left text-center">
                                <i class="far fa-envelope"></i>
                            </div>
                            <div class="address-right text-center">
                                <h6 class="ad-info text-uppercase mb-2">Website</h6>
                                <a href="www.aydecon.com.ng"> www.aydecon.com.ng</a>
                                
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 address-grid">
                        <div class="address-info">
                            <div class="address-left text-center">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <div class="address-right text-center">
                                <h6 class="ad-info text-uppercase mb-2">Phone</h6>
                                <p>+1 234 567 8901</p>
                                <p>+1 234 567 8901</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="form row py-5">
                    <div class="col-lg-6 contact-form">
                        <form action="contactUs.php" method="post">
                            <div class="fields-grid">
                                <div class="styled-input agile-styled-input-top">
                                    <input type="text" name="fullname" required=""> 
                                    <label>Full Name</label>
                                    <span></span>
                                </div> 
                                <div class="styled-input">
                                    <input type="email" name="email" required="">
                                    <label>Email Address</label>
                                    <span></span>
                                </div>
                                <div class="styled-input">
                                    <input type="tel" name="phone" required="">
                                    <label>Phone Number</label>
                                    <span></span>
                                </div>
                                <div class="styled-input mt-5">
                                    <textarea type="text" name="msg"></textarea>
                                    <label class="text">Your Message</label>
                                    <span></span>
                                </div>
                            </div>
                            <input type="submit" name="contactUs" value="Submit">
                        </form>
                    </div>
                    <div class="col-lg-6 mt-lg-0 mt-5">
                        <div class="bg-img">
                            <div class="contact-layer">
                                <h3 class="mb-3">Dont hesitate to contact us for any kind of information</h3>
                                <p><i class="fas mr-2 fa-phone"></i> +12 327 8976 2334</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387142.84010033106!2d-74.25819252532891!3d40.70583163828471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1475140387172"
                            style="border:0"></iframe>
                </div>
            </div>
        </section>	
        <!-- //contact -->
        <?php
        include 'includes/footer.php';
        ?>	
        <!-- footer -->	

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