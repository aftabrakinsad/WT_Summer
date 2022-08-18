<?php

@include("../Model/db.php");

$uname = $_POST["uname"];
$username = $_POST["username"];

#Checking Username via ajax
if(!empty($uname))
{
    $mydb = new db();
    $myconn = $mydb -> openConn();
    $results = $mydb -> search_admin_by_username($uname,"staticadmin", $myconn);
    if($results -> num_rows > 0)
    {
        echo "User Exsists";
    }
    else
    {
        echo "User doesn't Exists";
    }
}

?>