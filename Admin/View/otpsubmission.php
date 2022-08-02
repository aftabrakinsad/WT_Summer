<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/CSS" href="../CSS/forgetpassword.css">
    <title>OTP via Email</title>
</head>

<body>
    <header>
        <h1 class="h1">City Bank Limited.</h1>
    </header>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">

        <h2 class="h2">Enter the correct OPT</h2>
        <table>
            <tr>
                <td>

                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="otp" placeholder="Enter otp">
                    <input class="otpbtn" type="submit" name="enterotp" value="Submit">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>