<?php

$fnameErr = "";
$lnameErr = "";
$unameErr = "";
$emailErr = "";
$nidErr = "";
$phoneErr = "";
$fileErr = "";
$fromdata = "";
$filepath = "";

if(isset($_POST["submit"]))
{
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $uname = $_POST["uname"];
    $email = $_POST["email"];
    $nid = $_POST["nid"];
    $phone = $_POST["phone"];

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
        echo "";
    }
    //echo "<br>";

    if (empty($lname))
    {
        $lnameErr = "Please Enter your Last Name";
    }
    else if (is_numeric($lname))
    {
        $lnameErr = "Name can't be numeric";
    }
    else
    {
        echo "";
    }
    //echo "<br>";

    if (empty($uname))
    {
        $unameErr = "Please Enter your Username";
    }
    else if (is_numeric($uname))
    {
        $unameErr = "Name can't be numeric";
    }
    else
    {
        echo "";
    }
    //echo "<br>";

    if(empty($email))
    {
        $emailErr = "You must enter your email";
    }
    else if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email))
    {
        $emailErr = "Enter a valid email";
    }
    else
    {
        echo "";
    }
    //echo "<br>";

    if (empty($nid))
    {
        $nidErr = "Please Enter your NID";
    }
    else if (is_string($nid))
    {
        $nidErr = "NID must be an interger number";
    }
    elseif (is_float($nid))
    {
        $nidErr = "NID can't be fractional";
    }
    else
    {
        echo "";
    }
    //echo "<br>";

    if(empty($phone))
    {
        $phoneErr = "Phone number is required";
    }
    else if(!preg_match("/^[0-9]{10}+$/", $phone))
    {
        $phoneErr = "Enter your valid phone number";
    }
    else
    {
        echo "";
    }

    echo $_FILES["myfile"]["name"];
    if(move_uploaded_file($_FILES["myfile"]["tmp_name"],"../Uploads/". $_FILES["myfile"]["name"]))
    {
        $filepath = "../Uploads/". $_FILES["myfile"]["name"];
        $fileErr = "File Uploaded";
    }
    else
    {
        $fileErr = "Upload Error";
    }

    //echo "<br>";

    $adminregistrationdata = array
    (
        'firstname' => $_POST["fname"],
        'lastname' => $_POST["lname"],
        'username' => $_POST["uname"],
        'email' => $_POST["email"],
        'nid' => $_POST["nid"],
        'phone' => $_POST["phone"],
        'filepath' => $filepath
    );
    $existingadminregistrationdata = file_get_contents('../Data/adminregistrationdata.json');
    $datadecode = json_decode($existingadminregistrationdata);
    $datadecode[] = $adminregistrationdata;

    $dataencode = json_encode($datadecode, JSON_PRETTY_PRINT);
    if (file_put_contents('../Data/adminregistrationdata.json', $dataencode))
    {
        echo "Registration incomplete";
    }
    else
    {
        echo "Registration Done, click login button to Login";
    }

    /*$data = file_get_contents("../Data/adminregistrationdata.json");
    $mydata = json_decode($data);
    foreach ($mydata as $myobject)
    {
        foreach ($myobject as $key => $value)
        {
            echo $key . " => " . $value . "<br>";
        }
    }*/
}

?>