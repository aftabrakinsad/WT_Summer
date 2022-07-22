<?php

@include('../Model/db.php');

    session_start();
    if(isset($_POST['submit']))
    {
        $uname = $_POST['uname'];
        $password = $_POST['pass'];

        if($uname != "" && $password != "")
        {
            if($_SERVER["REQUEST_METHOD"] == "POST")
            {
                $f = 0;
                $mydb = new db();
                $conobj = $mydb->openConn();
                $results = $mydb->loginadmin($conobj, "staticadmin", $_POST["uname"], $_POST["pass"]);

                if($results->num_rows > 0)
                {
                    foreach($results as $user)
                    {
                        if($user["uname"] == $_POST["uname"] && $user["pass"] == $_POST["pass"])
                        {
                            $_SESSION['uname'] = $user["uname"];
                            $_SESSION['pass'] = $user["pass"];

                        if (!empty($_POST["remember"]))
                        {
                            setcookie("uname", $_SESSION['uname'], time() + 60);
                            setcookie("pass", $_SESSION['pass'], time() + 60);
                            echo "";
                        }
                        else
                        {
                            setcookie("uname", "");
                            setcookie("pass", "");
                            echo "";
                        }
                        header("location: ../view/adminhomepage.php");
                        }
                    }
                }
                if ($f == 0)
                {
                    echo "Enter Username and password currectly!";
                }
            }
        }
        else
        {
            echo "Please enter Username and Password to log in";
        }
    }
    if(isset($_POST['registration']))
    {
        header("location: ../View/adminregistration.php");
    }
?>