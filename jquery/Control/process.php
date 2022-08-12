<?php

@include('../Model/gg.php');

if (isset($_POST['submit']))
{

    $email = $_POST['email'];

    $mydb = new db();
    $conobj = $mydb->openConn();
    $result = $mydb->retrive_otp_form_staticadmin($email, $staticadmin, $conobj);

    if($result == true)
    {
        echo "ok";
    }
    else
    {
        echo "fail";
    }
} 

?>