<?php

$passerr = "";
$passerr1 = "";
$passerr2 = "";

@include('../Model/db.php');

session_start();

if (isset($_POST['Change']))
{
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];

    if ($email != "" && $pass != "" && $cpass != "")
    {
        if($pass == $cpass)
        {
            $count = 0;
            $mydb = new db();
            $mycon = $mydb -> openConn();
            $result = $mydb -> change_password($_POST['pass'], $_POST['email'], "staticadmin", $mycon);

            if($result === true)
            {
                $passerr = "Password Changed";
            }
            else
            {
                header("location: ../View/forgetpassword.php?User=not_found");
                exit();
            }
        }
        else
        {
            $passerr1 = "Password didn't match";
        }
    }
    if(empty($email) && empty($pass) && empty($cpass))
    {
        header("location: ../View/forgetpassword.php?info=empty");
        exit();
    }
    else if(empty($email))
    {
        header("location: ../View/forgetpassword.php?email=empty");
        exit();
    }
    else if(empty($pass))
    {
        header("location: ../View/forgetpassword.php?new_password=empty");
    }
    else if(empty($cpass))
    {
        $passerr2 = "Please confirm password";
    }
}

if(isset($_POST['return']))
{
    header("location: ../View/adminlogin.php");
}

?>