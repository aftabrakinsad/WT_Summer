<?php

@include("../Model/db.php");

if ($_GET['email']!="")
{
    $email = $_GET['email'];

    $mydb = new db();
    $myconn = $mydb->openConn();
    $result = $mydb -> email_checking($email, "staticadmin", $myconn);
    
    if($result == true)
    {
        echo "email already exits";
        // header("location: ../View/adminrequest.php?email=already_exits");
    }
    else
    {
        $result = $mydb ->adding_new_admin($applicant_serial, "staticadmin", "applicantofadmin", $myconn);

        if($result == true)
        {
            header("location: ../View/adminrequest.php");
        }
        else
        {
            echo "error";
        }
    }
}

?>