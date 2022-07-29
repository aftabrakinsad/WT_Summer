<?php

session_start();

if (isset($_SESSION['username'])) {
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
        <h1>Welcome to City Bank Limited.</h1>
        <p id="info"><strong>Use correct information to apply </strong>
        </p>
    </header>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">

        <h2 class="h2">Application Form</h2>
        <table class="container">

            <tr>
                <td>
                    <input type="text" name="fname" placeholder="Firstname">
                </td>

                <td>
                    <input type="text" name="lname" placeholder="Lastname">
                </td>
            </tr>

            <tr>
                <td>
                    <input type="text" name="uname" placeholder="Username"> <br>
                </td>

                <td>
                    <input type="text" name="email" placeholder="Email">
                </td>
            </tr>

            <tr>
                <td>
                    <input type="text" name="nid" placeholder="Valid NID">
                </td>

                <td>
                    <input type="text" name="phone" placeholder="+880-1XXXXXXXXX">
                </td>
            </tr>

            <tr>
                <td>
                    <input type="password" name="password" placeholder="Password">
                </td>

                <td>
                    <input type="password" name="cpassword" placeholder="Confirm Password">
                </td>
            </tr>

            <tr>
                <td>
                    Please upload your picture
                    <input type="file" name="picture">
                    </p>
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

                    ?>

                    <br>
                    <br>

                    <input class="inputrequestbutton" type="submit" name="submit" value="Apply">
                </td>

                <td>
                    <input class="inputrequestreturn" type="submit" name="return" value="Login">
                </td>
            </tr>

        </table>
    </form>
</body>

</html>