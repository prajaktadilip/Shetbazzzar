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
    $username= mysqli_real_escape_string($con,$_POST['username']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($con,$sql) or die( mysqli_error($con));
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   // $active = $row['active'];
    $count = mysqli_num_rows($result);
    if($count == 1) {
        $_SESSION['login_user'] = $username;

        header("location:index1.php");
        echo "hi $username ";
    }
    else {
        echo ("<script LANGUAGE='javascript'>
       window.alert('enterd username nd password are invalid');
       window.location.href='login.php';
       </script>");

    }
}
?>


