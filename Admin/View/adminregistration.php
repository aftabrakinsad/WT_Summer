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

<body>

    <header>
        <h1>Welcome to City Bank Limited.</h1>
        <p><strong>To do further work, please register.</ strong>
        </p>
    </header>

    <form action="" method="POST" enctype="multipart/form-data">
        <h2 class="h2">Application Form</h2>
        <table class="container">

            <tr>
                <td>
                    <input type="text" name="fname" placeholder="Enter your Firstname">
                    <span><?php echo $fnameErr; ?></span>
                </td>
            </tr>

            <tr>
                <td>
                    <input type="text" name="lname" placeholder="Enter your Lastname">
                    <span><?php echo $lnameErr; ?></span>
                </td>
            </tr>

            <tr>
                <td>
                    <input type="text" name="uname" placeholder="Enter your Username">
                    <span><?php echo $unameErr; ?></span>
                </td>
            </tr>

            <tr>
                <td>
                    <label>Gender:</label>
                    <input type="radio" name="gender" value="male">Male
                    <input type="radio" name="gender" value="female">Female
                    <span><?php echo $genderErr; ?></span>
                </td>
            </tr>

            <tr>
                <td>
                    <input type="text" name="email" placeholder="Enter your Email">
                    <span><?php echo $emailErr; ?></span>
                </td>
            </tr>

            <tr>
                <td>
                    <input type="text" name="nid" placeholder="Enter your valid NID">
                    <span><?php echo $nidErr; ?></span>
                </td>
            </tr>

            <tr>
                <td>
                    <input type="text" name="phone" placeholder="+880-1XXXXXXXXX">
                    <span><?php echo $phoneErr; ?></span>
                </td>
            </tr>

            <tr>
                <td>
                    <input type="password" name="password" placeholder="Enter your Password">
                    <span><?php echo $passwordErr; ?></span>
                </td>
            </tr>

            <tr>
                <td>
                    <input type="password" name="cpassword" placeholder="Confirm Password"><br>
                    <span><?php echo $cpasswordErr; ?></span>
                </td>
            </tr>

            <tr>
                <td>
                    Please upload your picture
                    <input type="file" name="myfile">
                    <span><?php echo $fileErr; ?></span>
                </td>
            </tr>

            <tr>
                <td>
                    Please upload your cv
                    <input type="file" name="myfile">
                    <span><?php echo $fileErr; ?></span>
                </td>
            </tr>

            <tr>
                <td>
                    <input class="inputrequestbutton" type="submit" name="submit" value="Request">
                </td>
            </tr>

        </table>
    </form>
</body>

</html>