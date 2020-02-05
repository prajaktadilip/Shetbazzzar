<?php
include_once ("../database/core/config.php");
$name_err = $username_err = $password_err = $conform_password_err = $phone_no = $mail_id = $street = $city = $state = $district = $taluka= "";
if($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter a username.";
    } else {
        // Prepare a select statement
        $sql = "SELECT username FROM user WHERE username = ?";

        if ($stmt = mysqli_prepare($con, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $username);

            // Set parameters
            $username = trim($_POST["username"]);

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $username_err = "This username is already taken.";
                } else {
                    $username = trim($_POST["username"]);
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Validate password
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter a password.";
    } elseif (strlen(trim($_POST["password"])) < 6) {
        $password_err = "Password must have atleast 6 characters.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validate confirm password
    if (empty(trim($_POST["confirm_password"]))) {
        $confirm_password_err = "Please confirm password.";
    } else {
        $confirm_password = trim($_POST["confirm_password"]);
        if (empty($password_err) && ($password != $confirm_password)) {
            $conform_password_err = "Password did not match.";
        }
    }
}
if(isset($_POST['submit']))
{
    $role=mysqli_real_escape_string($con,$_POST['role']);
    $name = mysqli_real_escape_string($con ,$_POST['name']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password= mysqli_real_escape_string($con, $_POST['password']);
    $phoneno= mysqli_real_escape_string($con, $_POST['phoneno']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $street= mysqli_real_escape_string($con, $_POST['street']);
    $city= mysqli_real_escape_string($con, $_POST['city']);
    $state = mysqli_real_escape_string($con, $_POST['state']);
    $landmark=mysqli_real_escape_string($con,$_POST['landmark']);
    $district = mysqli_real_escape_string($con, $_POST['district']);
    $taluka = mysqli_real_escape_string($con, $_POST['taluka']);
}
$sql ="INSERT INTO user(role,name, username, password, phoneno, email, street, city,landmark, state, district, taluka) values('$role','$name', '$username', '$password','$phoneno','$email','$street','$city','$landmark','$state','$district','$taluka')";
//    die($sql);
if($result=mysqli_query($con, $sql)) {
    echo ("<script LANGUAGE='javascript'>
       window.alert('sucessfully registerd');
       window.location.href='login.php';
       </script>");
}
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
// close connection
mysqli_close($con);
//$stmt=$con->prepare($sql);
//$stmt->bind_param("ssssssssss", $name, $username, $password,$phone_no,$mail_id,$street,$city,$state,$district,$taluka);
//$stmt->execute();
//echo "New records created successfully";
?>