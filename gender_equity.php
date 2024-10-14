
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
<title>Gender Equity | <?php echo $sitename; ?></title>
	
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
include 'includes/header.php';
?>
<!-- //header -->
<!-- inner banner -->
    <div class="inner_banner layer" id="home">
        <div class="container">
            <div class="agileinfo-inner">
                <h2 class="text-center text-white">
          GENDER EQUITY AND SOCIAL INCLUSION
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
            <li class="breadcrumb-item active" aria-current="page" style="color: #2e8b57">Gender Equity And Social Inclusion</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!-- error banner -->
    <div class="about py-5">
        <div class="container py-sm-3">
            <div class="d-flex agileinfo-error  flex-column">
                <div class="about-grids">
                    <p class="mb-3" style="text-align: justify;"> 
                       To support all youth throughout the world in realizing the
                       future they want, AYDECON is committed to advancing social 
                       inclusion. We break down barriers limiting a youth's chances
                       to thrive and work to drive equal access and equal outcomes.
                    </p>

                    
                    <p class="mb-3" style="text-align: justify;">
                        AYDECON takes concrete measures to counteract youth
                        marginalization, because it threatens individuals' 
                        personal agency, economic opportunity, power to make 
                        their voices heard, and ability to participate fully 
                        in society. 
                       </p>
                   
                                           
                    <p class="mb-3" style="text-align: justify;"> 

                        For youth to benefit fully from our interventions,
                        AYDECON programming considers all types of exclusion,
                        including based on gender, race, ethnicity, cultural 
                        orientation, socio-economic status, disability, and religion.
                         We also recognize the intersectionality that exists 
                         for people within many marginalized communities. While
                         we've learned valuable best practices from our three 
                         decades of youth development work, our approach and 
                         initiatives treat all young participants as individuals
                         with specific 
                    </p>

                </div>
            </div>
        </div>
    </div>
    <!-- // error banner -->

<!-- footer -->	


<?php
include"includes/footer.php";
?>
</body>
</html>

