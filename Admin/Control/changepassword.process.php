<?php

session_start();
$errors = array();

@include("../Model/db.php");


if(isset($_POST['passwordsubmission']))
{
    $_SESSION['info'] = "";
    $newpassword = $_POST['newpassword'];
    $confirmpassword = $_POST['confirmpassword'];

    if($newpassword != $confirmpassword)
    {
        echo "Password doesn't match";
    }
    else
    {
        $code = 0;
        $email = $_SESSION['email'];
        
        $mydb = new db();
        $mycon = $mydb->openConn();
        $result = $mydb -> change_password($newpassword, $email, $code, "staticadmin", $mycon);

        if($result == true)
        {
            $info = "Your password changed.<br> Now you can login with your new password.";
            $_SESSION['info'] = $info;
            header('location: ../View/password-changed.php');
        }
        else
        {
            $errors['db-error'] = "Failed to change your password!";
        }
    }
}

if(isset($_POST['returntologin']))
{
    header('location: ../View/adminlogin.php');
}

?>