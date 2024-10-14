<?php
session_start();
include 'includes/connection.php';
include 'includes/functions.php';
if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = md5($_POST["password"]);

    $get_rc = mysqli_query($conn, "select * from login where username='$email' and password='$password'");
    $num_rows = mysqli_num_rows($get_rc);
    if ($num_rows > 0) {
        $row = mysqli_fetch_array($get_rc);
        $_SESSION["username"] = $row["username"];
        $_SESSION["role"] = $row["role"];
      
        header("location:index.php");
        
    } else {
        echo "<script>alert('Incorrect username or password, please check and try again.');</script>";
    }
}
?>
<html lang="en">

<head>
    <title><?php echo $sitename;?></title>
    <!-- Meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Allied Login Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
    />
    <script>
        addEventListener("load", function () { setTimeout(hideURLbar, 0); }, false); function hideURLbar() { window.scrollTo(0, 1); }
    </script>
    <!-- Meta tags -->
    <!-- font-awesome icons -->
    <link href="css2/font-awesome.min.css" rel="stylesheet">
    <!-- //fonfonts2.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">t-awesome icons -->
    <!--stylesheets-->
    <link href="css2/style.css" rel='stylesheet' type='text/css' media="all">
    <!--//style sheet end here-->
    <link href="//fonts2.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
    <link href="//fonts2.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
</head>

<body>
    <h1 class="error">AYDECON Login Form</h1>
    <div class="w3layouts-two-grids">
        <div class="mid-class">
            <div class="txt-left-side">
                <h2 style="color: white;"> Login Here </h2>
                
                <form action="login.php" method="post">
                    <div class="form-left-to-w3l">
                        <span class="fa fa-envelope-o" aria-hidden="true"></span>
                        <input type="email" name="email" placeholder="Email" required="">

                        <div class="clear"></div>
                    </div>
                    <div class="form-left-to-w3l ">

                        <span class="fa fa-lock" aria-hidden="true"></span>
                        <input type="password" name="password" placeholder="Password" required="">
                        <div class="clear"></div>
                    </div>
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
                        <button type="submit" name="login">Login </button>
                    </div>
                </form>
                <div class="w3layouts_more-buttn">
                    <h3>Don't Have an account..?
                        <a href="register.php"><font color="#dc3545"><b>Register Here</b></font>
                        </a>
                    </h3>
                </div>

            </div>
            <div class="img-right-side">
                <h3>Welcome To AYDECOM Login Form</h3>
                <p>Association of Youth for Development Ethics and Cultural Orientation in Nigeria</p>
                <img src="images/aydecon-logo.JPG" class="img-fluid" alt="">
            </div>
        </div>
    </div>
    <footer class="copyrigh-wthree">
       
    </footer>
</body>

</html>