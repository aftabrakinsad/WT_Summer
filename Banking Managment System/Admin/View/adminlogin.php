<?php

include('../Control/adminlogincheck.php');

if (isset($_SESSION['uname'])) {
    header("location: ../View/adminhomepage.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Log in</title>
</head>

<body bgcolor="skyblue">
    <center>
        <header>
            <h1>
                <font color="red">City Bank Limited.</font>
            </h1>
            <p>
                <strong>
                    <font color="red">Login As An Admin</font> <br>
                </strong>
            </p>

            <h1>Welcome to the bank <?php include('../Control/cookie.php'); ?></h1>
            <br><br><br><br><br><br><br><br><br>
        </header>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
            <center>
                <table>
                    <tr>
                        <td>
                            <label for="uname">
                                <font color="darkblue">Username:</font>
                                <input type="text" name="uname">
                                <br><br>
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>
                                <font color="darkblue">Password :</font>
                                <input type="password" name="password">
                                <br><br>
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
                                <input type="submit" name="registration" value="Request">
                            </center>
                        </td>
                    </tr>
                    <tr>

                        <td>
                            <center>
                                <br><br><br><br><a href="http://localhost/Github Repo/WT_Summer/Banking Managment System/homepage.php">
                                    <font color="black"><strong>Return to homepage Homepage</strong></font>
                                </a><br><br>
                            </center>

                        </td>

                    </tr>
                </table>
            </center>
        </form>
    </center>
</body>

</html>