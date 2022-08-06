<?php

@include("../Model/db.php");

if (isset($_GET['addingid']))
{
    $applicant_serial = $_GET['addingid'];

    $mydb = new db();
    $myconn = $mydb->openConn();
    $applicant_serial = $_GET['addingid'];
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

?>