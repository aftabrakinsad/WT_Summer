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

    if($uname != "" && strlen($uname) <= 5)
    {
        $unameErr = "First name must be more then 5 characters!";
    }
    elseif ($email != "" && !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email))
    {
        $emailErr = "Enter your valid email";
    }
    else
    {
        if($fname != "" && $lname != "" && $nid != "" &&   $phone != "")
        {
            echo $_FILES["myfile"]["name"];
            if(move_uploaded_file($_FILES["myfile"]["tmp_name"],"../Uploads/". $_FILES  ["myfile"]["name"]))
            {
                $filepath = "../Uploads/". $_FILES["myfile"]["name"];
                $fileErr = "File Uploaded";
            }
            else
            {
                $fileErr = "Upload Error";
            }
            echo "<br>";
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
                echo "Registration complete";
            }
            else
            {
                echo "Registration incomplete";
            }
        }
        else
        {
            echo "Please Fill Out This Form";
        }
    }
}

?>