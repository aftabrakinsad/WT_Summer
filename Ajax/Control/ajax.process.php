<?php

@include("../Model/db.php");


$uname = $_POST["uname"];

if(!empty($uname))
{
    $mydb = new db();
    $myconn = $mydb -> openConn();
    $result = $mydb -> show($uname, "ajax", $myconn);

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