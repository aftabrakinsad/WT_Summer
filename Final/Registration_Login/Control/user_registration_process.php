<?php

include("../Model/user_registration.php");
$errme = "";

if(isset($_POST["submit"]))
{
    $name = $_POST["name"];
    $uname = $_POST["uname"];
    $pass = $_POST["pass"];

    if(empty($_POST["name"]) || empty($_POST["uname"]) || empty($_POST["pass"]))
    {
        $errme = "Please fill all the details";
    }
    else
    {
        $db = new db();
        $conn = $db->openCon();
        $db->userregistration($name, $uname, $pass, "userregistration", $conn);
    }
}

?>