<?php
session_start();
include 'includes/connection.php';
include 'includes/functions.php';
?>
<html lang="en">
<head>
<title><?php echo $sitename;?></title>
	
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
				  <img src="images/t2.jpg" class="img-responsive" alt=" " />
				  <div class="card-body">
					<h5 class="card-title" style="color: #2e8b57;">com.Mohammed Musa</h5>
					
				  </div>
				</div>
			</div>
			<div class="col-lg-8 col-md-6 mt-md-0 mt-5">
				<div class="card">
				  
				  <div class="card-body">
					
                                      <p class="card-text mb-3" style=" text-align: justify; color: black;">
                                          Com.Mohammed Musa,from the family of late Alhaji Musa ishiaku of mayo-ndaga sardauna local government taraba
                                          state. Brief Biography of the founder of association of youth for development ethics and cultural orientation
                                          in Nigeria (AYDECON) and the acting National secretary/treasurer, he was born on 25th September 1987 in 
                                          Nguroje, sardauna local government of taraba state, he started his primary school education where he 
                                          attended central primary school between 1993-1999 he proceeded to government day junior secondary school 
                                          Abong between 2000-2003.he when ahead to attend government secondary school uke between 2003-2006.he further 
                                          his Education where he attended federal polytechnic nasarawa, where he obtained National Diploma on Estate 
                                          management and Valuation between 2009-2013.he attended temmy computer in Masaka where he obtained Diploma on 
                                          computer from Feb,2014-Oct,2014 currently on his HND program.  Work experience:- he worked with private 
                                          organisations called transhope travel agency as marketing manager between 2007-2009. He also worked with 
                                          A.A.Bodejo investment Ltd under Maliya table water as General manager between 2015-2017. Currently the 
                                          General manager A.A.Bodejo investment Ltd and Personal assistant to the  CEO.
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
</html><?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

