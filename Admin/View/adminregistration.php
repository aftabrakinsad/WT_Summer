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
    <title>Admin Registration</title>
</head>

<body>
    <h1>Welcome to City Bank Limited.</h1>
    <p><strong>To do further work, please register.</strong></p>

    <form action="" method="POST" enctype="multipart/form-data">
        <table>

            <tr>
                <td>
                    <label>Firstname:</label>
                    <input type="text" name="fname" placeholder="Enter your Firstname">
                    <span><?php echo $fnameErr; ?></span>
                </td>
            </tr>

            <tr>
                <td>
                    <label>Lastname:</label>
                    <input type="text" name="lname" placeholder="Enter your Lastname">
                    <span><?php echo $lnameErr; ?></span>
                </td>
            </tr>

            <tr>
                <td>
                    <label>Username:</label>
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
                    <label>Email:</label>
                    <input type="email" name="email" placeholder="Enter your Email">
                    <span><?php echo $emailErr; ?></span>
                </td>
            </tr>

            <tr>
                <td>
                    <label>NID:</label>
                    <input type="text" name="nid" placeholder="Enter your valid NID">
                    <span><?php echo $nidErr; ?></span>
                </td>
            </tr>

            <tr>
                <td>
                    <label>Phone:</label>
                    <input type="tel" name="phone" placeholder="+880-1XXXXXXXXX">
                    <span><?php echo $phoneErr; ?></span>
                </td>
            </tr>

            <tr>
                <td>
                    <label>Password:</label>
                    <input type="password" name="password" placeholder="Enter your Password">
                    <span><?php echo $passwordErr; ?></span>
                </td>
            </tr>

            <tr>
                <td>
                    <label>Confirm Password:</label>
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
                    <input type="submit" name="submit" value="Request">
                </td>
            </tr>

        </table>
    </form>
</body>

</html>