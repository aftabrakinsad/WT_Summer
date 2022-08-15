<?php

@include("../Model/db.php");

if(isset($_GET['email']))
{
    $email = $_GET['email'];

    $mydb = new db();
    $myconn = $mydb->openConn();
    $result = $mydb -> email_checking($email, "staticadmin", $myconn);
    
    if($result -> num_rows > 0)
    {
        echo "email already exists"; 
        header("../View/adminrequest.php");
    }
    else
    {
        $result = $mydb ->adding_new_admin($email, "staticadmin", "applicantofadmin", $myconn);

        if($result == true)
        {
            header("location: ../View/adminrequest.php?admin=added");
        }
        else
        {
            echo "error";
        }
    }
}

?>