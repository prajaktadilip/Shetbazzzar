<html lang="en">
<?php
session_start();
?>
<head>
    <!--META TAGS-->
    <meta charset="utf-8">

    <meta name="description" content="modern responsive website using HTML5, CSS,js for Shetkari.">

    <meta name="keywords" content="HTML5, CSS, Responsiveness, js">

    <!--TITLE OF THE WEBSITE-->
    <title>ShetBazar</title>

    <!--.Favicon-->
    <link rel="shortcut icon" href="../img/drop-of-water-1.png">

    <!--Font used-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">


    <link rel="stylesheet" href="../vendors/fontawesome/font-awesome-4.7.0/css/font-awesome.min.css">

    <!--CORE PLUGIN CSS-->
    <link rel="stylesheet" href="../vendors/OwlCarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../vendors/OwlCarousel/assets/owl.theme.green.min.css">
    <link rel="stylesheet" href="../vendors/Animate/animate.css">
    <!--END OF CORE PLUGIN CSS-->

    <!--CORE STYLING CSS LINKS-->
    <link rel="stylesheet" href="../css/profile-style.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <!--END OF CORE STYLING CSS LINKS-->
</head>
<body>
<!--NAVBAR-->
<nav id="navbar">
    <a href="./index.php" class="logo">
        <span class="text-primary"><i class="fa fa-leaf"></i>SHET</span>BAZAR
    </a><!--.logo-->
    <ul>
        <li>
            <a href="./index.php" class="link-underline">Home</a>
            <a href="./product-kharif.php" class="link-underline">Product</a>
            <a href="./contact.php" class="link-underline dropdown">Contact Us</a>
            <a href="./logout.php" class="link-underline dropdown">Logout</a>
        </li>
    </ul>
</nav><!--#navbar-->
<!--END OF NAVBAR-->

<!--PROFILE SECTION-->
<section id="profile-home" class="profile-home-section">
    <div class="profile-home-cover bg-parallax wow animated fadeIn">
        <div class="profile-home-content-box">
            <div class="profile-home-content-inner-box">
                <div class="container">
                    <div class="profile-user">
                        <div class="profile-logo">
                            <div><i class="fa fa-user-circle-o"></i></div>
                        </div><!--.profile-logo-->
                    </div><!--.profile-user-->
                    <div class="profile-home-heading">
                        <h5 class="text-heading">Your Profile</h5>
                        <div class="content-title-underline"></div>
                        <!--.content-title-underline-->
                    </div><!--.profile-home-heading-->
                    <div class="left-info">
                        <p class="about-info">Name: <?php echo $_SESSION['name'];?></p>
                        <p class="about-info">Username: <?php echo $_SESSION['username'];?></p>
                        <p class="about-info">Email: <?php echo $_SESSION['email'];?></p>
                        <p class="about-info">Role: <?php echo $_SESSION['role'];?></p>
                        <p class="about-info">pname: <?php echo $_SESSION['pname'];?></p>
                    </div><!--.left-info-->
                    <div class="margin-style">
                        <a href="./product-form.php" class="btn-general btn-green">Add Product</a>
                    </div>
                </div><!--.container-->
            </div><!--.profile-home-content-inner-box-->
        </div>
        <!--.profile-home-content-box-->
    </div>
    <!--.profile-home-cover-->
</section>
<!--END OF PROFILE SECTION-->

<!--.CORE SCRIPT-->
<script src="vendors/wow/wow.min.js"></script>
<script src="../vendors/jquery/jquery-3.3.1.min.js"></script>
<script src="../vendors/OwlCarousel/owl.carousel.min.js"></script>
<!--.END OF CORE SCRIPT-->
<!--.CUSTOM SCRIPT-->
<script src="../js/script.js"></script>
<!--.END OF CUSTOM SCRIPT-->
</body>
</html>

