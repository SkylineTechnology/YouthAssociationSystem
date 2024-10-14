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
<title>Cultural Orientation | <?php echo $sitename; ?></title>
	
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
                    CULTURAL ORIENTATION
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
            <li class="breadcrumb-item active" aria-current="page"  style="color: #2e8b57">Cultural Orientation</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->

 <!-- error banner -->
    <div class="about py-5">
        <div class="container py-sm-3">
            <div class="d-flex agileinfo-error  flex-column">
                <div class="about-grids">
                    <p class="mb-3" style="text-align: justify;"> The reality show
                        is all about reviving our cultural heritage. We are a team 
                        of young Nigerians who see the need to harness our cultural
                        heritage that is almost going extinct due to exposure of 
                        the youths of our generation to Western culture and we decided 
                        to come together to organise a reality show that has to reflect 
                        our culture and tradition. To showcase those norms that distinguish 
                        Nigeria and the entire African continent from the rest of the world.
                         IT is no longer news that the younger generation of Africans
                         are losing grip of their culture to alien way of life due
                         to the effect of globalisation or what African communication
                         scholars may describe as media imperialism of the Western
                         powers on third world nations.</p>

                    
                    <p class="mb-3" style="text-align: justify;">
                        However, what constitute
                        news as far as culture is concern in Nigeria are pockets of effort
                        being made by the government, critical stakeholders in the cultural
                        sector and custom enthusiast to revive the dying cultural 
                        values of Africans. In AYDECON we engage in reviving the
                        culture norms in our societies and building our youths
                        towards cultural orientation, to better appreciate the
                        benefit of culture and cultural values to any giving 
                        society, it is important for AYDECON to attempt a definition
                        of the terms or concept ‘culture’ before delving into its
                        imperatives.In the words of Gustav Klamn, culture can best
                        be definedas “The customs, information and skill, domestic 
                        and public life in peace manifest in the transition of past 
                        experience to the new generation.”To the Polish-American 
                        educationist and anthropologist, Prof. Bronislaw Malinowski,
                        “Culture is a vast apparatus, partly material and partly 
                        human, by which humansocieties are organised into permanent
                        and recognisable groupings.”
                        
                    </p>
                    
                    <p class="mb-3" style="text-align: justify;"> 
                        According to Vincenso Cappalleti as captured in UNESCO
                        publication on cultural policy in Italy in 1971, culture
                        is seen as “The awareness possessed by human community of
                        its own historical evolution by reference of which it tends
                        to assert continuity of its own being, and to ensure its 
                        development.”To Hunter and Whitten, “Culture is the patterned 
                        behaviour learned by each individual from the day of birth
                        as he or she is educated (socialised and acculturated) by
                        parents and peers to become, and remain a member of the
                        particular group into which he or she was born or joined.”
                        While the cultural policy for Nigeria 1988, defines culture 
                        as “The totality of the way life evolved by a people in
                        their attempts to meet the challenges of living in their 
                        environment, which gives order and meaning to their social,
                        political, economic, aesthetic and religious norms and 
                        modes of organisation thus distinguishing a people from 
                        their neighbours.”“Nigeria as a nation is blessed with 
                        diverse cultures, traditions, festivals, talents,
                        historical and beautiful tourism sites. These endowments, 
                        when properly harnessed, will reposition and preserve Nigeria’s
                        rich cultural heritage and uniqueness thereby strengthening 
                        the bond of unity amongst us, as well as creating employment
                        and wealth for our people, thus reducing poverty in the country. 
                        The show is targeted at millions of young and vibrant Nigerians
                        who are proud of their heritage and want to showcase same to the world,
                        knowing that they will be fully appreciated by a global audience.
                        They will also be lured by the opportunity of winning the 
                        star prize and chance of global celebrity status, fame and 
                        fortune. This event intends to take the deviant child out 
                        of the street by providing him with a future.”

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


