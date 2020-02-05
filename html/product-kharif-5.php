<html>
<head>
   <!--META TAGS-->
    <meta charset="utf-8">

    <meta name="description" content="modern responsive website using HTML5, CSS, Bootstrap,js for Shetkari.">

    <meta name="keywords" content="HTML5, CSS, Bootstrap, Responsiveness, js">

    <!--TITLE OF THE WEBSITE-->
    <title>ShetBazar</title>
    
    <!--.Favicon-->
    <link rel="shortcut icon" href="../img/drop-of-water-1.png">
    
    <!--Font used-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
    

    <link rel="stylesheet" href="../vendors/fontawesome/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../vendors/Animate/animate.css">

    <!--CORE STYLING CSS LINK-->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <!--END OF CORE STYLING CSS LINK-->
</head>
<body id="product-page">
    <!--NAVBAR-->
    <nav id="navbar">
        <a href="index.php" class="logo">
            <span class="text-primary"><i class="fa fa-leaf"></i>SHET</span>BAZAR
        </a><!--.logo-->
        <ul>
            <li>
                <a href="./index.php" class="link-underline">Home</a>
                <a href="./product-kharif-3.php" class="link-underline">Product</a>
                <a href="./contact.php" class="link-underline dropdown">Contact Us</a>
            </li>
        </ul>
    </nav><!--#navbar-->
    <!--END OF NAVBAR--> 
    
     <!--SIDE NAVBAR-->
     <div id="side-nav" class="side-nav-bar wow animated fadeIn">
        <a href="./product-kharif-3.php" class="kharif btn-product btn-green">Kharif</a>
        <a href="./product-rabi-3.php" class="rabi btn-product btn-green">Rubi</a>
         <a href="./login.php" class="login btn-product btn-green">Login</a>
    </div>
     <!--END OF SIDE NAVBAR--> 
    
    <!--PRODUCT SECTION-->
    <section id="product" class="product-section">
        <div class="container">
            <div class="product-cover">
                <article class="card wow animated fadeIn">
                    <img src="../img/kharif/cereals/soybean.jpeg" class="crop-image">
                    <div class="category category-kharif">Kharif</div>
                    <h3 class="heading">
                        <a href="" class="title">Soybean</a>
                        <br><br>
                        <a href="./login.php" class="btn-purple">Buy Product</a>
                    </h3>
                    <p class="content">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, maiores eaque eveniet numquam harum qui.
                    </p>
                </article>
                <div class="wow animated fadeIn">
                   <a href="./product-kharif-4.php" class="previous-btn btn-general btn-green"><i class=" fa fa-angle-double-left"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!--END OF PRODUCT SECTION-->
    
    <!--FOOTER SECTION-->
    <footer id="main-footer" class="bg-dark text-center py-1">
        <div class="container">
            <p>Copyright &copy; 2019 <span class="text-primary">ShetBazar</span>, All Rights Reserved.</p>
        </div><!--.container-->
    </footer><!--#main-footer-->
    <!--/END OF FOOTER SECTION-->
    
    <!--CORE JS-->
    <script src="../vendors/jquery/jquery-3.3.1.min.js"></script>
    <script src="../vendors/wow/wow.min.js"></script>
    <!--END OF CORE JS-->
    
    <!--CUSTOM JS-->
    <script src="../js/script.js"></script>
    <!--END OF CUSTOM JS-->
</body>
</html>