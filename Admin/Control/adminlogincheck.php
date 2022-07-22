<?php
    session_start();
    if(isset($_POST['submit']))
    {
        $uname = $_POST['uname'];
        $password = $_POST['password'];

        if($uname != "" && $password != "")
        {
            if($_SERVER["REQUEST_METHOD"] == "POST")
            {
                $f = 0;
                $admindata = file_get_contents('../Data/adminregistrationdata.json');
                $admindata_array = json_decode($admindata, true);
                if($admindata_array != NULL)
                {
                    foreach($admindata_array as $user)
                    {
                        if($user["username"] == $_POST["uname"] && $user["password"] == $_POST["password"])
                        {
                            $_SESSION['uname'] = $user["username"];
                            $_SESSION['password'] = $user["password"];

                        if (!empty($_POST["remember"]))
                        {
                            setcookie("username", $_SESSION['uname'], time() + 86000);
                            setcookie("password", $_SESSION['password'], time() + 86000);
                            echo "";
                        } else
                        {
                            setcookie("username", "");
                            setcookie("password", "");
                            echo "";
                        }
                        header("location: ../view/adminhomepage.php");
                        }
                    }
                }
                if ($f == 0) {
                    echo "Enter Username and password currectly!";
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
        header("location: ../View/adminregistration.php");
    }
?>