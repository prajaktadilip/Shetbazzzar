<?php
include_once ("../database/core/config.php");
if(isset($_POST['submit'])) {

    $p_name = mysqli_real_escape_string($con, $_POST['p_name']);
    $p_description = mysqli_real_escape_string($con, $_POST['p_decription']);
    $p_type = mysqli_real_escape_string($con, $_POST['p_type']);
    $p_quantity = mysqli_real_escape_string($con, $_POST['p_quantity']);
    $target_Folder = "upload/";
    $uid = $_POST['id'];
    $target_Path = $target_Folder . basename($_FILES['uploadimage']['name']);
    $savepath = $target_Path . basename($_FILES['uploadimage']['name']);
    $file_name = $_FILES['uploadimage']['name'];
}

if(file_exists('upload/'.$file_name))
{
    echo "That File Already Exisit";
}
else {

    // Database


    $sql = "INSERT INTO product (p_name,p_description,p_type,p_quantity,id,image, image_name)
                    VALUES     ('$p_name','$p_description','$p_type','$p_quantity','$target_Folder','$file_name','$file_name') ";

    if (!mysqli_query($con, $sql)) {
        die('Error: ' . mysqli_error($con));
    }
    echo "1 record added successfully in the database";
    echo '<br />';
    mysqli_close($con);

    // Move the file into UPLOAD folder

    move_uploaded_file($_FILES['uploadimage']['tmp_name'], $target_Path);

    echo "File Uploaded <br />";
    echo 'File Successfully Uploaded to:&nbsp;' . $target_Path;
    echo '<br />';
    echo 'File Name:&nbsp;' . $_FILES['uploadimage']['name'];
    echo '<br />';
    echo 'File Type:&nbsp;' . $_FILES['uploadimage']['type'];
    echo '<br />';
    echo 'File Size:&nbsp;' . $_FILES['uploadimage']['size'];
}
?>