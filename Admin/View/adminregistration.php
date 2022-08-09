<?php

session_start();

if (isset($_SESSION['username']))
{
    header("location: ../View/adminlogin.php");
}

@include('../Control/adminregistrationcheck.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/CSS" href="../CSS/adminregistration.css">
    <title>Admin Application Form</title>
</head>

<body class="bodycolor">

    <header>
        <?php

        @include("../View/header.php");

        ?>
    </header>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data" onsubmit="return form_check_adminregistration()">

        <h2 class="h2" id="h2">Application Form</h2>
        <table class="container">

            <tr>
                <td>
                    <input type="text" name="fname" id="fname" onkeyup="fnamecheck_adminregistration()" placeholder="Firstname">
                    <p id="fnameerr"></p>
                </td>

                <td>
                    <input type="text" name="lname" id="lname" onkeyup="lnamecheck_adminregistration()" placeholder="Lastname">
                    <p id="lnameerr"></p>
                </td>
            </tr>

            <tr>
                <td>
                    <input type="text" name="uname" id="uname" onkeyup="usernamecheck_admin()" placeholder="Username"> <br>
                    <p id="nameerr"></p>
                </td>

                <td>
                    <input type="text" name="email" id="email" onkeyup="email_adminregistration()" placeholder="Email">
                    <p id="emailerr"></p>
                </td>
            </tr>

            <tr>
                <td>
                    <input type="text" name="nid" id="nid" onkeyup="nid_adminregistration()" placeholder="Valid NID">
                    <p id="niderr"></p>
                </td>

                <td>
                    <input type="text" name="phone" id="phone" onkeyup="phone_adminregistration()" placeholder="+880-1XXXXXXXXX">
                    <p id="phoneerr"></p>
                </td>
            </tr>

            <tr>
                <td>
                    <input type="password" name="password" id="pass" onkeyup="password_adminregistration()" placeholder="Password">
                    <p id="passerr"></p>
                </td>

                <td>
                    <input type="password" name="cpassword" id="cpass" onkeyup="confirm_password_adminregistration()" placeholder="Confirm Password">
                    <p id="cpasserr"></p>
                </td>
            </tr>

            <tr class="p">
                <td>
                    Please upload your picture
                    <input type="file" name="picture" id="picture" onkeyup="picture_adminregistration()">
                    <p id="pictureerr"></p>
                </td>

                <td>
                    Please upload your cv
                    <input type="file" name="cv">
                </td>
            </tr>

        </table>

        <table class="container">

            <tr>
                <td id="denger">
                    <?php

                    echo $fnameerr;
                    echo $lnameerr;
                    echo $unameerr;
                    echo $unameerr1;
                    echo $emailerr;
                    echo $niderr;
                    echo $niderr1;
                    echo $phoneerr;
                    echo $passworderr;
                    echo $passworderr1;
                    echo $passworderr2;
                    echo $passworderr3;
                    echo $fileerr;
                    echo $fileerr1;
                    echo $imageerr;
                    echo $imageerr1;
                    echo $signuperr;
                    echo $registrationfailed;

                    ?>
                    <?php
                    echo "<p id='success'>$registrationsucess</p>"
                    ?>

                    <br>
                    <br>

                    <input class="inputrequestbutton" type="submit" name="submit" id="submit" value="Apply">

                    <a class="inputrequestreturn" href="../View/adminlogin.php" name="return">Back to Login</a>
                </td>
            </tr>

        </table>
    </form>

    <script src="../JS/adminregistration.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</body>

</html>