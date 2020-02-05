<?php
include_once("../database/core/config.php");
if (isset($_POST['submit'])) {

    $p_name = mysqli_real_escape_string($con, $_POST['p_name']);
    $p_description = mysqli_real_escape_string($con, $_POST['p_description']);
    $p_type = mysqli_real_escape_string($con, $_POST['p_type']);
    $p_quantity = mysqli_real_escape_string($con, $_POST['p_quantity']);
    $sql = "INSERT INTO `product`(`p_name`, `p_description`, `p_type`, `p_quantity`) VALUES ('$p_name','$p_description','$p_type',$p_quantity) ";
    $result = mysqli_query($con, $sql);
}
mysqli_close($con);


?>
<html>

<head>
    <link rel="shortcut icon" href="../img/drop-of-water-1.png">
    <title>ShetBazar</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="../vendors/Animate/animate.css">
</head>

<body>
<!--FORM-->
<section id="login" class="form-section">
    <form class="form-cover wow animated fadeIn" method="post">
        <div class="container">
            <div class="form-heading">
                <h3 class="text-heading">Fill up the form!!</h3>
                <div class="form-heading-underline"></div>
            </div>
            <!--.form-heading-->

            <div class="form-fields">
                    <div class="form-style">


                        <!-PRODUCT NAME-->
                        <div class="text-style">
                            <label class="label-style">Product Name:</label>
                            <div class="entry-style">
                                <input type="text" placeholder="product name" name="p_name" class="form-control"
                                       required>
                            </div>
                            <!--.entry-style-->
                        </div>
                        <!--.text-style-->

                        <!--PRODUCT DESCRIPTION-->
                        <div class="text-style">
                            <label class="label-style">Product Description:</label>
                            <div class="entry-style">
                                <input type="text" placeholder="description" name="p_description" class="form-control">
                            </div>
                            <!--.entry-style-->
                        </div>
                        <!--.text-style-->

                        <!--STATE-->
                        <div state-style>
                            <label class="label-style">Product Type:</label>
                            <select class="option-style" name="p_type" required>
                                <option selected>--Select--</option>
                                <option>Kharif</option>
                                <option>Rabi</option>
                            </select>
                        </div>
                        <!--.state-style-->

                        <!--QUANTITY-->
                        <div class="text-style">
                            <label class="label-style">Quantity:</label>
                            <div class="entry-style">
                                <input type="number" name="p_quantity" min="50" max="200" step="5" class="form-control">
                            </div>
                            <!--.entry-style-->
                        </div>
                        <!--.text-style-->


                        <!--.SUBMIT BUTTON-->
                        <input type="submit" value="Submit" name="submit" class="btn-general btn-green">
                    </div>
                    <!--.btn-style-->
            </div>
            <!--.form-style-->
    </form>
    </div>

    <!--.form-fields-->

    </div>
    <!--.container-->
    </div>
    <!--.form-cover-->
</section>
<!--END OF PRODUCT FORM SECTION-->


<!--CORE JS-->
<script src="../vendors/jquery/jquery-3.3.1.min.js"></script>
<script src="../vendors/wow/wow.min.js"></script>
<!--END OF CORE JS-->

<!--CUSTOM JS-->
<script src="../js/script.js"></script>
<!--END OF CUSTOM JS-->
</body>

</html>
