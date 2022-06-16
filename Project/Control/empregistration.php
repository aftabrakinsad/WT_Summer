<?php

$FirstnameErr = "";
$LastnameErr = "";
$UsernameErr="";
$passwordErr = "";
$confirmPasswordErr="";
$emailErr = "";
$PhoneErr="";
$genderErr="";
$fileErr = "";
$NIDErr="";
$filepath ="";


/*****     ****/

if (isset($_POST['submit']))    

{

        $FirsName = $_POST["firstname"];
        $LastName = $_POST["lastname"];
        $Password = $_POST["password"];
        $ConfirmPassword = $_POST["conformpassword"];
        $Email = $_POST["email"];
        $Username=$_POST["username"];
        $Phone=$_POST["phone"];
        $NID=$_POST["nid"];   
        //$Gender=$_POST["gender"];    

  //*********************************************************** */
/*****  1st name   ****/
        if (empty($FirsName))
        {
            $FirstnameErr ='Please Enter First Name';
        }
          else if(is_numeric($FirsName))
          {
            $FirstnameErr ='First Name can not be numeric';
          }

        
          else if (!preg_match("/^[a-zA-Z-' ]*$/",$FirsName)) 
           {
             $FirstnameErr = "Only letters and white space allowed";
           }
    

             else
        {
            echo 'Your First Name is ' . $FirsName;
        }
        echo '<br>';


       

/*****  Uname   ****/

        if (empty($Username))
        {
            $UsernameErr ='Please Enter User Name';
        }
          else if(!is_string($Username))
          {
            $UsernameErr ='User Name must be string';
          }
             else
        {
            echo 'Your user Name is ' . $Username;
        }
        echo '<br>';


        /*****  Last name   ****/

        if (empty ($LastName))
       {
        $LastNameErr = 'Please Enter Last Name';
        }
        else if(is_numeric($LastName))
       {
        $LastNameErr ='Last Name can not be numeric';
       }

       else if (!preg_match("/^[a-zA-Z-' ]*$/",$LastName)) 
           {
             $LastNameErr = "Only letters and white space allowed";
           }
       else
       {
        echo 'Your Last Name is ' .$LastName;
       }

        echo '<br>';
      

        /***** Password    ****/

        if (strlen($Password) < 8 ||empty($Password)) {
            $passwordErr =  'Password Must Contain 8 character!';
        } 
        
        else if(ctype_lower($Password ))
		{
			if(ctype_upper($Password))
			{

			}
			else 
			{
				$passwordErr= "Password Must contain upper case and lower case";
               
			}

		}
        
        else if(is_numeric($Password))
        {
            $passwordErr= "Password Must contain number-letter-special Character";
            
        }
        else if (!str_contains($Password,'?'))
        {
		
            $passwordErr= "Password Must contain ? and #";
			
		}
        else if (!str_contains($Password,'#'))
        {
			
			$passwordErr= "Password Must contain ? and #";
			
		}
        else
        {
            echo 'password is valid';
        }


        /*****  conferm pass   ****/

        if(empty($ConfirmPassword))
        {
            $confirmPasswordErr="Confirm Password Cannot be empty !!!";
            
        }

       else if
        
        (($ConfirmPassword != $Password))
         {
            $confirmPasswordErr = 'Oops! Password did not match! Try again.';
        } 
        else
         {
            echo 'password is match';
         }


         //*****phone ******* */

         if(empty($Phone))
         {
          $PhoneErr="Phone Must Required !!";
           
         }


           else if(!is_numeric($Phone ))
         {
            
           $PhoneErr="Phone must be numeric number ";
         }

        else if (strlen($Phone) < 11)
        {
            $PhoneErr="Phone must be 11 digits ";

        }
        else
       {
        echo 'Your Phoone number is ' . $Phone;
       }
       
/*****   NID  ****/
       
       if(empty($NID))
       {
        $NIDErr="NID Must Required !!";
         
       }


         else if(!is_numeric($NID ))
       {
          
         $NIDErr="NID must be numeric number ";
       }
       else if(is_float($NID))
       {
          
         $NIDErr="NID can't be float number ";
       }
       
       else if (preg_match("/^[a-zA-Z-' ]*$/",$FirsName)) 
       {
         $FirstnameErr = "NID can't be alphabate ";
       }
/*
       else if(is_string($NID))
       {
          
         $NIDErr="NID can't be alphabate ";
       }*/


      else
     {
      echo 'Your NID number is ' . $NID;
     }

/*****  email   ****/

        if(empty($Email)  )
        {
            $emailErr = "You must enter email";
        }
        else if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
        { $emailErr = "Wrong Pattern Email";}
        else{
          echo "Your email is ".$Email;
          echo '<br>';
        }


       /* if(isset($Gender))
        {
            $genderErr='You have not selected any Designation';
        }
       */
        if (
            isset($Gender) )
            {
            if ("male"==$Gender) {
                $genderErr = 'You selected male';
             
            }
            if ($Gender=='female') {
                $genderErr = 'You selected female';
             
            }
            
        } else {
            $genderErr = ' You have not selected any Gender';
        }
     

/*****  file   ****/


      echo $_FILES["myfile"]["name"];

       if(move_uploaded_file($_FILES["myfile"]["tmp_name"],"../uploads/".$_FILES["myfile"]["name"]))
         { $filepath = "../uploads/".$_FILES["myfile"]["name"];
    $fileErr = "File Uploaded"; 
         }else
    {$fileErr = 'No file is upload';} 


  /*****  json part   ****/  

    $formdata = array(
    'firstname'=>$_POST["firstname"],
    'username'=>$_POST["username"],
    'lastname'=>$_POST["lastname"],
    'phone'=>$_POST["phone"],
    'email'=>$_POST["email"],
    'password'=>$_POST["password"],
   'conformpassword'=>$_POST["conformpassword"],
    //'gender'=>$_POST["gender"],
    'nid'=>$_POST["nid"],
    'filepath'=>$filepath);



$existingdata = file_get_contents('../Data/empregistrationdata.json');
$tempJSONdata = json_decode($existingdata);
$tempJSONdata[] =$formdata;


$jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
if(file_put_contents("../Data/empregistrationdata.json",$jsondata))
{
    echo 'Data Successfully Saved';
}
else
echo 'No Data Saved';

$data = file_get_contents("../Data/empregistrationdata.json");
$mydata = json_decode($data);
foreach($mydata as $myobject)
     {
     foreach($myobject as $key=>$value)
    {
        echo $key." => ".$value."<br>";
    }
    }

  }
?>
