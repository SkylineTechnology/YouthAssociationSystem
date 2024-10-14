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
    include 'includes/header2.php';
?>
<!-- //header -->

 <!-- inner banner -->
    <div class="inner_banner layer" id="home">
        <div class="container">
            <div class="agileinfo-inner">
                <h2 class="text-center text-white">
                    Our Programme
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
            <li class="breadcrumb-item active" aria-current="page">Programs</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->


<!-- welcome -->
<section class="courses py-5">
	<div class="container py-sm-3">
		<h3 class="heading text-capitalize mb-lg-5 mb-4" style="text-align: center; color: #2e8b57;"> Our Programme</h3>
		<div class="row course-grids">
			<div class="col-lg-12 col-md-6">
				<div class="card">
				  
				  <div class="card-body">
                                      <h5 class="card-title" style="text-align: center; color: #2e8b57;">
                                          AYDECON DESIGNS PROGRAMS AND BUILDS PARTNERSHIPS THAT CONNECT MARGINALIZED YOUNG PEOPLE TO OPPORTUNITY.
                                      </h5>
                                      <p class="card-text mb-3"  style="text-align: justify; font-size: 18px !important; color: black;">
                                          Transforming lives, together our mission for 5 years requires experience, local insight, 
                                          and trusted partnerships. AYDECON initiatives can feature social inclusion analyses, including on gender, 
                                          to understand how young people are participating in society. All implementing partners, sub-grantees, 
                                          and sub-contractors maintain and enforce or work with us to create and implement—safety, child protection, 
                                          anti-harassment and anti-discrimination, human trafficking, and code of ethics policies.
                                          AYDECON work at three levels to advance social inclusion in our work with youth globally:

                                      </p>
					
				  </div>
				</div>
			</div>
			
                    	<div class="col-lg-4 col-md-6 mt-5">
				<div class="card">
				  <img class="card-img-top" src="images/image3.jpg" alt="Card image cap">
				  <div class="card-body">
					<h5 class="card-title">Transformed environments</h5>
                                        <p class="card-text mb-3" style="text-align: justify; font-size: 14px !important;">
                                            Transformed environments feature improved equity and inclusion in the broader context. 
                                            Local team members and partners, working with AYDECON's, determine the degree to which 
                                            projects can challenge existing laws, rules, regulations, norms, customs, beliefs, and practices.
                                            We know that opportunities for transformation present themselves differently in different contexts. 
                                            Inclusion efforts vary across contexts, but ultimately we are committed to doing no harm and ensuring 
                                            all individuals are treated with dignity and respect.
                                        </p>
					
				  </div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mt-5">
				<div class="card">
				  <img class="card-img-top" src="images/image2.jpg" alt="Card image cap">
				  <div class="card-body">
					<h5 class="card-title">Equal access</h5>
					<p class="card-text mb-3" style="text-align: justify; font-size: 14px !important;">
                                            Equal access means all youth have the same opportunity to participate in AYDECON projects and are 
                                            protected against unintentional negative impacts. Informed by social inclusion analyses, we design 
                                            projects to amplify opportunities and mitigate risks. Additional supports youth receive can include 
                                            stipends to offset lost income; trainings at multiple times of day, including outside typical work 
                                            hours; and childcare for participating young parents.
                                        </p>
					
				  </div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mt-5">
				<div class="card">
				  <img class="card-img-top" src="images/image1.jpg" alt="Card image cap">
				  <div class="card-body">
					<h5 class="card-title">Equal outcomes</h5>
					<p class="card-text mb-3" style="text-align: justify; font-size: 14px !important;">
                                            Equal outcomes ensure that all youth participants see similar results, such as income gains or 
                                            employment placement rates. Projects designed for equal outcomes direct resources to youth who 
                                            may need additional support in order to achieve an outcome similar to another participant.
                                        </p>
					
				  </div>
				</div>
			</div>
		
		</div>
	</div>
</section>

<!-- welcome -->

<!-- /stats -->

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
</html>