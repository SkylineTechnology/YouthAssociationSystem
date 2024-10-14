
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
<title>Education Emploment| <?php echo $sitename; ?></title>
	
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
                    
               EDUCATION & EMPLOYMENT
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
            <li class="breadcrumb-item active" aria-current="page" style="color: #2e8b57">Education & Employment</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!-- error banner -->
    <div class="about py-5">
        <div class="container py-sm-3">
            <div class="d-flex agileinfo-error  flex-column">
                <div class="about-grids">
                    <p class="mb-3" style="text-align: justify;"> 
                        We’re addressing the problem of a global skills gap by
                        preparing youth to succeed in the jobs employers are 
                        seeking to the ability of youth to demonstrate the life
                        and work readiness skills needed in the job market
                    </p>

                    
                    <p class="mb-3" style="text-align: justify;">
                        Our Passport to Success life skills curriculum and 
                        vocational and technical training expertise have helped
                        more 368 youths and women become the confident, reliable
                        team players companies want to hire. With a demand-driven
                        approach, we constantly refine how we meet partner and market
                        needs.
                        
                    </p>
                    
                    <p class="mb-3" style="text-align: justify;"> 
                        As we support youth on the path to employment and economic 
                        independence, we're always working to ensure that this kind 
                        of positive change is sustainable after an initiative ends. 
                        We have a decades-long history of focusing on maximizing
                        impact through partnerships and strengthening partners' 
                        capacity to deliver youth-friendly employability services.

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


