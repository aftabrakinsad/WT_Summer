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

    function loginadmin($conn, $staticadmin, $uname, $pass)
    {
        $sqlstr = "SELECT uname, pass FROM $staticadmin WHERE uname = '$uname' AND pass = '$pass'";
        return $conn -> query($sqlstr);
    }

    function insertapplicant($fname, $lname, $uname, $email, $nid, $phone, $password, $cpassword, $picture, $cv, $applicantofadmin, $conn)
    {
        $sqlstr = "INSERT INTO applicantofadmin (fname, lname, uname, email, nid, phone, password, cpassword, picture, cv) VALUES ('$fname', '$lname', '$uname', '$email', '$nid', '$phone', '$password', '$cpassword', '$picture', '$cv')";
        return $conn->query($sqlstr);
    }

    function forgotpasswordselect($conn, $staticadmin, $uname, $email)
    {
        $sqlstr = "SELECT * FROM staticadmin WHERE uname = '$uname' AND email = '$email'";
        return $conn -> query($sqlstr);
    }
}

?>