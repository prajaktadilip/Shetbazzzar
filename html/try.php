<?php
include_once ("../database/core/config.php");
if(isset($_POST['submit'])) {

    $p_name = mysqli_real_escape_string($con, $_POST['p_name']);
    $p_description = mysqli_real_escape_string($con, $_POST['p_description']);
    $p_type = mysqli_real_escape_string($con, $_POST['p_type']);
    $p_quantity = mysqli_real_escape_string($con, $_POST['p_quantity']);
    $sql = "INSERT INTO `product`(`p_name`, `p_description`, `p_type`, `p_quantity`) VALUES
                    VALUES     ('$p_name','$p_description','$p_type','$p_quantity') ";
    if ($result = mysqli_query($con, $sql)) {
        echo("<script LANGUAGE='javascript'>
       window.alert('sucessfully registerd');
       window.location.href='login-admin.php';
       </script>");
    } else {
        echo("<script LANGUAGE='javascript'>
       window.alert('oooops something is wrong!!!!!!!!!');
       window.location.href='product-form.php';
       </script>");
    }
}
mysqli_close($con);




?>