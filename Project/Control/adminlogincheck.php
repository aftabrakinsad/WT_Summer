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
                $remember = false;
                if(isset($_POST["remember"]))
                {
                    $remember = true;
                }

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
                        }

                        $f = 1;
                        if($remember)
                        {
                            setcookie("uname", $_POST["uname"],time()+86000);
                        }
                        header("location: ../view/adminhomepage.php");
                        }
                    }
                }
                if ($f == 0) {
                    echo "Enter Username and password currectly!";
                }
                else
                {
                $admininfo = array(
                    'uname' => $uname,
                    'password' => $password
                );

                $admindata_array[] = $admininfo;
                $admininfoencode = json_encode($admindata_array, JSON_PRETTY_PRINT);

                if (file_put_contents('../Data/adminlogindata.json', $admininfoencode))
                {
                    echo "";
                } else
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
        header("location: ../View/adminregistration.php");
    }
?>