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
    else
    {
        echo "";
    }
    //echo "<br>";

    if (empty($lname))
    {
        $lnameErr = "Please Enter your Last Name";
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
    else if (strlen($uname) <=5)
    {
        $unameErr = "Username must be more then 5 characters";
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
    else
    {
        echo "";
    }
    //echo "<br>";

    if(empty($phone))
    {
        $phoneErr = "Phone number is required";
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
    $existingadminregistrationdata = file_get_contents('../Data/adminregistrationdata.json');
    $datadecode = json_decode($existingadminregistrationdata, true);

    $adminregistrationdata = array
    (
        'firstName' => $fname,
        'lastName' => $lname,
        'username' => $uname,
        'email' => $email,
        'nid' => $nid,
        'phone' => $phone,
        'filepath' => $filepath
    );

    $datadecode[] = $adminregistrationdata;

    $dataencode = json_encode($datadecode, JSON_PRETTY_PRINT);
    if (file_put_contents('../Data/adminregistrationdata.json', $dataencode))
    {
        echo "";
    }
    else
    {
        echo "Registration incomplete";
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