<?php

$fnameerr = "";
$lnameerr = "";
$unameerr = "";
$unameerr1 = "";
$emailerr = "";
$niderr = "";
$niderr1 = "";
$phoneerr = "";
$passworderr = "";
$passworderr1 = "";
$passworderr2 = "";
$passworderr3 = "";
$filepath = "";
$imgpath = "";
$fileerr = "";
$fileerr1 = "";
$imageerr = "";
$imageerr1 = "";
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
    $cv = $_FILES["cv"]["name"];

    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number = preg_match('@[0-9]@', $password);
    $specialchars = preg_match('@[^\W]@', $password);

    if (empty($fname) && empty($lname) && empty($uname) && empty($email) && empty($nid) && empty($phone) && empty($password) && empty($cpassword) && empty($_FILES["picture"]["tmp_name"]) && empty($_FILES["cv"]["tmp_name"]))
    {
        $signuperr = "You did not fill all the fields! ";
        //header("Location: ../View/adminregistration.php?Application_Submitted=Failed");
    }
    else if(empty($fname))
    {
        $fnameerr = "Please Enter Your Firstname. ";
        //header("Location: ../View/adminregistration.php?Application_Submitted=Failed");
    }
    else if(empty($lname))
    {
        $lnameerr = "Please Enter Your Lastname. ";
        //header("Location: ../View/adminregistration.php?Application_Submitted=Failed");
    }
    else if(empty($uname))
    {
        $unameerr1 = "Please Enter Your Username. ";
        //header("Location: ../View/adminregistration.php?Application_Submitted=Failed");
    }
    else if (!empty($uname) && strlen($uname) <= 5)
    {
        $unameerr = "Username must be more than 5 characters! ";
        //header("Location: ../View/adminregistration.php?Application_Submitted=Failed");
    }
    else if(empty($email))
    {
        $emailerr = "Please Enter Valid Email Address. ";
        //header("Location: ../View/adminregistration.php?Application_Submitted=Failed");
    }
    else if(!empty($email) && !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email))
    {
        $emailerr = "Please Enter Valid Email Address. ";
        //header("Location: ../View/adminregistration.php?Application_Submitted=Failed");
    }
    else if(empty($nid))
    {
        $niderr = "Please Enter Valid National Identity Number. ";
        //header("Location: ../View/adminregistration.php?Application_Submitted=Failed");
    }
    else if(!empty($nid) && strlen($nid) != 8)
    {
        $niderr1 = "NID should be 8 digits. ";
        //header("Location: ../View/adminregistration.php?Application_Submitted=Failed");
    }
    else if(empty($phone))
    {
        $phoneerr = "Please Enter Valid Phone Number. ";
        //header("Location: ../View/adminregistration.php?Application_Submitted=Failed");
    }
    else if(empty($password))
    {
        $passworderr = "Enter Password! ";
        //header("Location: ../View/adminregistration.php?Application_Submitted=Failed");
    }
    elseif(empty($cpassword))
    {
        $passworderr1 = "Confirm Your Password ";
        //header("Location: ../View/adminregistration.php?Application_Submitted=Failed");
    }
    else if(!empty($password) && !empty($cpassword))
    {
        if(!$uppercase || !$lowercase || !$number || !$specialchars || strlen($password) <= 8)
        {
            $passworderr2 = "Password should be more than or equal to 8 characters and should include at least one uppercase, one lower case, one number and one special character! ";
            //header("Location: ../View/adminregistration.php?Application_Submitted=Failed");
        }
        else if($password != $cpassword)
        {
            $passworderr3 = "Password didn't match. ";
            //header("Location: ../View/adminregistration.php?Application_Submitted=Failed");
        }
    }
    if ($fname != "" && $lname != "" && $uname != "" && $email != "" && $nid != "" && $phone != "" && $password != "" && $cpassword != "") 
    {
        if(true)
        {
            $target_dir = "../uploads/profile_picture/";
            $target_dirr = "../uploads/applicant_cv/";

            $target_file = $target_dir . $_FILES["picture"]["name"];
            $target_filee = $target_dirr . $_FILES["cv"]["name"];

            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            $FileType = strtolower(pathinfo($target_filee, PATHINFO_EXTENSION));

            if(empty($picture))
            {
                $imageerr1 = "Please select your picture to upload. ";
                header("Location: ../View/adminregistration.php?Application_Submitted=Failed");
            }
            else if(empty($cv))
            {
                $fileerr1 = "Please select your cv to upload. ";
                header("Location: ../View/adminregistration.php?Application_Submitted=Failed");
            }
            else if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif")
            {
                $imageerr = "Sorry, only JPG, JPEG, PNG & GIF files are allowed. ";
                header("Location: ../View/adminregistration.php?Application_Submitted=Failed");
            }
            else if($FileType != "pdf")
            {
                $fileerr = "Sorry, Only PDF files are allowed. ";
                header("Location: ../View/adminregistration.php?Application_Submitted=Failed");
            }
            else
            {
                if ((move_uploaded_file($_FILES["picture"]["tmp_name"], "../uploads/profile_picture/" . $_FILES["picture"]["name"])) 
                    && (move_uploaded_file($_FILES["cv"]["tmp_name"], "../uploads/applicant_cv/" . $_FILES["cv"]["name"])))
                {
                    $imgpath = "../uploads/profile_picture/" . $_FILES["picture"]["name"];
                    $filepath = "../uploads/applicant_cv/" . $_FILES["cv"]["name"];

                    $mydb = new db();
                    $myconn = $mydb->openConn();
                    $mydb->insertapplicant($fname, $lname, $uname, $email, $nid, $phone, $password, $cpassword, $imgpath, $filepath, "applicantofadmin", $myconn);

                    header("Location: ../View/adminregistration.php?Application_Submitted=Successfully");
                }
                else
                {
                    header("Location: ../View/adminregistration.php?Application_Submitted=Failed");
                }
            }

        }
    }
}
if(isset($_POST["return"]))
{
    header("location: ../View/adminlogin.php");
}

?>