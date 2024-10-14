
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
<title>Aydecon Grounding Principle | <?php echo $sitename; ?></title>
	
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
          AYDECON's GROUNDING PRINCIPLES DRIVE
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
            <li class="breadcrumb-item active" aria-current="page" style="color: #2e8b57">
                AYDECON's Grounding Principles Drive Change In Social Inclusion
            </li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!-- error banner -->
    <div class="about py-5">
        <div class="container py-sm-3">
            <div class="d-flex agileinfo-error  flex-column">
                <div class="about-grids">
                    <p class="mb-3" style="text-align: justify;"> 
                        When drafting our 2022 strategy, we identified 6 grounding 
                        principles that work together to allow us to drive change
                        for young people, communities, and partners. Here's how 
                        these principles tie into our Gender and Social Inclusion policy:
                        Positive Youth Development (PYD): In everything we do,
                        we engage youth as partners along with their families,
                        communities, and/or governments. PYD approaches build skills, 
                        assets, and competencies; foster healthy relationships; 
                        strengthen the environment around young people; and 
                        transform systems. AYDECON believes that achieving 
                        lost-lasting social inclusion outcomes requires addressing 
                        all four of those domains.

                    </p>

                    
                    <p class="mb-3" style="text-align: justify;">
                        Evidence-Based Learning: AYDECON is committed to using 
                        evidence and knowledge to inform programs and achieve 
                        results that improve the lives of all youth. Institutional
                        data collection and disaggregation requirements allow us
                        to monitor and evaluate the effectiveness of our programs
                        for distinct populations.
                        Social Inclusion: We push to address the needs of all youth
                        throughout our initiatives. Our Gender and Social Inclusion 
                        policy operationalizes this third grounding principle.
                        Local Ownership: While well versed in global best 
                        practices, AYDECON doesn't presume that an approach 
                        that has succeeded in one place will work in another. 
                        Our Gender and Social Inclusion policy prioritizes the
                        expertise of local partners and local AYDECON staff in 
                        contextualizing GESI to make sure AYDECON programs do no
                        harm in the pursuit of more equitable outcomes.

                       </p>
                   
                                           
                    <p class="mb-3" style="text-align: justify;"> 

                        Partnership: Working in collaboration with corporations,
                        employers, governments, young people, and other stakeholders
                        allows AYDECON to serve as a catalyst and convener and creates 
                        the best solutions to specific challenges. The implementation
                        of this GESI policy happens with and through global and local
                        partners who are best equipped to identify and address barriers 
                        in context.
                        Ecosystems: AYDECON creates greater systemic change
                        impacting youth at scale and enables young people to
                        influence the systems around them. We recognize that 
                        changes in social inclusion require addressing knowledge, 
                        attitudes, and behaviors at individual and systemic levels.

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

