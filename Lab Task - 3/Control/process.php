<?php
  $nameErr = "";
  $name2Err = "";
  $AgeErr = "";
  $passErr = "";
  $emailErr = "";
  $fileErr = "";
  $desigErr ="";
  $LanErr ="";
  $Designation="";
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
    $Designation = $_POST["designation"];

    if (empty($name))
    {
        $nameErr = 'Please Enter First Name';
    }
    else if (is_numeric($name))
    {
        $nameErr = 'First Name can not be numeric';
    }
    else
    {
        echo 'Your First Name formet is valid';
    }

    echo '<br>';

    if (empty($name2))
    {
        $name2Err = 'Please Enter Last Name';
    }
    else if (is_numeric($name2))
    {
        $name2Err = 'Last Name can not be numeric';
    }
    else
    {
        echo 'Your Last Name formet is valid';
    }

    echo '<br>';

    if (empty($Age))
    {
        $AgeErr = 'Please Enter your Age ';
    }
    else if(!is_numeric($Age))
    {
        $AgeErr = "Age can't be a character";
    }
    else
    {
        echo 'Your Age formet is valid';
    }

    echo '<br>';

    if (isset($Designation))
    {
        if ("juniorprogrammer" == $Designation)
        {
            echo "You selected Junior Programmer";
        }
        else if ($Designation == 'seniorprogrammer')
        {
            echo "You selected Senior Programmer";
        }
        else if ($Designation == 'projectlead')
        {
            echo "You selected Project Lead";
        }
        else
        {
            $desigErr = 'You have not selected any Designation';
        }
    }

    echo '<br>';

    if (isset($_POST['PreferredLanguage1']) || isset($_POST['PreferredLanguage2']) || isset($_POST['PreferredLanguage3']))
    {
        if (isset($_POST['PreferredLanguage1']))
        {
            echo "Your Have Selected JAVA";
            $Language = $Language . $_POST['PreferredLanguage1'];
        }
        else if (isset($_POST['PreferredLanguage2']))
        {
            echo "Your Have Selected PHP";
            $Language =  $Language . '' . $_POST['PreferredLanguage2'];
        }
        else if (isset($_POST['PreferredLanguage3']))
        {
            echo "Your Have Selected C++";
            $Language = $Language . '' . $_POST['PreferredLanguage2'];
        }
        else
        {
            $LanErr = 'You Have not Selected a checkbox';
        }
    }

    echo '<br>';

    if (empty($email))
    {
        $emailErr = "You must enter email";
    }
    else if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email))
    {
        $emailErr = "Wrong Pattern Email";
    }
    else
    {
        echo "Your email formet is valid";
    }

    echo '<br>';

    if (strlen($pass) < 5)
    {
        $passErr =  'Enter a valid password';
    }
    else
    {
        echo 'password formet is valid';
    }

    echo '<br>';

    if(move_uploaded_file($_FILES["myfile"]["tmp_name"],"../uploads/".$_FILES["myfile"]["name"]))
    { 
        $filepath = "../uploads/".$_FILES["myfile"]["name"];
        $formdata = array(
            'firstname'=>$_POST["fname"],
            'lastname'=>$_POST["lname"],
            'age'=>$_POST["age"],
            'pass'=>$_POST["pass"],
            'email'=>$_POST["email"],
            'language'=>$Language,
            'designation'=>$_POST["designation"],
            'filepath'=>$filepath
        );
        $existingdata = file_get_contents('../data/data.json');
        $tempJSONdata = json_decode($existingdata);
        $tempJSONdata[] =$formdata;
        $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
        
        if(file_put_contents("../data/data.json",$jsondata))
        {
            echo "File Uploaded :- " . $_FILES["myfile"]["name"];
            echo '<br>';
            echo 'Data Successfully Saved';
            echo '<br><br><br>';
        }
        else
        {
            echo 'No Data Saved';
            echo '<br><br><br>';
        }

        echo "Showing saved data from json file(data.json) <br>";
        $data = file_get_contents("../data/data.json");
        $mydata = json_decode($data);
        foreach ($mydata as $myobject)
        {
            foreach ($myobject as $key => $value)
            {
                echo $key . " => " . $value . "<br>";
            }
        }
    }
    else
    {
        $fileErr = "Upload Error";
    }
}
