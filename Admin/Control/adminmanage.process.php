<?php

@include("../Model/db.php");

$fname = "";
$lname = "";
$uname = "";
$email = "";
$nid = "";
$phone = "";

if (isset($_POST["search"]))
{
    $mydb = new db();
    $myconn = $mydb->openConn();
    $username = $_POST["username"];
    $result = $mydb -> search_by_User_name($username,"applicantofadmin", $myconn);
    
    if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        { 
            $fname = $row["fname"];
            $lname = $row["lname"];
            $uname = $row["uname"];
            $email = $row["email"];
            $nid = $row["nid"];
            $phone = $row["phone"];
        }
    }
}

?>