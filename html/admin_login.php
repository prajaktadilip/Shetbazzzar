<?php
include_once ("../database/core/config.php");
if(isset($_POST['submit'])) {
    $first_name = mysqli_real_escape_string($con, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($con, $_POST['last_name']);
    $Email_id = mysqli_real_escape_string($con, $_POST['Email_id']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $conform_password = mysqli_real_escape_string($con, $_POST['conform_password']);
    $sql = "insert into admin(first_name, last_name, Email_id, password, conform_password) values('$first_name','$last_name','$Email_id','$password',$conform_password)";
    if ($result = mysqli_query($con, $sql)) {
        echo("<script LANGUAGE='javascript'>
       window.alert('sucessfully registerd');
       window.location.href='login-admin.php';
       </script>");
    } else {
        echo("<script LANGUAGE='javascript'>
       window.alert('oooops something is wrong!!!!!!!!!');
       window.location.href='register.php';
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
