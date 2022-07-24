<?php

$unameerr = "";

@include("../Model/db.php");

$uppercase=$lowercase=$number=$specialchars="";

session_start();

if(isset($_POST["submit"]))
{
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $uname = $_POST["uname"];
    $email = $_POST["email"];
    $nid = $_POST["nid"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number = preg_match('@[0-9]@', $password);
    $specialchars = preg_match('@[^\W]@', $password);

    if(!empty($uname) && strlen($uname) !=5)
    {
        $unameerr = "Username must be equal to 5 character!";
    }
}

if(isset($_POST["return"]))
{
    header("location: ../view/adminlogin.php");
}

?>