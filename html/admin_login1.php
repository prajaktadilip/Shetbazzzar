<?php
include_once ("../database/core/config.php");

if (isset($_POST['submit']))
{
    echo "user submitted";
}
session_start();
mysqli_select_db($con, "agriculture") or die ("no database");
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form
    $Email_id= mysqli_real_escape_string($con,$_POST['Email_id']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    $sql = "SELECT * FROM admin WHERE Email_id = '$Email_id' AND password = '$password'";
    $result = mysqli_query($con,$sql) or die( mysqli_error($con));
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];
    $count = mysqli_num_rows($result);
    if($count == 1) {
        $_SESSION['login'] = $Email_id;
        echo ("<script LANGUAGE='javascript'>
       window.alert('login sucessfully');
       window.location.href='charts.php';
       </script>");
    }
    else {
        echo ("<script LANGUAGE='javascript'>
       window.alert('enterd username nd password are invalid');
       window.location.href='login-admin.php';
       </script>");

    }
}
?>



