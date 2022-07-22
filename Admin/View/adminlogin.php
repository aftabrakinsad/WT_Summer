<?php

if (isset($_SESSION['uname'])) {
    header("location: ../View/adminhomepage.php");
}

@include('../Control/adminlogincheck.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Log in</title>
</head>

<body>
    <header>
        <h1>City Bank Limited.</h1>
        <p><strong>Login As An Admin</strong></p>
        <h1>Welcome to the bank <?php include('../Control/cookie.php'); ?></h1>
    </header>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
        <table>

            <tr>
                <td>
                    <label for="uname">Username:
                        <input type="text" name="uname"><br>
                        <span><?php echo $usernameerror; ?></span>
                    </label>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="pass">Password:
                        <input type="password" name="pass"><br>
                        <span><?php echo $passworderror; ?></span>
                    </label>
                </td>
            </tr>

            <tr>
                <td>
                    <span><?php echo $remembererror;?></span><br>
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember"><b>Remember Me</b></label>
                </td>
            </tr>

            <tr>
                <td>
                    <input type="submit" name="submit" value="Login">
                    <input type="submit" name="registration" value="Request">
                </td>
            </tr>

            <tr>
                <td>
                    <a href="http://localhost/WT_Summer/Banking%20Managment%20System/homepage.php">
                        <strong>Return to Homepage</strong>
                    </a>
                </td>
            </tr>

        </table>
    </form>
</body>

</html>