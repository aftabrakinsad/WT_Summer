<?php
 
 
 session_start();
    if(isset($_POST['login']))
 
    {
 
        $username= $_POST['username'];
 
        $password = $_POST['password'];
 
 
 
        if($username != "" && $password != "")
 
        {
 
            if($_SERVER["REQUEST_METHOD"] == "POST")
 
            {
 
                $f = 0;
 
                $userdata = file_get_contents('../Data/userregistrationdata.json');
 
                $userdata_array = json_decode($userdata, true);
 
 
 
                if($userdata_array != NULL)
 
                {
 
                    foreach($userdata_array as $user)
 
                    {
 
                        if($user["username"] == $_POST["username"] &&    $user["password"] == $_POST["password"])
 
                        {
 
                            $_SESSION['username'] = $user["username"];
 
                            $_SESSION['password'] = $user["password"];
 
 
 
                                if (!empty($_POST["remember"]))
 
                                {
 
                                setcookie("username404", $_SESSION['username'], time() + 86000); # fault maybe
 
                                setcookie("password", $_SESSION['password'], time() + 86000);
 
                                echo "";
 
                                }
 
                            header("location: ../View/userhomepage.php");
 
                            }
 
                        }
 
                    }
 
                    if ($f == 0)
 
                    {
 
                        echo "Enter Username and password currectly!";
 
                    }
 
                    else
 
                    {
 
                        $userinfo=array(
 
                            'username: '=>$username,
 
                            'password: '=>$password
 
                        );
 
                        $userdata_array[] = $userinfo;
 
                        $userinfoencode = json_encode($userdata_array, JSON_PRETTY_PRINT);
 
                        if(file_put_contents("../Data/data.json", $userinfoencode))
 
                        {
 
                            echo "";
 
                        }
 
                        else
 
                        {
 
                            echo "";
 
                        }
 
                    }
 
            }
 
        }
 
        else
 
        {
 
            echo "Please enter Username and Password to log in";
 
        }
 
    }
 
if(isset($_POST['registration']))
 
{
 
    header("location:../view/usersignup.php");
 
}
 
 
 
?>