<?php
include_once("../database/core/config.php");

function processRegistration($name, $username, $password, $confirm_password, $email, $phone_no, $landmark, $role, $district, $city, $state, $street, $taluka)
{
    global $conn;

    if ($password === $confirm_password) {
        $sql = "INSERT INTO user (`name`, `username`, `email`, `password`, `phoneno`, `state`, `city`, `landmark`, `street`, `district`,`taluka`) VALUES ('$name','$username','$email','$password',$phone_no,'$state','$city','$landmark','$street','$district','$taluka')";
        if (mysqli_query($GLOBALS['conn'], $sql)) {
            $insert_id = mysqli_insert_id($GLOBALS['conn']);
            $sql = "SELECT * FROM role WHERE `role` = '$role'";


            if ($rs = mysqli_query($conn, $sql)) {
                $row = mysqli_fetch_assoc($rs);
                $role_id = $row['role_id'];
                $sql = "INSERT INTO user_role (`user_id`, `roll_id`) VALUES ($insert_id, $role_id)";
                die($sql);
                if (mysqli_query($conn, $sql)) {
                    echo "REGISTERED SUCCESSFULLY";
                }
                else{
                    echo "SOMETHING WENT WRONG 1";
                }
            }
        }
        else {
            echo "Not inserted";
            die($sql);
        }
    }
}

