<?php
include_once ("../database/core/config.php");
if(isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phoneno = mysqli_real_escape_string($con, $_POST['phoneno']);
    $pname=mysqli_real_escape_string($con,$_POST['pname']);
    $quantity = mysqli_real_escape_string($con, $_POST['quantity']);
    $brief_req= mysqli_real_escape_string($con, $_POST['brief_req']);
    $sql = "INSERT INTO `order`(`name`, `email`, `phoneno`, `quantity`, `pname`,`brief_req`) VALUES ('$name','$email','$phoneno','$quantity','$pname','$brief_req')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo("<script LANGUAGE='javascript'>
       window.alert('sucessfully registerd');
       window.location.href='profile.php';
       </script>");
    }
    else {
        echo("<script LANGUAGE='javascript'>
       window.alert('oooops something is wrong!!!!!!!!!');
//       window.location.href='order.php';
       </script>");
    }
}
// close connection
mysqli_close($con);
//$stmt=$con->prepare($sql);
//$stmt->bind_param("ssssssssss", $name, $username, $password,$phone_no,$mail_id,$street,$city,$state,$district,$taluka);
//$stmt->execute();
//echo "New records created successfully";
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
    <div class="form-cover wow animated fadeIn">
        <div class="container">
            <div class="form-heading">
                <h3 class="text-heading">Order your product!!</h3>
                <div class="form-heading-underline"></div>
            </div>
            <!--.form-heading-->
            <div class="form-fields">
                <form action="" method="post">
                    <div class="form-style">
                    <!--FIRST NAME-->
                    <div class="text-style">
                        <label class="label-style">Name:</label>
                        <div class="entry-style">
                            <input type="text" placeholder="Your name" name="name" class="form-control" required>
                        </div>
                        <!--.entry-style-->
                    </div>
                    <!--.text-style-->
                    <!--EMAIL-->
                    <div class="text-style">
                        <label class="label-style">Email:</label>
                        <div class="entry-style">
                            <input type="email" placeholder="example@email.com" name="email"class="form-control">
                        </div>
                        <!--.entry-style-->
                    </div>
                    <!--.text-style-->

                    <!--PHONE NUMBER-->
                    <div class="text-style">
                        <label class="label-style">Phone No.:</label>
                        <div class="entry-style">
                            <input type="text" placeholder="your phone no."  name="phoneno"class="form-control" required>
                        </div>
                        <!--.entry-style-->
                    </div>
                    <!--.text-style-->

                    <!--DELIVERY-->
                    <div class="text-style">
                        <label class="label-style">Delivery:</label>
                        <div class="entry-style">
                            <input type="text" placeholder="delivery through" class="form-control" required>
                        </div>
                        <!--.entry-style-->
                    </div>

                    <!--.text-style-->
                        <div class="text-style">
                            <label class="label-style">pname:</label>
                            <div class="entry-style">
                                <input type="text" name="pname" placeholder="product name" class="form-control">
                            </div>
                            <!--.entry-style-->
                        </div>

                    <!--QUANTITY-->
                    <div class="text-style">
                        <label class="label-style">Quantity:</label>
                        <div class="entry-style">
                            <input type="number" min="50" max="200" step="5" name="quantity" class="form-control">
                        </div>
                        <!--.entry-style-->
                    </div>
                    <!--.text-style-->

                    <!--REQUIREMENT-->
                    <div class="text-style">
                        <label class="label-style">Brief Requirement:</label>
                        <div class="entry-style">
                            <textarea n rows="10" name="brief_req" class="form-control"></textarea>
                        </div>
                        <!--.entry-style-->
                    </div>
                    <!--.text-style-->
                    <div class="btn-style">
                        <input type="submit" value="Submit" name="submit" class="btn-general btn-green"><br />
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
<!--END OF FORM-->


<!--CORE JS-->
<script src="../vendors/jquery/jquery-3.3.1.min.js"></script>
<script src="../vendors/wow/wow.min.js"></script>
<!--END OF CORE JS-->

<!--CUSTOM JS-->
<script src="../js/script.js"></script>
<!--END OF CUSTOM JS-->
</body>

</html>
