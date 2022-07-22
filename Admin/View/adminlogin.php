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
    <link rel="stylesheet" type="text/CSS" href="../CSS/adminlogin.css">
    <title>Admin Log in</title>
</head>

<body class="bodyimage">
    <header>
        <h1>City Bank Limited.</h1>
        <h2>Welcome to the bank <?php include('../Control/cookie.php'); ?></h2>
    </header>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
        <h2 class="h2">Admin Login</h2>
        <table class="container">

            <tr>
                <td>
                    <label for="uname"> <input type="text" name="uname" placeholder="Username"><br>
                        <span id="denger"><?php echo $usernameerror; ?></span>
                    </label>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="pass"> <input type="password" name="pass" placeholder="Password"><br>
                        <span id="denger"><?php echo $passworderror; ?></span>
                    </label>
                </td>
            </tr>

            <tr>
                <td>
                    <span id="denger"><?php echo $remembererror; ?></span><br>
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember"><b>Remember Me</b></label>
                </td>
            </tr>

            <tr>
                <td>
                    <input class="inputbutton" type="submit" name="submit" value="Login">
                </td>
            </tr>

            <tr>
                <th id="uniqueuse">
                    <a id="denger" href="#">Forget Password?</a><br><br>
                    <a id="primary" href="adminregistration.php">Apply Admin</a>
                </th>
            </tr>
        </table>

    </form>

</body>

</html>