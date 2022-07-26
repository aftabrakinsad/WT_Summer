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

$uppercase=$lowercase=$number=$specialchars="";
$target_dir = "../Uploads/Profile Pictures/";
$target_file = $target_dir . basename($_FILES["picture"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

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
    $picture = $_FILES["picture"];
    $applicantcv = $_FILES["applicantcv"];

    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number = preg_match('@[0-9]@', $password);
    $specialchars = preg_match('@[^\W]@', $password);

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // $mydb = new db();
        // $conobj = $mydb->openConn();
        // $results = $mydb->loginadmin($conobj, "applicantofadmin", $_POST["fname"], $lname = $_POST["lname"], $_POST["uname"],$_POST["email"], $_POST["nid"], $_POST["phone"], $_POST["password"], $_POST["cpassword"], );


        if (empty($fname) && empty($lname) && empty($uname) && empty($email) && empty($nid) && empty($phone) && empty($password) && empty($cpassword))
        {
            $signuperr = "You did not fill all the fields!";
        }
        else if(empty($fname))
        {
            $fnameerr = "Please Enter Your Firstname";
        }
        else if(empty($lname))
        {
            $lnameerr = "Please Enter Your Lastname";
        }
        else if(empty($uname))
        {
            $unameerr1 = "Please Enter Your Username";
        }
        else if (!empty($uname) && strlen($uname) <= 5)
        {
            $unameerr = "Username must be more than 5 characters!";
        }
        else if(empty($email))
        {
            $emailerr = "Please Enter Valid Email Address";
        }
        else if(!empty($email) && !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email))
        {
            $emailerr = "Please Enter Valid Email Address";
        }
        else if(empty($nid))
        {
            $niderr = "Please Enter Valid National Identity Number";
        }
        else if(!empty($nid) && strlen($nid) != 8)
        {
            $niderr1 = "NID should be 8 digits";
        }
        else if(empty($phone))
        {
            $phoneerr = "Please Enter Valid Phone Number";
        }
        // else if(!empty($phone) && !preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $phone))
        // {
            // $phoneerr1 = "Please Enter Valid Phone Number";
        // }
        else if(empty($password))
        {
            $passworderr = "Enter Password!";
        }
        elseif(empty($cpassword))
        {
            $passworderr1 = "Confirm Your Password";
        }
        else if(!empty($password) && !empty($cpassword))
        {
            if(!$uppercase || !$lowercase || !$number || !$specialchars || strlen($password) <= 8)
            {
                $passworderr2 = "Password should be more than or equal to 8 characters and should include at least one upper case, one lower case, one number and one special character!";
            }
            else if($password != $cpassword)
            {
                $passworderr3 = "Password didn't match ";
            }
        }
        if(($_FILES['picture']) && !empty($_FILES['picture']))
        {
            $check = getimagesize($_FILES["picture"]["tmp_name"]);
            if ($check != true) {
                $imageerr = "File is not an image.";
                //$uploadOk = 0;
            }
            else if (file_exists($target_file)) {
                $imageerr1 = "Sorry, file already exists.";
                //$uploadOk = 0;
            } else if ($_FILES["picture"]["size"] > 10000) {
                $imageerr2 = "Sorry, your file is too large.";
                //$uploadOk = 0;
            }
            else if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType !="gif") {
                $imageerr3 = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                //$uploadOk = 0;
            } else if ($uploadOk == 0) {
                $fileerr1 = "Sorry, your file was not uploaded.";
            } else {
                if (move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file)) {
                    $fileerr2 =  "The file " . htmlspecialchars(basename($_FILES["picture"]["name"])) . " has been uploaded.";
                } else {
                    $fileerr3 = "Sorry, there was an error uploading your file.";
                }
            }
        }
    }
}

if(isset($_POST["return"]))
{
    header("location: ../view/adminlogin.php");
}

?>