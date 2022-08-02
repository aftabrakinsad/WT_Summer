<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/CSS" href="../CSS/forgetpassword.css">
    <title>Change Your Password</title>
</head>

<body>
    <header>
        <h1 class="h1">City Bank Limited.</h1>
    </header>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">

        <p class="h2">Here you go to change your password</p>

        <table>
            <tr>
                <td>
                    <input type="password" name="newpassword" placeholder="Enter new password">
                    <input type="password" name="confirmpassword" placeholder="Confirm your password">
                </td>
            </tr>

            <tr>
                <td>
                    <input class="otpbtn" type="submit" name="passwordsubmission" value="Change">
                </td>
            </tr>
        </table>

    </form>

</body>

</html>