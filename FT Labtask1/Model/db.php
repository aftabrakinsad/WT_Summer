<?php

class db
{
    function openConn()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "labtask";
        $conn =  new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error)
        {
            echo "error connecting database";
        }
        return $conn;
    }

    function insertUser($fname, $lname, $age, $designation, $planguage, $email, $pass, $picture, $employee, $conn)
    {
        $sqlstr = "INSERT INTO $employee(fname, lname, age,designation, planguage, email, password, picture)
        VALUES ('$fname', '$lname', '$age', '$designation', '$planguage', '$email', '$pass', '$picture')";
        return $conn->query($sqlstr);
    }
}

?>