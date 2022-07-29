<?php

$fnameerr = "";
$lnameerr = "";
$unameerr = "";
$unameerr1 = "";
$emailerr = "";
$niderr = "";
$niderr1 = "";
$phoneerr = "";
$phoneerr1 = "";
$passworderr = "";
$passworderr1 = "";
$passworderr2 = "";
$passworderr3 = "";
$filepath = "";
$fileerr = "";
$fileerr1 = "";
$fileerr2 = "";
$fileerr3 = "";
$imageerr = "";
$imageerr1 = "";
$imageerr2 = "";
$imageerr3 = "";
$imageerr4 = "";
$signuperr = "";

@include("../Model/db.php");

$uppercase = $lowercase = $number = $specialchars = "";

session_start();

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
    $picture = $_FILES["picture"]["name"];

    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number = preg_match('@[0-9]@', $password);
    $specialchars = preg_match('@[^\W]@', $password);

    if (empty($fname) && empty($lname) && empty($uname) && empty($email) && empty($nid) && empty($phone) && empty($password) && empty($cpassword) && empty($_FILES["picture"]["tmp_name"]))
    {
        $signuperr = "You did not fill all the fields! ";
    }
    else if(empty($fname))
    {
        $fnameerr = "Please Enter Your Firstname. ";
    }
    else if(empty($lname))
    {
        $lnameerr = "Please Enter Your Lastname. ";
    }
    else if(empty($uname))
    {
        $unameerr1 = "Please Enter Your Username. ";
    }
    else if (!empty($uname) && strlen($uname) <= 5)
    {
        $unameerr = "Username must be more than 5 characters! ";
    }
    else if(empty($email))
    {
        $emailerr = "Please Enter Valid Email Address. ";
    }
    else if(!empty($email) && !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email))
    {
        $emailerr = "Please Enter Valid Email Address. ";
    }
    else if(empty($nid))
    {
        $niderr = "Please Enter Valid National Identity Number. ";
    }
    else if(!empty($nid) && strlen($nid) != 8)
    {
        $niderr1 = "NID should be 8 digits. ";
    }
    else if(empty($phone))
    {
        $phoneerr = "Please Enter Valid Phone Number. ";
    }
    else if(empty($password))
    {
        $passworderr = "Enter Password! ";
    }
    elseif(empty($cpassword))
    {
        $passworderr1 = "Confirm Your Password ";
    }
    else if(!empty($password) && !empty($cpassword))
    {
        if(!$uppercase || !$lowercase || !$number || !$specialchars || strlen($password) <= 8)
        {
            $passworderr2 = "Password should be more than or equal to 8 characters and should include at least one uppercase, one lower case, one number and one special character! ";
        }
        else if($password != $cpassword)
        {
            $passworderr3 = "Password didn't match. ";
        }
    }
    if($fname != "" && $lname != "" && $uname != "" && $email != "" && $nid != "" && $phone != "" && $password != "" && 
    $cpassword != "" && $picture != "")
    {
        if ($picture == true)
        {
            $target_dir = "../uploads/profile_picture/";
            $target_file = $target_dir . $_FILES["picture"]["name"];
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif"
            )
            {
                $imageerr = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            }
            else
            {
                if(move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file))
                {
                    header("location: ../View/adminregistration.php?Application-Submitted");
                }
                $mydb = new db();
                $myconn = $mydb->openConn();
                $result = $mydb->insertapplicant($fname, $lname, $uname, $email, $nid, $phone, $password, $cpassword, $picture,
                $cv, "applicantofadmin", $myconn);
            }
        }
        else
        {
            $imageerr1 = "Image Required";
        }
    }
}
if(isset($_POST["return"]))
{
    header("location: ../view/adminlogin.php");
}

?>