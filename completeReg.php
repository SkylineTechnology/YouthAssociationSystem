<?php
session_start();
include 'includes/connection.php';
include 'includes/functions.php';

$username = isset($_SESSION["username"]) ? $_SESSION["username"] : "";

//member records
$rw = mysqli_fetch_array(mysqli_query($conn, "select * from member where email ='$username'"));
$member_id = $rw["member_id"];
$fname = $rw["fname"];
$oname = $rw["oname"];
$gender = $rw["gender"];
$dob = $rw["dob"];
$passport = $rw["passport"];
$phone = $rw["phone"];
$email = $rw["email"];
$qualification = $rw["qualification"];
$state = $rw["state"];
$lga = $rw["lga"];
$reg_date = $rw["reg_date"];




if (isset($_POST["completeReg"])) {
    // $contactUsid = uniqueCode($conn);
    $fname = secure($_POST["fname"]);
    $oname = secure($_POST["oname"]);
    $gender = secure($_POST["gender"]);
    $dob = secure($_POST["dob"]);
    $phone = secure($_POST["phone"]);
    $email = secure($_POST["email"]);
    $qualification = secure($_POST["qualification"]);
    $state = secure($_POST["state"]);
    $lga = secure($_POST["lga"]);
    $reg_date = secure($_POST["reg_date"]);

    $pic_name = isset($_FILES['pic']['name']) ? $_FILES['pic']['name'] : "";

    $img_ext = pathinfo($pic_name, PATHINFO_EXTENSION);

    if ($pic_name != "") {
        $image_url = upload_member_passport($_FILES["pic"]["tmp_name"], $img_ext);
        if ($image_url != "") {
            $update_member = mysqli_query($conn, "update member set  fname='$fname',oname='$oname', passport='$image_url', gender='$gender', phone='$phone', email='$email', qualification='$qualification', state='$state', lga='$lga', dob='$dob', reg_date='$reg_date' where email='$username'") or die(mysqli_error($conn));

            if ($update_member) {
                echo "<script>alert('Profile has Been Sent Successfully update')</script>";
                echo "<script>window.location.href='completeReg.php'</script>";
            } else {
                echo "<script>alert('There is an error try after some time')</script>";
                echo mysqli_error($conn);
            }
        } else {
            echo "<script>alert('Please Upload Passport Image!')</script>";
        }
    } else {
        ?>
        <script>alert('Please Upload Passport Image!');</script>   
        <?php
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
                width: 60%;
                min-height: 500px;
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
                width: 50%;
                float: right !important;
                position: relative;
            }
            form input,select{
                width: 95%;
                border: 1px solid #ccc;
                height: 40px;
                margin-bottom: 17px;
                outline: none;
                padding-left: 5px;
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
                <?php
                if ($reg_date == '') {
                    ?>
                    <li class="breadcrumb-item active" aria-current="page">Complete registration</li>
                    <?php
                } else {
                    ?>
                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                    <?php
                }
                ?>
            </ol>
        </nav>
        <!-- //breadcrumbs -->
        <!-- //breadcrumbs -->

        <!-- error banner -->
        <section class="courses py-5">

            <div class="completReg">
                <form action="" method="post" enctype="multipart/form-data" name="myform">
                    <?php
                    if ($reg_date == '') {
                        ?>
                        <h4 class="heading text-capitalize mb-lg-5 mb-4" style="text-align: center; color: #2e8b57;">Member Registration</h4>
                        <?php
                    } else {
                        ?>
                        <h4 class="heading text-capitalize mb-lg-5 mb-4" style="text-align: center; color: #2e8b57;">Profile</h4>
                        <?php
                    }
                    ?>
                    <div class="sec1">
                        <div class="uploadPic"><img src="passport/<?php echo $passport; ?>"/></div>
                        <div class="upperform">

                            <div class="left-side-form">
                                <label>Firstname:</label><br>
                                <div class="form-left-to-w3l">
                                    <input type="text" id="title" name="fname" placeholder="" required="" value="<?php echo $fname; ?>">
                                    <div class="clear"></div>
                                </div>
                                <label>Othername:</label><br>
                                <div class="form-left-to-w3l">
                                    <input type="text" id="title" name="oname" placeholder="" required="" value="<?php echo $oname; ?>">
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="right-side-form">
                                <label>Passport:</label><br>
                                <div class="form-left-to-w3l">
                                    <input type="file" id="title" name="pic" accept=".jpg, .jpeg, .png, .gif" onchange="preview_image(event);" placeholder="" required="" style="padding-top:4px;">
                                    <div class="clear"></div>
                                </div>
                                <label>Gender:</label><br>
                                <div class="form-left-to-w3l">
                                    <select type="text" name="gender">
                                        <option value="<?php echo $gender; ?>">Select Gender</option>
                                        <option value="Male" <?php
                                        if ($gender == "Male") {
                                            echo "selected='selected'";
                                        } else {
                                            
                                        }
                                        ?> >Male</option>
                                        <option value="Female" <?php
                                        if ($gender == "Female") {
                                            echo "selected='selected'";
                                        } else {
                                            
                                        }
                                        ?>>Female</option> 
                                    </select>
                                    <div class="clear"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="sec2">
                        <div class="left-side-form">

                            <label>Phone:</label><br>
                            <div class="form-left-to-w3l">
                                <input type="text" name="phone" placeholder="" required="" value="<?php echo $phone; ?>">
                                <div class="clear"></div>
                            </div>
                            <label>State of Origin:</label><br>
                            <div class="form-left-to-w3l">
                                <select id="state"  onchange="getlocals(this.value)" name="state" required="">
                                    <option value="">Select State</option>
                                    <?php
                                    $get_state = mysqli_query($conn, "select * from states");
                                    while ($db = mysqli_fetch_array($get_state)) {
                                        ?>
                                        <option value="<?php echo $db["state_id"]; ?>"  <?php
                                        if ($db["state_id"] == $state) {
                                            echo "selected='selected'";
                                        } else {
                                            
                                        }
                                        ?>><?php echo $db["name"]; ?></option>
                                                <?php
                                            }
                                            ?>
                                </select>
                                <div class="clear"></div>
                            </div>
                            <label>Local Goverment Area:</label><br>
                            <?php $get_lga = mysqli_query($conn, "select * from locals where state_id='$state'"); ?>
                            <div class="form-left-to-w3l">
                                <select id="lga" name="lga" required="">
                                    <?php
                                    while ($lg = mysqli_fetch_array($get_lga)) {
                                        ?>
                                        <option value="<?php echo $lg["local_id"]; ?>" <?php
                                        if ($lg["local_id"] == $lga) {
                                            echo "selected='selected'";
                                        } else {
                                            
                                        }
                                        ?>><?php echo $lg["local_name"]; ?></option> 
                                                <?php
                                            }
                                            ?>
                                </select>
                                <div class="clear"></div>
                            </div>
                            <label>Registration Date:</label><br>
                            <div>
                                <input type="text" name="reg_date" placeholder="" required="" value="<?php echo $reg_date; ?>">
                            </div>
                        </div>
                        <div class="right-side-form">
                            <label>Date of Birth:</label><br>
                            <div class="form-left-to-w3l">
                                <input type="date"  name="dob" placeholder="" required="" value="<?php echo $dob; ?>">
                                <div class="clear"></div>
                            </div>
                            <label>Email:</label><br>
                            <div>
                                <input type="email" readonly="" name="email" placeholder="" required="" value="<?php echo $email; ?>">
                            </div>
                            <label>Qualification:</label><br>
                            <div>
                                <input type="text" name="qualification" placeholder="" required="" value="<?php echo $qualification; ?>">
                            </div>
                            <label></label><br>
                            <div>
                                <input type="submit" name="completeReg" onclick="return validateForm()" value="Submit" required="">
                            </div>
                        </div>
                    </div>
                    <script>
                        function getlocals(val) {
                            $.ajax({
                                type: "POST",
                                url: "get_lga.php",
                                data: 'state_id=' + val,
                                success: function (data) {
                                    $("#lga").html(data);
                                }
                            });
                        }
                    </script>
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