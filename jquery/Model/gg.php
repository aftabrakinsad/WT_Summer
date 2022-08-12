<?php

class db
{
    function openConn()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "bankinmanagmentsystem";
        $conn =  new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error)
        {
            echo "error connecting database";
        }
        return $conn;
    }

    function retrive_otp_form_staticadmin($email, $staticadmin, $conn)
    {
        $sqlstr = "SELECT code FROM $staticadmin WHERE email = '$email'";
        return $conn -> query($sqlstr);
    }
}

?>