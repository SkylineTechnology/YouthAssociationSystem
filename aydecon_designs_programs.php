
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
<title>Aydecon Designs Programs | <?php echo $sitename; ?></title>
	
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
                  
                    AYDECON DESIGNS PROGRAMS AND BUILDS PARTNERSHIPS

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
                AYDECON Designs Programs And Builds Partnership That Connect Marginalized
                Young People To Opportunity
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
                      Transforming lives, together our mission for 5 years requires 
                      experience, local insight, and trusted partnerships. 
                      AYDECON initiatives can feature social inclusion analyses, 
                      including on gender, to understand how young people are participating 
                      in society. All implementing partners, sub-grantees, and sub-contractors
                      maintain and enforce or work with us to create and implement—safety, 
                      child protection, anti-harassment and anti-discrimination,
                      human trafficking, and code of ethics policies.
                    </p>

                    
                    <p class="mb-3" style="text-align: justify;">
                        AYDECON work at three levels to advance social inclusion 
                        in our work with youth globally:
                        Equal access means all youth have the same opportunity 
                        to participate in AYDECON projects and are protected against
                        unintentional negative impacts. Informed by social inclusion
                        analyses, we design projects to amplify opportunities and
                        mitigate risks. Additional supports youth receive can include
                        stipends to offset lost income; trainings at multiple times 
                        of day, including outside typical work hours; and childcare
                        for participating young parents.

                       </p>
                   
                                           
                    <p class="mb-3" style="text-align: justify;"> 

                        Equal outcomes ensure that all youth participants see similar
                        results, such as income gains or employment placement rates.
                        Projects designed for equal outcomes direct resources to youth
                      who may need additional support in order to achieve an outcome 
                      similar to another participant.Transformed environments 
                      feature improved equity and inclusion in the broader context. 
                      Local team members and partners, working with AYDECON's, 
                      determine the degree to which projects can challenge existing
                      laws, rules, regulations, norms, customs, beliefs, and practices. 
                      We know that opportunities for transformation present themselves
                      differently in different contexts. Inclusion efforts vary across 
                      contexts, but ultimately we are committed to doing no harm and 
                      ensuring all individuals are treated with dignity and respect. 

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

