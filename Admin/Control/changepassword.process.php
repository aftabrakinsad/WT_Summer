<?php

session_start();
$passwordchanged = "";

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
            $passwordchanged = "Password Changed. Go back to login";
        }
        else
        {
            echo "Password not changed";
        }
    }
}

?>