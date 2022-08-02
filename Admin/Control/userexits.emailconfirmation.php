<?php

$emailerr = "";
$emailerr1 = "";

@include('../Model/db.php');

session_start();

if(isset($_POST["Change"]))
{
    $email = $_POST['email'];

    if(!empty($email))
    {
        $mydb = new db();
        $mycon = $mydb -> openConn();
        $result = $mydb -> user_searching_by_email($email, "staticadmin", $mycon);

        if($result -> num_rows > 0)
        {
            $_session["email"] = $email;
            header("location: ../View/otpsubmission.php");
        }
        else
        {
            $emailerr = "No user found with this email";
        }
    }
    else
    {
        $emailerr1 = "Email is required";
    }

}

?>