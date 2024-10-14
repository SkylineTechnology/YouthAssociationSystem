<?php
session_start();
include 'includes/connection.php';
include 'includes/functions.php';

if (isset($_POST["submit"])) {
    $memberid = uniqueCode($conn);
    $fname = secure($_POST["fname"]);
    $oname = secure($_POST["oname"]);
    $gender = secure($_POST["gender"]);
    $dob = secure($_POST["dob"]);
    $gender = secure($_POST["gender"]);
    $phone = secure($_POST["phone"]);
    $email = secure($_POST["email"]);
    $qualification = secure($_POST["qualification"]);
    $state = secure($_POST["state"]);
    $lga = secure($_POST["lga"]);
    $reg_date = date("Y-m-d H:i:s");
    $role = 'member';

    $chk_email = mysqli_num_rows(mysqli_query($conn, "select * from member where email='$email'"));
    if ($chk_email > 0) {
        echo "<script>alert('This email have already been registered!')</script>";
    } else {
        $reg_member = mysqli_query($conn, "insert into member values ('$memberid','$fname','$oname','','','$phone','$email','','','','$reg_date')");

        if ($reg_member) {
            $_SESSION["mid"] = $memberid;
            $password = md5($email);
           
            if ($reg_member) {
            $_SESSION["username"] = $email;
            $_SESSION["role"] = "member";
             echo "<script>alert('Registration was Successfull!')</script>";
          
            $insert_login = mysqli_query($conn, "insert into login values ('$email','$password','$role','active')");
            echo "<script>window.location.href='completeReg.php'</script>";
        } else {
            echo "<script>alert('Operations Failed, Please Try after some minutes!')</script>";
        }
            
            $chk_email_from_newslatter = mysqli_num_rows(mysqli_query($conn, "select * from newslatter where email='$email'"));
        } else if ($chk_email_from_newslatter) {
            $insert_newslatter = mysqli_query($conn, "insert into newslatter values ('$email')");
        } else {
            echo "<script>alert('Operations Failed, Please Try after some minutes!')</script>";
        }
    }
}
?>
<html lang="en">

    <head>
        <title> <?php echo $sitename; ?></title>
        <!-- Meta tags -->
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Allied Login Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
              />
        <script>
            addEventListener("load", function () {
                setTimeout(hideURLbar, 0);
            }, false);
            function hideURLbar() {
                window.scrollTo(0, 1);
            }
        </script>
        <script src="admin/js/scripts.js"></script>
        <!-- Meta tags -->
        <!-- font-awesome icons -->
        <link href="css2/font-awesome.min.css" rel="stylesheet">
        <!-- //font-awesome icons -->
        <!--stylesheets-->
        <link href="css2/style.css" rel='stylesheet' type='text/css' media="all">
        <!--//style sheet end here-->
        <link href="//fonts2.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
        <link href="//fonts2.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
        <style>
            .span{
                width: 70px;
                height: 20px;
                color: red;

            }
        </style>
    </head>

    <body>
        <h1 class="error"></h1>
        <div class="w3layouts-two-grids">
            <div class="mid-class">
                <div class="txt-left-side" style="background:green;">
                    <h2 style="color:white;"> Register Here </h2>

                    <form action="register.php" method="post" name="myform" >
                        <label class="form-label">Firstname:</label><br>
                        <div class="form-left-to-w3l">
                            <span class="fa fa-envelope-o" aria-hidden="true"></span>
                            <input type="text" id="fname" name="fname" placeholder="" required="">
                            <div class="clear"></div>
                        </div>
                        <span class="span" id="spanFname"></span><br>

                        <label class="form-label">Othername:</label><br>
                        <div class="form-left-to-w3l">
                            <span class="fa fa-envelope-o" aria-hidden="true"></span>
                            <input type="text" id="oname" name="oname" placeholder="" required="">
                            <div class="clear"></div>
                        </div>
                        <span class="span" id="spanOname"></span><br>

                        <label class="form-label">Phone:</label><br>
                        <div class="form-left-to-w3l">
                            <span class="fa fa-envelope-o" aria-hidden="true"></span>
                            <input type="text" id="phone" name="phone" placeholder="" required="">

                            <div class="clear"></div>
                        </div>
                        <span class="span" id="spanPhone"></span><br>

                        <label class="form-label">Email:</label><br>
                        <div class="form-left-to-w3l">
                            <span class="fa fa-envelope-o" aria-hidden="true"></span>
                            <input type="email" id="email" name="email" placeholder="" required="">

                            <div class="clear"></div>
                        </div>
                        <span class="span" id="spanEmail"></span><br>

                        <div class="main-two-w3ls">
                            <div class="left-side-forget">
                                <input type="checkbox" class="checked">
                                <span class="remenber-me">Remember me </span>
                            </div>
                            <div class="right-side-forget">
                                <a href="#" class="for">Forgot password...?</a>
                            </div>
                        </div>
                        <div class="btnn">
                            <button type="submit" onclick="return validateForm()" id="btnRegister"  name="submit">Submit </button>
                        </div>
                        <span class="span" id="spanSubmit"></span><br>

                    </form>
                    <div class="w3layouts_more-buttn">
                        <h3> Have an account..?
                            <a href="login.php"><font color="#dc3545"><b>Login Here</b></font>
                            </a>
                        </h3>
                    </div>

                </div>
                <div class="img-right-side">
                    <h3>Welcome to AYDECOM Registration Form</h3>
                    <p style="color">Association of Youth for Development Ethics and Cultural Orientation in Nigeria</p>
                    <img src="images/aydecon-logo.JPG" class="img-fluid" alt="">
                </div>
            </div>
        </div>

      <!--  <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script> -->
        <script type="text/javascript" src="css/script1.js"></script>
         <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>

        <footer class="copyrigh-wthree">

        </footer>

        <script type="text/javascript">

                                var Fname = document.forms ["myform"]["fname"];
                                var Oname = document.forms ["myform"]["oname"];
                                var DOB = document.forms ["myform"]["dob"];
                                var genDer = document.forms ["myform"]["gender"];
                                var Phone = document.forms ["myform"]["phone"];
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
    </body>

</html>
