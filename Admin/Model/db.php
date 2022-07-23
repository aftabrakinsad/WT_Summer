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
        $sqlstr = "SELECT uname,pass FROM $staticadmin WHERE uname = '$uname' AND pass = '$pass'";
        return $conn -> query($sqlstr);
    }

    function insertapplicant($conn, $applicantofadmin, $fname, $lname, $uname, $email, $nid, $phone, $password, $cpassword, $profile_picture, $applicant_cv)
    {
        $sqlstr = "INSERT INTO applicantofadmin(fname, lname, uname, email, nid, phone, 
        password, cpassword, profile_picture, 
        applicant_cv) VALUES ('$fname', '$lname', '$uname', '$email', '$nid', '$phone', '$password', '$cpassword', '$profile_picture', '$applicant_cv')";
        return $conn->query($sqlstr);
    }
}
