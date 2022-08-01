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

    function user_searching_by_email($email, $staticadmin, $conn)
    {
        $sqlstr = "SELECT * FROM $staticadmin WHERE email = '$email'";
        return $conn -> query($sqlstr);
    }

    function change_password($pass, $email, $staticadmin, $conn)
    {
        $sqlstr = "UPDATE $staticadmin SET pass = '$pass' WHERE email = '$email'";
        return $conn -> query($sqlstr);
    }
}

?>