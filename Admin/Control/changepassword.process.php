<?php

@include("../Model/db.php");

session_start();

if(isset($_POST['passwordsubmission']))
{
    $_SESSION['info'] = "";
    $newpassword = $_POST['newpassword'];
    $confirmpassword = $_POST['confirmpassword'];

    if($newpassword != $confirmpassword)
    {
        echo "Password Didn't match";
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
            echo "Changed";
            echo '<script>alert("Password Changed")</script>';
            // header("location: ../View/adminlogin.php");
        }
        else
        {
            echo "Not Changed";
        }

    }
    
}

?>