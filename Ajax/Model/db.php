<?php

class db
{
    function openConn()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "labtask";
        $conn =  new mysqli( $servername, $username, $password, $dbname);
        if ($conn->connect_error)
        {
            echo "error connecting database";
        }
        return $conn;
    }
    
    function show($uname, $ajax, $conn)
    {
        $sqlstr = "SELECT uname FROM $ajax WHERE uname = '$uname'";
        return $conn->query($sqlstr);
    }
}

?>