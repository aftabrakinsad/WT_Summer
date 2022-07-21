<?php

include("../Model/db.php");

session_start();

if(isset($_POST['submit']))
{
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    if ($uname != "" && $password != "")
    {
        $mydb = new db();
        $conobj = $mydb->openConn();
        $results = $mydb->loginadmin(
            $conobj,
            "staticadmin",
            $_POST["uname"],
            $_POST["pass"]
        );

        if ($results->num_rows > 0)
        {
            $_SESSION["uname"] = $_POST["uname"];
            $_SESSION["pass"] = $_POST["pass"];
            header("location: ../View/adminhomepage.php");
        }
        else
        {
            echo "user not found";
        }
    }
    else
    {
        echo "Please enter Username and Password to log in";
    }
}

?>