<?php
include("../control/managerprocess.php");
?>
<?php
$temname="";
$tempass = "";
$remember = false;
if(isset($_POST["remember"]))
{
    $remember = true;
}

session_start();
 $error="";
// store session data
if (isset($_POST['submit'])) {
    $data = file_get_contents("../data/managerdata.json");
$mydata = json_decode($data);
foreach($mydata as $myobject)
     {
     foreach($myobject as $key[6]=>$value)
    {
       if($_POST['username']==$value)
       {$temname=$value;}
      
    } 
    foreach($myobject as $key[7]=>$value)
    {
        if($_POST['password']==$value)
       {$tempass=$value;}
       
    } 
    }
    if(empty($_POST['username'])||empty($_POST['password']))
    {
        $error ="Username or Password Empty";
    }
else if (!strcmp($_POST['username'],$temname)==0 || !strcmp($_POST['password'],$tempass)==0) {
$error = "Username or Password is invalid";

}

else if($_POST['username']==$temname && $_POST['password']==$tempass)
{$_SESSION["username"] = $_POST['username'];
    $_SESSION["password"] = $_POST['password'];
    if(!empty($_POST["remember"])){
        setcookie ("username",$_POST["username"],time()+ 86000);
        setcookie ("password",$_POST["password"],time()+ 86000);
        echo "";
    }
    else
    {
        setcookie("username","");
        setcookie("password","");
        echo "";
    }
    header("location: ../view/managerRegistration.php");
    
}
/*
else
{
    header("location: view/managerRegistration.php");
}
*/
 
}



?>