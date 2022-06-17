<?php
$nameErr = "";
$name2Err = "";
$AgeErr = "";
$passErr = "";
$emailErr = "";
$fileErr = "";
$desigErr ="";
$LanErr ="";
$designation="";
$Language="";
$fromdata ="";
$filepath ="";
if(isset($_POST["Submit"]))
{

$name = $_POST["fname"];
$name2 = $_POST["lname"];
$Age = $_POST["age"];

$pass = $_POST["pass"];
$email = $_POST["email"];
if(isset($Language))
{
    $LanErr = 'You Havent Selected a checkbox';
}
else{$Language = $_POST["PreferredLanguage"] ;}
if(isset($designation))
{
    $desigErr = 'You have not selected any Designation';
}
else{$designation = $_POST["designation"];}

    if (empty($name))
    {
        $nameErr ='Please Enter First Name';
    }
        else if(is_numeric($name))
        {
        $nameErr ='First Name can not be numeric';
      }
         else
    {
        echo 'Your First Name is ' . $name;
    }
    echo '<br>';

   
        if (empty ($name2))
    {
        $name2Err = 'Please Enter Last Name';
    }
    else if(is_numeric($name2))
    {
      $name2Err ='Last Name can not be numeric';
    }
       else
    {
        echo 'Your Last Name is ' . $name2;
    }

    echo '<br>';

   

        if (empty ($Age))
    {
        $AgeErr= 'Please Enter your Age ';
    } else
    {
        echo 'Your Age is ' . $Age;
    }

    echo '<br>';
   
    if (
        isset($designation) )
        {
        if ("juniorprogrammer"== $designation) {
            $desigErr = 'You selected Junior Programmer ';
         
        }
        if ($designation=='seniorprogrammer') {
            $desigErr = 'You selected Senior Programmer';
         
        }
        if ($designation=='projectlead') {
            $desigErr ='You selected Project Lead';
         
        }
    } else {
        $desigErr = 'You have not selected any Designation';
    }

    echo '<br>';

   
    if (
        isset($_POST['PreferredLanguage1']) ||
        isset($_POST['PreferredLanguage2']) ||
        isset($_POST['PreferredLanguage3'])) {
        if (isset($_POST['PreferredLanguage1'])) {
            $LanErr = 'Your Have Selected JAVA ';
            $Language = $Language. $_POST['PreferredLanguage1'];
            echo '<br>';
        }
   
        if (isset($_POST['PreferredLanguage2'])) {
            $LanErr = 'Your Have Selected PHP';
            $Language =  $Language.','. $_POST['PreferredLanguage2'];
            echo '<br>';
        }
        if (isset($_POST['PreferredLanguage3'])) {
            $LanErr = 'Your Have Selected C++';
            $Language = $Language.','. $_POST['PreferredLanguage2'];
            echo '<br>';
        }
    }
   
      else {
        $LanErr = 'You Have not Selected a checkbox';
        echo '<br>';
    }


 

    if(empty($email)  )
    {
        $emailErr = "You must enter email";
    }
    else if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
    { $emailErr = "Wrong Pattern Email";}
    else{
      echo "Your email is ".$email;
      echo '<br>';
    }

   
    if (strlen($pass) < 5) {
        $passErr =  'Enter a valid password <br>';
    } else
     {
        echo 'password is valid ';
    }

echo $_FILES["myfile"]["name"];

if(move_uploaded_file($_FILES["myfile"]["tmp_name"],"../uploads/".$_FILES["myfile"]["name"]))
{ $filepath = "../uploads/".$_FILES["myfile"]["name"];
    $fileErr = "File Uploaded";
}

else
$fileErr = 'Upload Error';
$formdata = array(
    'firstname'=>$_POST["fname"],
    'lastname'=>$_POST["lname"],
    'age'=>$_POST["age"],
    'pass'=>$_POST["pass"],
    'email'=>$_POST["email"],
    'language'=>$Language,
    'designation' => $designation,
    'filepath'=>$filepath
);
$existingdata = file_get_contents('../Data/data.json');
$tempJSONdata = json_decode($existingdata);
$tempJSONdata[] =$formdata;


$jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
if(file_put_contents("../Data/data.json",$jsondata))
{
    echo 'Data Successfully Saved';
}
else
echo 'No Data Saved';

}
?>