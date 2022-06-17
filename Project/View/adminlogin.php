<?php

include('../Control/adminlogincheck.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Log in</title>
</head>

<body bgcolor="#D1CECD">
    <center>
        <header>
            <h1>
                <font color="red">City Bank Limited.</font>
            </h1>
            <p><strong>
                    <font color="red">Login As An Admin</font>
                </strong></p>
            <br><br><br><br><br><br><br><br><br><br><br><br>
        </header>

        <form action="" <?php echo $_SERVER['PHP_SELF'];?> method="POST" enctype="multipart/form-data">
        <?php include '../Control/cookie.php';?>
            <center>
                <table>
                    <tr>
                        <td>
                            <label>
                                <font color="darkblue">Username:</font>
                                <input type="text" id="uname" name="uname" value="<?php if(isset($_COOKIE['uname'])){echo $_COOKIE['uname'];} ?>"> <br><br>
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>
                                <font color="darkblue">Password :</font>
                                <input type="password" name="password" value="<?php if(isset($_COOKIE['password'])){echo $_COOKIE['password'];}?>"> <br><br>
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="remember" id="remember">
                            <label for="remember">
                                <b>Remember Me</b>
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <center>
                                <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <input type="submit" name="submit" value="Login">
                                <input type="submit" name="registration" value="Registration">
                            </center>
                        </td>
                    </tr>
                </table>
            </center>
        </form>
    </center>
</body>

</html>