<?php

include("../Model/db.php");
session_start();

// if(!empty($_SESSION["uname"]) && !empty($_SESSION["pass"]))
// {
    // header("location: ../View/adminhomepage.php");
// }
if(isset($_POST['submit']))
{
    if(!empty($_POST["uname"]) || !empty($_POST["pass"]))
    {
        $mydb = new db();
        $conobj = $mydb->openConn();
        $results = $mydb->loginadmin($conobj, "staticadmin", $_POST["uname"], $_POST["pass"]);

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
        echo "username or password cann't be empty";
    }
    // if (!empty($_SESSION["uname"]) && !empty($_SESSION["pass"]))
    // {
        // header("location: ../View/adminhomepage.php");
    // }
}

?>