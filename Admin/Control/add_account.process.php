<?php

@include("../Model/db.php");

$errors = array();
$success = array();

$email = $_GET["email"];
$nid = $_GET["nid"];

if(true)
{
    $mydb = new db();
    $myconn = $mydb->openConn();
    $accountno = rand(9999999, 1000000);
    $resultd = $mydb->genetaring_account_number($email, $nid, $accountno, "details_table_for_selected_admins", $myconn);

    if($resultd == true)
    {
        $success['accno-added'] = "Account No Added";
    }
    else
    {
        $errors['accno-decline'] = "Error! Adding Account No";
    }
}

?>