<?php

class db
{
    function openCon()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "allinone";
        $scon = new mysqli($servername, $username, $password, $dbname);
        if($scon -> connect_errno)
        {
            echo "Database connection error";
        }
        else
        {
            return $scon;
        }
    }

    function userregistration($name, $uname, $pass, $userregistration, $scon)
    {
        $sqlstr = "INSERT INTO $userregistration(Name, Username, Password) VALUES ('$name', '$uname', '$pass')";
        return $scon->query($sqlstr);
    }

    function userlogin($uname, $pass, $userregistration, $scon)
    {
        $sqlstr = "SELECT Username, Password FROM $userregistration WHERE Username = '$uname' AND Password = '$pass'";
        return $scon -> query($sqlstr);
    }

}

?>