<?php

@include("../Model/db.php");

$uppercase=$lowercase=$number=$specialchars="";

session_start();

if(isset($_POST["submit"]))
{
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    // $uname = $_POST["uname"];
    // $email = $_POST["email"];
    // $nid = $_POST["nid"];
    // $phone = $_POST["phone"];
    // $password = $_POST["password"];
    // $cpassword = $_POST["cpassword"];


    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number = preg_match('@[0-9]@', $password);
    $specialchars = preg_match('@[^\W]@', $password);

    if(empty($fname) && empty($lname))
    {
        header("location: ../View/adminregistration.php?signup=empty");
        exit();
    }
    else if(empty($fname))
    {
        header("location: ../View/adminregistration.php?firstname=empty");
        exit();
    }
    else if(empty($lname))
    {
        header("location: ../View/adminregistration.php?lastname=empty");
        exit();
    }
    else
    {
        header("location: ../view/adminregistration.php?
        login=success");
        exit();
    }
    // else if(empty($uname))
    // {
        // // header("location: ../View/adminregistration.php?username=empty");
        // exit();
    // }
    // else if(empty($email))
    // {
        // // header("location: ../View/adminregistration.php?email=empty");
        // exit();
    // }
    // else if(empty($nid))
    // {
        // // header("location: ../View/adminregistration.php?national_identity_dcomument=empty");
        // exit();
    // }
    // else if(empty($phone))
    // {
        // // header("location: ../View/adminregistration.php?phone=empty");
        // exit();
    // }
    // else if(empty($password))
    // {
        // header("location: ../View/adminregistration.php?password=empty");
        // exit();
    // }
    // else if(empty($cpassword))
    // {
        // header("location: ../View/adminregistration.php?confirmpassword=empty");
        // exit();
    // }

    // if($password != $cpassword)
    // {
        // header("location: ../View/adminregistration.php?
        // password=notmatch");
        // exit();
    // }
    // else if(!$uppercase || !$lowercase || !$number || !$specialchars || strlen($password) < 8)
    // {
        // header("location: ../View/adminregistration.php?
        // password=weak");
        // exit();
    // }
    // else
    // {
        // $mydb = new db();
        // $conobj = $mydb->openConn();
        // $results = $mydb->checkadmin($conobj, "staticadmin", $uname);
        // if($results->num_rows > 0)
        // {
            // header("location: ../View/adminregistration.php?
            // username=taken");
            // exit();
        // }
        // else
            // $mydb->registeradmin($conobj, "staticadmin", $fname, $lname, $uname, $email, $nid, $phone, $password);

    // if($uname != "" && strlen($uname) <= 5)
    // {
        // $unameErr = "!Username must be more then 5 characters!";
    // }
        // if ($email != "" && !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email))
        // {
            // $emailErr = "Enter your valid email";
        // }
        // if($nid != "" && !is_numeric($nid))
        // {
            // $nidErr = "NID must have numeric value";
        // }
        // if(!isset($_POST["gender"]))
        // {
            // $genderErr = "You have not selected any Gender";
        // }
            // if(isset($_POST["gender"]))
            // {
                // if($_POST["gender"] == "male")
                // {
                    // 
                // }
                // if ($_POST["gender"]=='female')
                // {
                //   
                // }
            // $gender =   $_POST["gender"];
            // }
        // if($password != "")
        // {
            // // if (!$uppercase || !$lowercase || !$number || !$specialchars || strlen($password) < 5)
            // {
                // $passwordErr = "!Password should be at least 5 characters in length and should include at least one upper case, one lower case, one number and one special character!";
            // }
        // }
        // if ($password == $cpassword &&$fname != "" && $lname != "" &&  $phone != "" && $nid != "")
        // {
            // if ($fname != "" && $lname != "" &&  $phone != "")
            // {
                    // echo $_FILES["myfile"]["name"];
                    // if (move_uploaded_file($_FILES["myfile"]["tmp_name"], "../Uploads/" . $_FILES["myfile"]["name"]))
                    // {
                        // $filepath = "../Uploads/" . $_FILES["myfile"]["name"];
                        // $fileErr = "File Uploaded";
                    // }
                    // else
                    // {
                        // echo "";
                    // }
                    // echo "<br>";
                    // $existingadminregistrationdata = file_get_contents('../Data/adminregistrationdata.json');
                    // $datadecode = json_decode($existingadminregistrationdata, true);
                    // $adminregistrationdata = array
                    // (
                        // 'firstName' => $fname,
                        // 'lastName' => $lname,
                        // 'username' => $uname,
                        // 'gender' => $gender,
                        // 'email' => $email,
                        // 'nid' => $nid,
                        // 'phone' => $phone,
                        // 'password' => $password,
                        // 'cpassword' => $cpassword,
                        // 'filepath' => $filepath
                    // );
                        // $datadecode[] = $adminregistrationdata;
                        // $dataencode = json_encode($datadecode, JSON_PRETTY_PRINT);
                        // if (file_put_contents('../Data/adminregistrationdata.json', $dataencode))
                        // {
                            // echo "Request is being submitted, Please wait for the responce";
                        // }
                        // else
                        // {
                            // echo "Registration incomplete";
                        // }
            // }
                        // else
                        // {
                            // echo "Please Fill Out This Form";
                        // }
        // }
        // else
        // {
            // $cpasswordErr = "Password didn't match";
        // }
    }
//}

if(isset($_POST["return"]))
{
    header("location: ../view/adminlogin.php");
}

?>