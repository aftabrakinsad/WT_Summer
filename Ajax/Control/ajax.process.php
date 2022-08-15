<?php

@include("../Model/db.php");


$uname = $_POST["name"];

if(!empty($uname))
{
    $mydb = new db();
    $myconn = $mydb -> openConn();
    $result = $mydb -> show($uname, "staticadmin", $myconn);

    if($result->num_rows > 0)
    {
        echo "User exists";
    }
    else
    {
        echo "User does not exist";
    }
}

?>