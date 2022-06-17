<?php

$fnameErr = "";
$lnameErr = "";
$unameErr = "";
$emailErr = "";
$nidErr = "";
$phoneErr = "";
$passwordErr = "";
$cpasswordErr = "";
$fileErr = "";
$fromdata = "";
$filepath = "";
$uppercase=$lowercase=$number=$specialchars="";

if(isset($_POST["submit"]))
{
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $uname = $_POST["uname"];
    $email = $_POST["email"];
    $nid = $_POST["nid"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];


    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number = preg_match('@[0-9]@', $password);
    $specialchars = preg_match('@[^\W]@', $password);

    if($uname != "" && strlen($uname) <= 5)
    {
        $unameErr = "!Username must be more then 5 characters!";
    }
    if ($email != "" && !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email))
    {
        $emailErr = "Enter your valid email";
    }
    if($nid != "" && !is_numeric($nid))
    {
        $nidErr = "NID must have numeric value";
    }
    if($password != "")
    {
        if (!$uppercase || !$lowercase || !$number || !$specialchars || strlen($password) < 8) {
            $passwordErr = "!Password should be at least 8 characters in length and should include at least one upper case, one lower case, one number and one special character!";
        }
    }
    if ($password == $cpassword)
    {
        if ($fname != "" && $lname != "" &&   $phone != "") {
            echo $_FILES["myfile"]["name"];
            if (move_uploaded_file($_FILES["myfile"]["tmp_name"], "../Uploads/" . $_FILES["myfile"]["name"])) {
                $filepath = "../Uploads/" . $_FILES["myfile"]["name"];
                $fileErr = "File Uploaded";
            } else {
                echo "";
            }
            echo "<br>";
            $existingadminregistrationdata = file_get_contents('../Data/adminregistrationdata.json');
            $datadecode = json_decode($existingadminregistrationdata, true);
            $adminregistrationdata = array(
                'firstName' => $fname,
                'lastName' => $lname,
                'username' => $uname,
                'email' => $email,
                'nid' => $nid,
                'phone' => $phone,
                'password' => $password,
                'cpassword' => $cpassword,
                'filepath' => $filepath
            );
            $datadecode[] = $adminregistrationdata;
            $dataencode = json_encode($datadecode, JSON_PRETTY_PRINT);
            if (file_put_contents('../Data/adminregistrationdata.json', $dataencode))
            {
                echo "Registration complete. Please click the login button to LOGIN";
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
    else
    {
        $cpasswordErr = "Password didn't match";
    }
}

?>