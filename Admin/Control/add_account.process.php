<?php

    @include("../Model/db.php");

    $errors = array();
    $success = array();
    $showaccountno = "";

    $email = $_GET["email"];
    $nid = $_GET["nid"];
    $accountno = $_POST["accountno"];

    if(isset($_POST["submit"]))
    {
        $mydb = new db();
        $myconn = $mydb->openConn();
        $accountno = rand(9999999, 1000000);
        $resultd = $mydb->genetaring_account_number($email, $nid, $accountno, "admin_account_number", $myconn);
        if ($resultd == true)
        {
            $success['accno-added'] = "Account No Generated";
            header("../View/admin_salary_accno.php");
        }
        else
        {
            $errors['accno-decline'] = "Error! Adding Account No";
        }
        if(true)
        {
            $email = $_GET['email'];
            $result = $mydb ->accountno_showing($email, "admin_account_number", $myconn);
            if($result -> num_rows > 0)
            {
                $myaccountno = $result->fetch_assoc();
                $showaccountno =  $myaccountno["accountno"]; 
            }
        }
    }

    if(isset($_POST["enter"]))
    {
        $mydb = new db();
        $myconn = $mydb->openConn();
        $mydb-> adding_new_admin_accountno($email, $nid, $accountno, "details_table_for_selected_admins", $myconn);
        $success['accno-added'] = "Successfully Added! Account No.";
    }

?>