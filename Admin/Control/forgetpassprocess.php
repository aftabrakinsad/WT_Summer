<?php

@include("../Model/db.php");

session_start();

if(isset($_POST["submit"]))
{
    $uname = $_POST['uname'];
    $email = $_POST['email'];

    if($uname != "" && $email != "")
    {
        $mydb = new db();
        $conobj = $mydb->openConn();
        $results = $mydb->loginadmin($conobj, "staticadmin",$_POST["uname"], $_POST["email"]);

        if($results ->num_rows > 0)
        {
            // foreach ($results as $user)
            // {
            //     if ($user["uname"] == $_POST["uname"] && $user["email"] == $_POST["email"])
            //     {
                    $_SESSION['username'] = $user["uname"];
                    $_SESSION['email'] = $user["email"];
                    header("location: ../View/adminlogin.php");
                //}
            //}
        }
    }
}
if (isset($_POST["return"])) 
{
    header("location: ../View/adminlogin.php");
}

?>