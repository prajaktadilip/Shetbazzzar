<?php
include_once ("../database/core/config.php");
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo "Welcome to the member's area, " . $_SESSION['username'] . "!";
} else {
    echo "Please log in first to see this page.";
}

if (isset($_POST['submit']))
{
    echo "user submitted";
}
session_start();
mysqli_select_db($con, "agriculture") or die ("no database");
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form
    $username= mysqli_real_escape_string($con,$_POST['username']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    $sql = "SELECT `user`.username,`user`.name,`user`.email,`user`.role,`assign_order`.`name1`,`assign_order`.`email1`,`assign_order`.`phoneno` ,`assign_order`.`quntity`,`assign_order`.`pname` FROM user inner join assign_order  on `user`.username =assign_order.username AND password = '$password'";
    $result = mysqli_query($con,$sql) or die( mysqli_error($con));
    //$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    // $active = $row['active'];
    $count = mysqli_num_rows($result);
    $rs = mysqli_fetch_assoc($result);
    if($count == 1) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $rs['username'];
        $_SESSION['name'] = $rs['name'];
        $_SESSION['email'] = $rs['email'];
        $_SESSION['role'] = $rs['role'];
        $_SESSION['name1'] = $rs['name1'];
        $_SESSION['email1'] = $rs['email1'];
        $_SESSION['phoneno'] = $rs['phoneno'];
        $_SESSION['pname'] = $rs['pname'];
        $_SESSION['quntity'] = $rs['quntity'];
        header("location:index1.php");
    }
    else {
        echo ("<script LANGUAGE='javascript'>
       window.alert('enterd username nd password are invalid');
       window.location.href='login.php';
       </script>");

    }
}
?>

<html>
<head>
    <link rel="shortcut icon" href="../img/drop-of-water-1.png">
    <title>Log In</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="../vendors/Animate/animate.css">
</head>

<body>

    <section id="login" class="login-section">
<!--        <form action="login1.php" method="post">-->
        <div class="form-cover wow animated fadeIn">
            <div class="container">

                <div class="form-heading">
                    <h3 class="text-heading">Login</h3>
                    <div class="form-heading-underline"></div>
                </div>
                <!--.form-heading-->
<!--                <div class="form-fields">-->
                <form action="" method="post">
                    <div class="text-style ">
                        <label for="" class="label-style">Username/ph no.:</label>
                        <div class="entry-style">
                            <input type="text" placeholder="username/ph no." name="username" class="form-control" >
                            <span class="help-block"></span>
                        </div>
                        <!--.entry-style-->
                    </div>
                    <!--.text-style-->
                    <div class="text-style ">
                        <label for="" class="label-style">Password:</label>
                        <div class="entry-style">
                            <input type="password" placeholder="password" name="password" class="form-control">
                            <span class="help-block"></span>
                        </div>
                        <!--.entry-style-->
                    </div>
                    <!--.text-style-->
                    <div class="btn-style">
                        <!--.LOGIN BUTTON-->
                        <input type="submit" value="login" class="btn-general btn-green">

                        <!--.CREATE ACCOUNT BUTTON-->
                        <a href="regestration.php" class="btn-green btn-general" role="button">Create Account</a>
                    </div>

                    <!--.btn-style-->
<!--                </div>-->
                <!--.form-fields-->
                </form>
            </div>
            <!--.container-->
        </div>

    <!--form-cover-->
<!--        </form>-->
    </section>
    <!--END OF LOGIN-->

    
    <!--CORE JS-->
    <script src="../vendors/jquery/jquery-3.3.1.min.js"></script>
   <script src="../vendors/wow/wow.min.js"></script>
    <!--END OF CORE JS-->
    
    <!--CUSTOM JS-->
    <script src="../js/script.js"></script>
    <!--END OF CUSTOM JS-->
</body>

</html>
