<?php
session_start();
include 'includes/connection.php';
include 'includes/functions.php';

$content_id = isset($_GET["read"]) ? base64_decode($_GET["read"]) : "";
$row = mysqli_fetch_array(mysqli_query($conn, "select * from blog where blog_id='$content_id'")) or die(mysqli_error($conn));
$title = $row["topic"];
$writter = $row["author"];
$msg = $row["message"];
$type = $row["type"];
$image = $row["img"];
$date = date_format(date_create($row["date"]), "d M Y H:i A");
$blogid = $row["blog_id"];
$comments = mysqli_query($conn, "select * from comments where blog_id='$blogid' order by date desc");
$num_of_comments = mysqli_num_rows($comments);



if (isset($_POST["submit"])) {
    $name = htmlentities(addslashes($_POST["name"]));
    $msg = htmlentities(addslashes($_POST["message"]));
    $comm_date = date("Y-m-d H:m:s");

    $insert = mysqli_query($conn, "insert into comments values ('','$blogid','$name','$msg','$comm_date')");
    if ($insert) {
        $id = $_GET['read'];
        echo "<script>alert('Comment Posted Succesfully'); window.location.href='content?read=$id'</script>";
    } else {
        echo "<script>alert('Operations failed, please try after some minutes')</script>";
    }
}
?>
<html lang="en">
    <head>
        <title><?php echo $sitename; ?> |  <?php echo $title; ?></title>

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
                        <?php echo $title; ?>
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
                <li class="breadcrumb-item active" aria-current="page"><?php echo $title; ?></li>
            </ol>
        </nav>
        <!-- //breadcrumbs -->


        <!-- welcome -->
        <section class="courses py-5">
            <div class="container py-sm-3">
                
                <div class="row course-grids">
                    <div class="col-lg-12 col-md-6" >
                        <div class="card" style="float: left !important;">
                            <img  src="admin/media/blog_images/<?php echo $image; ?>" style=" width:100%; height:30%;" alt=" " class="img-responsive" />
                            <div class="card-body">
                                <h5 class="card-title" style="text-align:center; color: #2e8b57;"><?php echo $title; ?></h5>
                                <div style=" width: 60%; display: inline-flex; justify-content: space-between; margin-left: 150px;">
                                    <nav><span class="fa fa-user" aria-hidden="true"></span><a href="content?read=<?php echo base64_encode($blogid); ?>"><font color="#2e8b57"><?php echo $writter; ?></font></a></nav>
                                    <nav><span class="fa fa-tag" aria-hidden="true"></span><a href="content?read=<?php echo base64_encode($blogid); ?>"><font color="#2e8b57"><?php echo $date; ?></font></a></nav>
                                    <nav><span class="fa fa-envelope-o" aria-hidden="true"></span><a href="content?read=<?php echo base64_encode($blogid); ?>"><?php
                                            if ($num_of_comments < 1) {
                                                echo 0;
                                            } else {
                                                echo $num_of_comments;
                                            }
                                            ?> Comments</a></nav>
                                </div>
                                <p class="card-text mb-3" style="text-align: justify;"><?php echo html_entity_decode($msg); ?></p>
                            </div>
                            <p style="margin-left: 20px;"><b>Comment(s):</b></p>
                            <?php
                            while ($com = mysqli_fetch_array($comments)) {
                                $comentid = $com["comment_id"];
                                $bl_id = $com["blog_id"];
                                $fullname = $com["fullname"];
                                $com_msg = $com["comment"];
                                $comm_date = date_format(date_create($com["date"]), "d M Y H:i A");
                                ?>
                                <div style="border-radius:34px; width: 100% !important;" class="tab_grid_prof">                          
                                    <div class="col-sm-11" style=" min-height: 70px; border: 1px solid #ccc; margin-left: 20px;margin-top: 10px; border-radius: 10px;">
                                        <div class="location_box1">
                                            <span class="m_2_prof"><small style="font-weight: bolder; color: #339900;"><?php echo $fullname; ?></small> &nbsp; <small style="color:#01010f;"><?php echo $comm_date; ?></small></span>
                                            <p><?php echo html_entity_decode(addslashes($com_msg)); ?></p>
                                        </div>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>

                                <?php
                            }
                            ?>
                            <div class="form row py-5">
                                <div class="col-lg-12 contact-form">
                                    <form action="" method="post">
                                        <div class="fields-grid">
                                            <div class="styled-input agile-styled-input-top">
                                                <input type="text" name="name" required=""> 
                                                <label>Name</label>
                                                <span></span>
                                            </div> 
                                           
                                            <div class="styled-input mt-5">
                                                <textarea type="text" name="message"></textarea>
                                                <label class="text">Enter Comment...</label>
                                                <span></span>
                                            </div>
                                        </div>
                                        <input type="submit" name="submit" value="Comment">
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                        
                       <!-- <div class="col-lg-4 col-md-6" style="float: right !important; clear: both !important;">
                            <div class="card">
                                <img class="card-img-top" src="images/image3.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Graduation Course</h5>
                                    <p class="card-text mb-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="contact.html" class="btn btn-primary"><i class="fas fa-graduation-cap"></i> Join Course</a>
                                </div>
                            </div>

                        </div> -->
                        
                        
                    </div>
                </div>
            </div>
        </section>

        <!-- welcome -->

       
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
</html>