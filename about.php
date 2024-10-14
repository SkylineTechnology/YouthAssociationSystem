<?php
session_start();
include 'includes/connection.php';
include 'includes/functions.php';
if (isset($_POST["nlatter"])) {
    $news_email = $_POST["email"];
    $insert_newslatter = mysqli_query($conn, "insert into newslatter values('','$news_email')");
    if ($insert_newslatter) {
        echo "<script>alert('Email added to newslatter successfully')</script>";
    } else {
        echo "<script>alert('Whoops looks like something went wrong, please try again')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>About Us| <?php echo $sitename; ?></title>
	
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
    <div class="inner_banner layer" id="home">
        <div class="container">
            <div class="agileinfo-inner">
                <h2 class="text-center text-white">
                    About Us
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
            <li class="breadcrumb-item active" aria-current="page"  style="color: #2e8b57">About Us</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->

 <!-- error banner -->
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
					<p class="mt-3">Sed gravida dignissim magna idesn en molestie. Nulla congue, ex init dictu lacinia, Maecenas sem nulla</P>
					<span class="fas fa-graduation-cap"></span>
                                        <a href="education_employment"  style="color: #2e8b57"> <i class="fas fa-angle-double-right"></i> Read More</a>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 mt-md-0 mt-4">
				<div class="image1 mb-4">
				<h4  style="color: #2e8b57">CULTURAL ORIENTATION </h4>
					<p class="mt-3">Sed gravida dignissim magna idesn en molestie. Nulla congue, ex init dictu lacinia, Maecenas sem nulla</P>
					<span class="fab fa-accusoft"></span>
                                        <a href="cultural_orientation"  style="color: #2e8b57"> <i class="fas fa-angle-double-right"></i> Read More</a>
				</div>
				<div class="image1 pt-0">
				<h4  style="color: #2e8b57">GENDER EQUITY AND SOCIAL INCLUSION</h4>
					<p class="mt-3">Sed gravida dignissim magna idesn en molestie. Nulla congue, ex init dictu lacinia, Maecenas sem nulla</P>
					<span class="fab fa-skyatlas"></span>
                                        <a href="gender_equity"  style="color: #2e8b57"> <i class="fas fa-angle-double-right"></i> Read More</a>
				</div>
                            </div>
                    
                    
		</div>
                
                <div class="row welcome-grids">
                    <div class="col-lg-4 mb-lg-0 mb-5" style="float: left !important;">
				<h4  style="color: #2e8b57">AYDECON VALUES INTERNAL PRACTICES AND POLICIES THAT ADVANCE SOCIAL INCLUSION.</h4>
				<p class="mb-3">
                                    AYDECON requires all staff complete basic 
                                    training on gender equity and social inclusion, 
                                    and most team members complete additional specialized 
                                    training based on their role and programmatic focus.
                                    To look at how we as an organization and employer 
                                    ensure an inclusive culture, environment, and 
                                    operating policies and practices, AYDECON has 
                                    created a Diversity and Inclusion Council. 
                                 </p>
                      	
			</div>
                    
			<div class="col-lg-4 col-sm-6">
				<div class="image1 mb-4">
				<h4  style="color: #2e8b57">AYDECON's GROUNDING PRINCIPLES DRIVE CHANGE IN SOCIAL INCLUSION.</h4>
					<p class="mt-3">When drafting our 2022 strategy, 
                                            we identified 6 grounding principles 
                                            that work together to allow us to drive
                                            change for young people, communities,
                                            and partners.
                                        </P>
                                        
                                        <span class="fab fa-accusoft"></span>
                                        <a href="aydecon_grounding_principles"  style="color: #2e8b57"> <i class="fas fa-angle-double-right"></i> Read More</a>
				</div>
				
			</div>
			<div class="col-lg-4 col-sm-6 mt-md-0 mt-4">
				<div class="image1 mb-4">
				<h4  style="color: #2e8b57">AYDECON DESIGNS PROGRAMS AND BUILDS PARTNERSHIPS 
                                    THAT CONNECT MARGINALIZED YOUNG PEOPLE TO OPPORTUNITY.</h4>
					<p class="mt-3">Transforming lives, together
                                            our mission for 5 years requires 
                                            experience, local insight, and trusted 
                                            partnerships.</P>
					<span class="fab fa-accusoft"></span>
                                        <a href="aydecon_designs_programs"  style="color: #2e8b57"> <i class="fas fa-angle-double-right"></i> Read More</a>
				</div>
				
                            </div>
                    
                    
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