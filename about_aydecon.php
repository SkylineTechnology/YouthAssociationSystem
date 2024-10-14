
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
<title>About AYDECON | <?php echo $sitename; ?></title>
	
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
                  
                        ABOUT AYDECON

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
                  About AYDECON
            </li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!-- error banner -->
    <div class="about py-5">
        <div class="container py-sm-3">
            <div class="d-flex agileinfo-error  flex-column">
                
                <p class="mb-3" style="text-align: justify;"> 
                      AYDECON connects youth with opportunities to transform 
                      their lives. Our holistic, systems-based approach emphasizes
                      life skills in combination with a mix of technical, vocational,
                      cultural orientation and entrepreneurship training. As a result, 
                      youths are prepared to enter the workforce, create their own 
                      opportunities, and be agents of change in their communities. 
                      Together with our partners and global network, we build effective, 
                      sustainable, and scalable initiatives that drive change around four
                      interconnected strategic objectives:

                    </p>

                    
                    <p class="mb-3" style="text-align: justify;">
                      
                          Youth Agency: Youth agency is the desire and ability 
                          of youths to make decisions and drive change in their
                          own lives, in their communities, and in their larger 
                          spheres of influence. To have agency, youths need to 
                          believe in themselves, know how to work effectively with
                          others, and understand the challenges and opportunities
                          in the world around them. At AYDECON, we believe that 
                          teens and young adults who discover and exercise their 
                          agency are problem solvers, not problems to be solved, 
                          and they can ultimately become the architects of their 
                          own future. Find out how we convene and connect youths 
                          and adults to advance youth agency.
                           Economic Opportunity: Youth don’t
                           all receive the same opportunities to 
                           unlock their potential and earn a decent living. 
                       </p>
                       <p class="mb-3" style="text-align: justify;">
                           That’s why AYDECON works to ensure that youth everywhere 
                           can access the education, training, guidance, and connections 
                           required to achieve economic security and independence. 
                           Our initiatives improve skills alignment and equip youth
                           to effectively contribute to a workplace, thrive in 
                           self-employment, or succeed in an entrepreneurial venture. 
                            Systems Change: At AYDECON, we believe for young women
                            and men to experience their own agency, transform their
                            lives, and realize the future they want, the systems 
                            surrounding them must be made more relevant, inclusive,
                            and responsive to their real aspirations, challenges, 
                           and needs. When looking at education systems or labor 
                           markets, this means making positive, incremental changes, 
                           which, taken together, mean significant improvements. 
                           We invest in this time-intensive work because the scale 
                           of the solution must address the scale of the challenge.
                           Learn how AYDECON acts as a convener building consensus,
                           facilitating collaboration, and managing stakeholders 
                           from across sectors.

                       </p>
                

                </div>
            </div>
        </div>
    </div>
    <!-- // error banner -->

<!-- footer -->	


<?php
include "includes/footer.php";
?>
</body>
</html>

