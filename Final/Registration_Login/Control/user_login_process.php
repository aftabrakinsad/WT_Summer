<?php

include("../Model/user_registration.php");
$errme = "";

session_start();
setcookie("usercheck", "visited", time()+60);
if(isset($_COOKIE["usercheck"]))
{
    echo "You have visited us";
}
else
{
    echo "welcome to our site";
}

if(isset($_POST["submit"]))
{
    $uname = $_POST["uname"];
    $pass = $_POST["pass"];

    if(empty($_POST["uname"]) || empty($_POST["pass"]))
    {
        $errme = "Please fill all the details";
    }
    else
    {
        $db = new db();
        $conn = $db->openCon();
        $result = $db->userlogin($_POST["uname"], $_POST["pass"], "userregistration", $conn);

        if($result -> num_rows > 0)
        {
            $_SESSION["uname"] = $_POST["uname"];
            $_SESSION["pass"]  = $_POST["pass"];
        }
        else
        {
            echo "user not found". $conn -> error;
        }
    }
    if (!empty($_SESSION["uname"]) && !empty($_SESSION["pass"]))
    {
        header("Location: ../View/home.php");
    }
}

?>
