<?php

@include("../Model/db.php");

$fname = "";
$lname = "";
$uname = "";
$email = "";
$nid = "";
$phone = "";
$salary = "";
$accountno = "";
$errors = array();

if (isset($_POST["search"]))
{
    $username = $_POST["username"];

    if (empty($username))
    {
        $errors['empty-username'] =  "Please enter username";
    }
    else if (!empty($username) && strlen($uname) >= 5)
    {
        $errors['uname-char'] = "Username must be more than 5 characters!";
    }
    else
    {
        $mydb = new db();
        $myconn = $mydb->openConn();
        $result = $mydb->search_by_User_name($username, "details_table_for_selected_admins", $myconn);

        if ($result->num_rows > 0)
        {
            while ($row = $result->fetch_assoc())
            {
                $fname = $row["fname"];
                $lname = $row["lname"];
                $uname = $row["uname"];
                $email = $row["email"];
                $nid = $row["nid"];
                $phone = $row["phone"];
                $salary = $row["salary"];
                $accountno = $row["accountno"];
            }
        }
        else
        {
            $errors['username-nofound'] = "User name not found";
        }
    }
}

if(isset($_POST["submit"]))
{
    $mydb = new db();
    $myconn = $mydb->openConn();
    $resulta = $mydb->updateProfile($_POST["fname"], $_POST["lname"], $_POST["uname"], $_POST["email"], $_POST["nid"], $_POST["phone"], $_POST["salary"], $_POST["accountno"], "details_table_for_selected_admins", $myconn);
    if($resulta == true)
    {
        echo "Udated";
    }
    else
    {
        echo "Update Failed". $myconn->error;
    }
}

?>