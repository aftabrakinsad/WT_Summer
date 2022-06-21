<?php

include("../Control/Process2.php");

if (isset($_SESSION['username'])) {
    header("location: ../View/userhomepage.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Sign In</title>
</head>

<body bgcolor="skyblue">
    <center>
        <h1>City Bank Limited</h1><br>
        <p>Please Login to the User</p><br>

        <form action="" method="POST" enctype="multipart/form-data">
            <center>
                <table>
                    <tr>
                        <td>
                            <lable>User name:</label>
                                <input type="username" name="username" placeholder="Enter username"><br><br>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Password:&nbsp;&nbsp; </label>
                            <input type="password" name="password" placeholder="Enter password"> <br><br>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="submit" name="login" value="Login">

                            <label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="submit" name="registration" value="Signup">
                        </td>
                    </tr>
                    <tr>

                        <td>
                            <center>
                                <br><br><br><br><a href="http://localhost/pro - Copy/homepage.php">
                                    <font color="black"><strong>Return to homepage Homepage</strong></font>
                                </a><br><br>
                            </center>

                        </td>

                    </tr>
                </table>
            </center>
    </center>
</body>

</html>