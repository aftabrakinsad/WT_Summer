<?php

session_start();
if (isset($_SESSION['username'])) {
    header("location: ../View/adminlogin.php");
}

?>

<?php

include('../Control/adminregistrationcheck.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
</head>

<body bgcolor="skyblue">
    <center>
        <h1>Welcome to City Bank Limited.</h1>
        <p><strong>To do further work, please register.</strong></p>
        <br><br>

        <form action="" method="POST" enctype="multipart/form-data">
            <center>
                <table>
                    <tr>
                        <td>
                            <center>
                                <label>
                                    <font>Firstname: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</font>
                                </label>
                                <input type="text" name="fname" placeholder="Enter your firstname">
                                <?php echo $fnameErr; ?>
                                <br><br>
                            </center>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <center>
                                <label>Lastname: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
                                <input type="text" name="lname" placeholder="Enter your lastname">
                                <?php echo $lnameErr; ?>
                                <br><br>
                            </center>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <center>
                                <label>Username: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
                                <input type="text" name="uname" placeholder="Enter your username"><br>
                                <span>
                                    <font color="red">
                                        <?php echo $unameErr; ?>
                                    </font>
                                </span>
                                <br><br>
                            </center>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <center>
                                <label>Gender: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
                                <input type="radio" name="gender" value="male">Male
                                <input type="radio" name="gender" value="female">Female <br>
                                <font color="red">
                                    <?php echo $genderErr; ?>
                                </font>
                                </span>
                                <br><br>
                            </center>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <center>
                                <label>Email: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
                                <input type="email" name="email" placeholder="Enter your email">
                                <span>
                                    <font color="red">
                                        <?php echo $emailErr; ?>
                                    </font>
                                </span>
                                <br><br>
                            </center>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <center>
                                <label>NID: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
                                <input type="text" name="nid" placeholder="Enter your valid nid"> <br>
                                <span>
                                    <font color="red">
                                        <?php echo $nidErr; ?>
                                    </font>
                                </span>
                                <br><br>
                            </center>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <center>
                                <label>Phone: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
                                <input type="text" name="phone" placeholder="Enter your phone number">
                                <?php echo $phoneErr; ?>
                                <br><br>
                            </center>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <center>
                                <label>Password: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
                                <input type="password" name="password" placeholder="Enter your password"><br>
                                <span>
                                    <font color="red">
                                        <?php echo $passwordErr; ?>
                                    </font>
                                </span>
                                <br><br>
                            </center>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <center>
                                <label>Confirm Password: &nbsp;</label>
                                <input type="password" name="cpassword" placeholder="Confirm Password"><br>
                                <font color="red">
                                    <?php echo $cpasswordErr; ?>
                                </font>
                                <br><br>
                            </center>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <center>
                                Please upload your picture &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="file" name="myfile">
                                <?php echo $fileErr; ?>
                                <br><br>
                            </center>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <center>
                                <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <input type="submit" name="submit" value="Request">
                                <input type="submit" name="login" value="Login">
                            </center>
                        </td>
                    </tr>
                </table>
            </center>
        </form>
    </center>
</body>

</html>