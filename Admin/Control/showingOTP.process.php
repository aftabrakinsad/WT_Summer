<?php

@include("../Model/db.php");

session_start();

$email = $_POST['email'];
if(!empty($email))
{
    $mydb = new db();
    $mycon = $mydb -> openConn();
    $result = $mydb -> otp_showing($email, "staticadmin", $mycon);

    if($result -> num_rows > 0)
    {
        
    }
}

?>