<?php
session_start();
include 'includes/connection.php';
include 'includes/functions.php';


$username = isset($_SESSION["username"]) ? $_SESSION["username"] : "";

if (isset($_POST["submit"])) {
    // $contactUsid = uniqueCode($conn);

    $email = secure($_POST["email"]);
    $password = md5($_POST["pwd"]);
    $confirmPass = md5($_POST["confirmPwd"]);

    $email_check = mysqli_fetch_array(mysqli_query($conn, "select * from member where email ='$username'"));
    $mail = $email_check['email'];
    
    if ($email == $username) {
        if ($confirmPass == $password) {
            $update_password = mysqli_query($conn, "update login set  password='$password' where username ='$username'") or die(mysqli_error($conn));

            if ($update_password) {
                echo "<script>alert('Password change Successfully')</script>";
                echo "<script>window.location.href='index.php'</script>";
            } else {
                echo "<script>alert('There is an error try after some time')</script>";
                echo mysqli_error($conn);
            }
        } else {
            echo "<script>alert('Password and ConfirmPassword does not match')</script>";
            echo mysqli_error($conn);
        }
    } else {
        echo "<script>alert('Incorrect Email')</script>";
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
        <style>
            .completReg{
                width: 40%;
                min-height: 400px;
                border: 1px solid #ccc;
                margin: 0px auto;
                padding: 20px;
            }
            .sec1{
                width: 100%;
                height: 200px;
                display: inline-flex;
                justify-content: space-between;
            }
            .sec2{
                width: 100%;
                min-height: 200px;
                display: inline-flex;
                justify-content: space-between;

            }
            .uploadPic{
                width: 150px;
                height: 200px;
                border: 1px solid #ccc;
                margin-right: 7px;
            }
            .upperform{
                width: 80%;
                height: 200px;
                padding-top: 35px;

            }
            .left-side-form{
                width: 50%;
                float:left !important;
                position: relative;
            }
            .right-side-form{
                width: 100%;

                position: relative;
            }
            form input,select{
                width: 100%;
                border: 1px solid #ccc;
                height: 40px;
                margin-bottom: 17px;
                outline: none;
                padding-left: 5px;
            }
            .submitBtn{
                background-color: #2e8b57;
                color:white;
            }
        </style>
    </head>

    <body>


        <!-- header -->
        <?php
        include 'includes/header.php';
        ?>
        <!-- //header -->

        <!-- inner banner -->
        <!-- inner banner -->
        <div class="inner_banner_blog layer" id="home">
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
                <li class="breadcrumb-item active" aria-current="page">Change password</li>
            </ol>
        </nav>
        <!-- //breadcrumbs -->
        <!-- //breadcrumbs -->

        <!-- error banner -->
        <section class="courses py-5">

            <div class="completReg">
                <form action="" method="post" enctype="multipart/form-data" name="myform">
                    <h4 class="heading text-capitalize mb-lg-5 mb-4" style="text-align: center; color: #2e8b57;">Change password</h4>


                    <div class="sec2">

                        <div class="right-side-form">
                            <label>Email:</label><br>
                            <div class="form-left-to-w3l">
                                <input type="email"  name="email" placeholder="" required="" value="">
                                <div class="clear"></div>
                            </div>
                            <label>New Password:</label><br>
                            <div class="form-left-to-w3l">
                                <input type="password"  name="pwd" placeholder="" required="" value="">
                                <div class="clear"></div>
                            </div>
                            <label>Confirm New Password:</label><br>
                            <div>
                                <input type="password" name="confirmPwd" placeholder="" required="" value="">
                            </div>
                            <div>
                                <input type="submit" name="submit" class="submitBtn" required="" value="Change Password">
                            </div>
                        </div>
                    </div>

                </form>
            </div>









        </section>
        <!-- // error banner -->

        <!-- footer -->	
        <script type="text/javascript">

            var Fname = document.forms ["myform"]["fname"];
            var Oname = document.forms ["myform"]["oname"];
            var DOB = document.forms ["myform"]["dob"];
            var genDer = document.forms ["myform"]["gender"];
            var Phone = document.forms ["myform"]["phone"];
            var Passport = document.forms ["myform"]["passport"];
            var Email = document.forms ["myform"]["email"];
            var Qualification = document.forms ["myform"]["qualification"];
            var State = document.forms ["myform"]["state"];
            var Lga = document.forms ["myform"]["lga"];

            // make reference to span ID
            var spanFirstName = document.getElementById("spanFname");
            var spanOtherName = document.getElementById('spanOname');
            var spanDOB = document.getElementById('spanDob');
            var spanGender = document.getElementById('spanGender');
            var spanPhone = document.getElementById('spanPhone');
            var spanPassport = document.getElementById('spanPassport');
            var spanMail = document.getElementById('spanEmail');
            var spanQualification = document.getElementById('spanQualification');
            var spanState = document.getElementById('spanState');
            var spanLga = document.getElementById('spanLga');
            var spanSubmitBtn = document.getElementById('spanSubmitBtn')

            //Adding EventListener
            Fname.addEventListener("blur", nameVerify, true);
            Oname.addEventListener("blur", onameVerify, true);
            DOB.addEventListener("blur", dobVerify, true);
            genDer.addEventListener("blur", genderVerify, true);
            Phone.addEventListener("blur", phoneVerify, true);
            Passport.addEventListener("blur", passportVerify, true);
            Email.addEventListener("blur", emailVerify, true);
            Qualification.addEventListener("blur", qualVerify, true);
            State.addEventListener("blur", stateVerify, true);
            Lga.addEventListener("blur", lgaVerify, true);

            /*   function isEmpty(property){
             return (property === "" || property === null || property == "undefined")
             } */

            function validateForm() {

                if (Fname.value == "" || Fname == null) {
                    Fname.style.border = "1px solid red";
                    spanFirstName.textContent = "Firstname is required";
                    Fname.focus();
                    return false;
                }
                if (Oname.value == "") {
                    Oname.style.border = "1px solid red";
                    spanOtherName.textContent = "Othername is required";
                    Oname.focus();
                    return false;
                }
                if (DOB.value == "") {
                    DOB.style.border = "1px solid red";
                    spanDOB.textContent = "DOB is required";
                    DOB.focus();
                    return false;
                }
                if (genDer.value == "") {
                    genDer.style.border = "1px solid red";
                    spanGender.textContent = "Gender is required";
                    genDer.focus();
                    return false;
                }
                if (Phone.value == "") {
                    Phone.style.border = "1px solid red";
                    spanPhone.textContent = "Phone is required";
                    Phone.focus();
                    return false;
                }
                if (Passport.value == "") {
                    Passport.style.border = "1px solid red";
                    spanPhone.textContent = "Phone is required";
                    Passport.focus();
                    return false;
                }
                if (Email.value == "") {
                    Email.style.border = "1px solid red";
                    spanMail.textContent = "Email is required";
                    Email.focus();
                    return false;
                }
                if (Qualification.value == "") {
                    Qualification.style.border = "1px solid red";
                    spanQualification.textContent = "Qualification is required";
                    Qualification.focus();
                    return false;
                }
                if (State.value == "") {
                    State.style.border = "1px solid red";
                    spanState.textContent = "State is required";
                    State.focus();
                    return false;
                }
                if (Lga.value == "") {
                    Lga.style.border = "1px solid red";
                    spanLga.textContent = "LGA is required";
                    Lga.focus();
                    return false;
                }


            }

            function nameVerify() {
                if (Fname.value != "") {
                    Fname.style.border = "1px solid #5e6e66";
                    spanFirstName.innerHTML = "";
                    return true;
                }
            }

            function onameVerify() {
                if (Oname.value != "") {
                    Oname.style.border = "1px solid #5e6e66";
                    spanOtherName.innerHTML = "";
                    return true;
                }
            }
            function dobVerify() {
                if (DOB.value != "") {
                    DOB.style.border = "1px solid #5e6e66";
                    spanDOB.innerHTML = "";
                    return true;
                }
            }
            function genderVerify() {
                if (genDer.value != "") {
                    genDer.style.border = "1px solid #5e6e66";
                    spanGender.innerHTML = "";
                    return true;
                }
            }
            function phoneVerify() {
                if (Phone.value != "") {
                    Phone.style.border = "1px solid #5e6e66";
                    spanPhone.innerHTML = "";
                    return true;
                }
            }
            function passportVerify() {
                if (Passport.value != "") {
                    Passport.style.border = "1px solid #5e6e66";
                    spanPassport.innerHTML = "";
                    return true;
                }
            }
            function emailVerify() {
                if (Email.value != "") {
                    Email.style.border = "1px solid #5e6e66";
                    spanMail.innerHTML = "";
                    return true;
                }
            }
            function qualVerify() {
                if (Qualification.value != "") {
                    Qualification.style.border = "1px solid #5e6e66";
                    spanQualification.innerHTML = "";
                    return true;
                }
            }
            function stateVerify() {
                if (State.value != "") {
                    State.style.border = "1px solid #5e6e66";
                    spanState.innerHTML = "";
                    return true;
                }
            }
            function lgaVerify() {
                if (Lga.value != "") {
                    Lga.style.border = "1px solid #5e6e66";
                    spanLga.innerHTML = "";
                    return true;
                }
            }





        </script>

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
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();
                    $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
                });
            });
        </script>
        <!-- here stars scrolling icon -->
        <script type="text/javascript">
            $(document).ready(function () {
                /*
                 var defaults = {
                 containerID: 'toTop', // fading element id
                 containerHoverID: 'toTopHover', // fading element hover id
                 scrollSpeed: 1200,
                 easingType: 'linear' 
                 };
                 */

                $().UItoTop({easingType: 'easeOutQuart'});

            });
        </script>
        <!-- //here ends scrolling icon -->
        <!-- start-smoth-scrolling -->

    </body>
</html>