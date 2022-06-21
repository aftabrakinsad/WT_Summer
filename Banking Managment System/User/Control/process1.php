<?php
 
$usernameErr = "";
$dobErr = "";
$emailErr = "";
$nidErr = "";
$phoneErr = "";
$passwordErr = "";
$cpasswordErr = "";
$fileErr = "";
$fromdata = "";
$useridERR = "";
$filepath = "";
$uppercase=$lowercase=$number=$specialchars="";
$Language="";
$LanErr ="";
 
if(isset($_POST['submit']))
{
    $username = $_POST["username"];
    $dob = $_POST["dateofbirth"];
    $phone = $_POST["phonenumber"];
    $nid = $_POST["nid"];
    $email = $_POST["email"];
    $userid = $_POST["userid"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
 
    if (!preg_match ("/^[a-zA-z]*$/", $username))
    {
        $usernameERR = "Only alphabets and whitespace are allowed.";
    }
    if (empty($username))
    {
        $usernameErr = "Please enter username";
    }


    
    echo '<br>';
 
    if (empty($dateofbirth))
    {
        $dobErr = "Please enter date of birth";
    }
    echo '<br>';
 
 
    if (!preg_match ("/^[0-9]*$/", $phone))
    {
        $phoneErr = "Only numeric value is allowed.";   
    }


    if(empty($phone)) {
        $phoneErr=" phone number required";
    }

    echo '<br>';
 
    if (!is_numeric($nid))
    {
        $nidErr = "Please enter only numbers.";
    }
    echo '<br>';
 
    $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
    if (!preg_match ($pattern, $email) )
    {
        $emailErr = "Email is not valid.";
    }
    echo '<br>';
 
    if (
        isset($_POST['account1']) ||
        isset($_POST['account2']) ||
        isset($_POST['account3']))
        {
            if (isset($_POST['account1']))
            {
                $LanErr = 'Checking accounts ';
                $Language = $Language. $_POST['account1'];
                echo '<br>';
            }
            if (isset($_POST['account2']))
            {
                $LanErr = 'Savings accounts';
                $Language =  $Language.''.$_POST['account2'];
                echo '<br>';
            }
            if (isset($_POST['account3']))
            {
                $LanErr = 'Certificate of deposit accounts';
                $Language = $Language.''. $_POST['account3'];
                echo '<br>';
            }
        }
    else
    {
        $LanErr = 'You Have not Selected a checkbox';
        echo '<br>';
    }
    echo '<br>';
 
        if (empty($userid))
        {
            $useridERR = "Please Enter a valid user id";
        }
        echo '<br>';

    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);
    if($password != "")
    {
        if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8)
        {
            $passwordErr = "Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.";
        }
    }
    if ($password == $cpassword)
    {
        if($username != "" &&  $phone != "" && $email != "")
        {
            echo $_FILES["myfile"]["name"];
            if(move_uploaded_file($_FILES["myfile"]["tmp_name"],"../Uploads/" . $_FILES["myfile"]["name"]))
            {
                $filepath = "../Uploads/" . $_FILES["myfile"]["name"];
                $fileErr = "File Uploaded";
            }
            else
            {
                echo "";
            }
            echo "<br>";
            $existinguserregistrationdata = file_get_contents('../Data/userregistrationdata.json');
            $datadecode =
            json_decode($existinguserregistrationdata, true);
            $userregistrationdata = array(
                'username' => $username,
                'email' => $email,
                'nid' => $nid,
                'phone' => $phone,
                'userid' => $userid,
                'password' => $password,
                'cpassword' => $cpassword,
                'filepath' => $filepath
            );
            $datadecode[] = $userregistrationdata;
            $dataencode = json_encode($datadecode, JSON_PRETTY_PRINT);
            if(file_put_contents('../Data/userregistrationdata.json', $dataencode))
            {
                echo "Signup complete. Please click the login button to LOGIN";
            }
            else
            {
                echo "Signup incomplete";
            }
        }
        else
        {
            echo "Please Fill Out This Form";
        }
    }
    else
    {
        $cpasswordErr = "Password and Confirm password didn't match!";
    }

    if(empty($passwordErr))
    {
        $passwordErr="Password required";
    }

    if(empty($cpasswordErr))
    {
        $cpasswordErr="Enter password to confirm";
    }


}


if(isset($_POST['login']))
{
    header("location: ../View/userlogin.php");
}
 
?>