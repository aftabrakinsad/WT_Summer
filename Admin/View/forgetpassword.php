<?php

@include("../Control/userexits.emailconfirmation.php");


if (isset($_SESSION['email'])) {
    //header("location: ../View/passwordchange.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/CSS" href="../CSS/forgetpassword.css">
    <title>Forgot Password</title>
</head>

<body>
    <header>
        <h1 class="h1">City Bank Limited.</h1>
    </header>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">

        <h2 class="h2">Forgot Password</h2>
        <p id="info">Enter your Email</p>

        <input type="email" name="email" placeholder="Enter email">
        <!-- <input type="password" name="pass" placeholder="New Password"> -->
        <!-- <input type="password" name="cpass" placeholder="Confirm password"> -->



        <!-- $fulll = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; -->

        <!-- if (strpos($fulll, "User=not_found") == true) -->
        <!-- { -->
        <!-- echo "<p id='info'>User Not Found</p>"; -->
        <!-- } -->
        <!-- else if (strpos($fulll, "info=empty") == true) -->
        <!-- { -->
        <!-- echo "<p id='denger'>You didn't fill all the fields</p>"; -->
        <!-- } -->
        <!-- else if (strpos($fulll, "email=empty") == true) -->
        <!-- { -->
        <!-- echo "<p id='denger'>Please enter your email</p>"; -->
        <!-- } -->
        <!-- else if (strpos($fulll, "new_password=empty")) -->
        <!-- { -->
        <!-- echo "<p id='denger'>Please enter your new password</p>"; -->
        <!-- } -->

        <!-- echo "<p id='success'></p>" . $passerr; -->

        <!--  -->
        <?php
        echo $emailerr;
        echo $emailerr1;
        ?>

        <table id="table">
            <tr>
                <td>
                    <input class="inputbutton" type="submit" name="Change" value="Change">
                    <input class="inputrequestreturn" type="submit" name="return" value="Back to Login">
                </td>
            </tr>
        </table>


    </form>
</body>

</html>