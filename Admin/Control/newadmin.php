<?php

@include("../Model/db.php");

if($_GET['email'])
{
    $email = $_GET['email'];

    $mydb = new db();
    $myconn = $mydb->openConn();
    $result = $mydb -> email_checking($email, "staticadmin", $myconn);
    
    if($result -> num_rows > 0)
    {
        // echo "email already exists"; 
        header("location: ../View/adminrequest.php?admin=already_exists");
    }
    else
    {
        $result = $mydb -> adding_new_admin($email, "staticadmin", "applicantofadmin", $myconn);
        $resultII = $mydb -> adding_new_adminII($email, "details_table_for_selected_admins", "applicantofadmin", $myconn);
        $resultIII = $mydb -> adding_new_admin_accountno_info($email, "admin_account_number", "applicantofadmin", $myconn);

        if($result == true && $resultII == true)
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