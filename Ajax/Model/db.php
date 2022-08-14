<?php

class db
{
    function openConn()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "bankinmanagmentsystem";
        $conn =  new mysqli( $servername, $username, $password, $dbname);
        if ($conn->connect_error)
        {
            echo "error connecting database";
        }
        return $conn;
    }
    
    function show($uname, $staticadmin, $conn)
    {
        $sqlstr = "SELECT uname FROM $staticadmin WHERE uname = '$uname'";
        return $conn->query($sqlstr);
    }
}

?>