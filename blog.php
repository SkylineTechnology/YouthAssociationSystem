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

    if ($contactUs) {
        echo "<script>alert('Message has Been Sent Successfully')</script>";
    } else {
        echo "<script>alert('There is an error try after some time')</script>";
        echo mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title> <?php echo $sitename; ?></title>
	
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
    <!-- inner banner -->
        <div class="inner_banner_blog layer" id="home">
            <div class="container">
                <div class="agileinfo-inner">
                    <h2 class="text-center text-white">
                        NEWS & EVENTS
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
                <li class="breadcrumb-item active" aria-current="page">Blog</li>
            </ol>
        </nav>
        <!-- //breadcrumbs -->
    <!-- //breadcrumbs -->

 <!-- error banner -->
 <section class="courses py-5">
            <div class="container py-sm-3">
                <h3 class="heading text-capitalize mb-lg-5 mb-4" style="text-align: center; color: #2e8b57;"> Our Blog</h3>
                <div class="row course-grids">
                    <?php
//Start Pagination 
                    $item_per_page = 10;
                    $number_of_items = mysqli_num_rows(mysqli_query($conn, "select * from blog"));
                    $number_of_pages = ceil($number_of_items / $item_per_page);

                    if (!isset($_GET['page'])) {
                        $page = 1;
                    } else {
                        $page = $_GET['page'];
                    }
                    $current_page_first_item = ($page - 1) * $item_per_page;
//End Pagination

                    $blog_content = mysqli_query($conn, "select * from blog order by date desc limit $current_page_first_item,$item_per_page") or die(mysqli_error($conn));
                    while ($row = mysqli_fetch_array($blog_content)) {
                        $title = $row["topic"];
                        $writter = $row["author"];
                        $mssg = $row["message"];
                        $type = $row["type"];
                        $image = $row["img"];
                        $date = date_format(date_create($row["date"]), "d M Y H:i A");
                        $blogid = $row["blog_id"];
                        $num_of_comments = mysqli_num_rows(mysqli_query($conn, "select * from comments where blog_id='$blogid'"));
                        ?>

                    <div class="col-lg-4 col-md-6" style=" margin-bottom: 15px;">
                            <div class="card">
                                <a href="content?read=<?php echo base64_encode($blogid); ?>"><img src="admin/media/blog_images/<?php echo $image; ?>" style="height: 180px; width:100%;" alt=""></a>
                                <div class="card-body">
                                    <h5 class="card-title"><a href="content?read=<?php echo base64_encode($blogid); ?>"> <font color="#2e8b57"><?php echo html_entity_decode($title); ?></font></h5>
                                    <div style="text-align: justify; font-size: 1px !important; color: black;">
                                        <?php echo substr(html_entity_decode($mssg), 0, 250); ?>...
                                    </div>
                                    <div style="color: black; font-size: 14px; margin-top: 10px;">
                                    <a href="content?read=<?php echo base64_encode($blogid); ?>"><i class="fa  fa-calendar icon_1"> </i><span class="icon_text"> <span class="m_1"><?php echo $date; ?></span></span></a>
                                     </div>
                                    <div style="color: black; font-size: 14px;">
                                    <a href="content?read=<?php echo base64_encode($blogid); ?>"><i class="fa  fa-comments-o icon_1"> </i> <span class="icon_text"><?php echo $num_of_comments; ?> Comment(s)</span></a>
                                    </div>
                                    <div style="color: black; font-size: 14px;">
                                    <a href="content?read=<?php echo base64_encode($blogid); ?>"><span class="icon_text">Read More <i class="fa fa-caret-right icon_1"> </i></span></a>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>


                        <?php
                    }
                    ?>			


                </div>
            </div>
        </section>
    <!-- // error banner -->

<!-- footer -->	


<?php
include"includes/footer.php";
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
	
	<!-- start-smoth-scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- start-smoth-scrolling -->

</body>
</html>