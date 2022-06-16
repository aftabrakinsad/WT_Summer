<?php

$fnameErr = "";
$lnameErr = "";
$unameErr = "";
$emailErr = "";
$nidErr = "";
$phoneErr = "";
$filepath = "";

if(isset($_POST["submit"]))
{
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $uname = $_POST["uname"];
    $email = $_POST["email"];
    $nid = $_POST["nid"];
    $fname = $_POST["fname"];

    if(empty($fname))
    {
        $fnameErr = "Please Enter your First Name";
    }
    else if(is_numeric($fname))
    {
        $fnameErr = "Name can't be numeric";
    }
    else
    {
        echo "Your First Name is". $fname;
    }
    echo "<br>";

    if (empty($lname)) {
        $fnameErr = "Please Enter your First Name";
    } else if (is_numeric($lname)) {
        $fnameErr = "Name can't be numeric";
    } else {
        echo "Your First Name is" . $lname;
    }
    echo "<br>";
}

?>