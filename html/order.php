<?php
include_once ("../database/core/config.php");
if(isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phoneno = mysqli_real_escape_string($con, $_POST['phoneno']);
    $quantity = mysqli_real_escape_string($con, $_POST['quantity']);
    $brief_req= mysqli_real_escape_string($con, $_POST['brief_req']);
    $sql = "insert into or (name, email, phoneno, quantity, brief_req) values('$name','$email','$phoneno','$quantity','$brief_req')";
    if ($result = mysqli_query($con, $sql)) {
        echo("<script LANGUAGE='javascript'>
       window.alert('sucessfully registerd');
       window.location.href='profile.php';
       </script>");
    }
    else {
        echo("<script LANGUAGE='javascript'>
       window.alert('oooops something is wrong!!!!!!!!!');
       window.location.href='order.php';
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

