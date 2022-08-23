<?php

@include("../Model/db.php");

if(isset($_GET['deleteid']))
{
    $id = $_GET['deleteid'];

    $mydb = new db();
    $myconn = $mydb->openConn();
    $result = $mydb->deleting_new_emp($id, "registrationofemployee", $myconn);
    
    if($result == true)
    {
        header("location: ../View/manageemp.php");
    }
    else
    {
        echo "Can't find the employee to delete";
    }
}

?>