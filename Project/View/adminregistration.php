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

<body>
    <center>
        <h1>Welcome to City Bank Limited.</h1>
        <p><strong>To do further work, please register.</strong></p>
        <br><br><br><br><br><br><br><br>

        <form action="" method="POST" enctype="multipart/form-data">
            <center>
                <table>
                    <tr>
                        <td>
                            <center>
                                <label>
                                    <font>Firstname: </font>
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
                                <label>Lastname: </label>
                                <input type="text" name="lname" placeholder="Enter your lastname">
                                <?php echo $lnameErr; ?>
                                <br><br>
                            </center>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <center>
                                <label>Username: </label>
                                <input type="text" name="uname" placeholder="Enter your username">
                                <?php echo $unameErr; ?>
                                <br><br>
                            </center>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <center>
                                <label>Email: &nbsp &nbsp &nbsp</label>
                                <input type="email" name="email" placeholder="Enter your email">
                                <?php echo $emailErr; ?>
                                <br><br>
                            </center>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <center>
                                <label>NID: &nbsp; &nbsp; &nbsp; &nbsp;</label>
                                <input type="text" name="nid" placeholder="Enter your valid nid">
                                <?php echo $nidErr; ?>
                                <br><br>
                            </center>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <center>
                                <label>Phone: &nbsp; &nbsp; &nbsp;</label>
                                <input type="text" name="phone" placeholder="Enter your phone number">
                                <?php echo $phoneErr; ?>
                                <br><br>
                            </center>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <center>
                                Please upload your picture
                                <input type="file" name="myfile"><br>
                                <?php echo $fileErr; ?>
                                <br>
                            </center>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <center>
                                <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <input type="submit" name="submit" value="Register">
                            </center>
                        </td>
                    </tr>
                </table>
            </center>
        </form>
    </center>
</body>

</html>