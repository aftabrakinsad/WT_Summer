<?php
 
include("../Control/process1.php");
 
?>
 
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Sign Up</title>
</head>
 
<body bgcolor="skyblue">
    <center>
        <h1>Welcome to the City Bank Limited</h1><br>
        <h3><p>Please Signup to this from</p></h3><br><br>
 
        <form action="" method="POST" enctype="multipart/form-data">
            <center>
                <table>
                    <tr>
                        <td> 
                          
                               <label> Username: &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
                                <input type="text" name="username" placeholder="Enter your Username">
                                <?php echo $usernameErr; ?>
                                <br><br>
                          
                        </td>
                    </tr>
 
                    <tr>
                        <td>
                            <label>Date of Birth: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="dateofbirth" name="dateofbirth" placeholder="Enter your date of birth">
                            <?php echo $dobErr; ?>
                            <br><br>
                        </td>
                    </tr>
 
                    <tr>
                        <td>
                            <label>Phone number: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="phonenumber" name="phonenumber" placeholder="Enter your phone number">
                            <?php echo $phoneErr; ?>
                            <br><br>
                        </td>
                    </tr>
 
                    <tr>
                        <td>
                            <label>NID: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="nid" name="nid" placeholder="Enter your nid">
                            <?php echo $nidErr; ?>
                            <br><br>
                        </td>
                    </tr>
 
                    <tr>
                        <td>
                            <label>Email: &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="email" name="email" placeholder="Enter your email">
                            <?php echo $emailErr; ?>
                            <br><br>
                        </td>
                    </tr>
 
                    <tr>
                        <td>
                            <label>
                                Select bank account type :
                            </label>
                            <input type="checkbox" name="account1">Checking accounts
                            <input type="checkbox" name="account2"> Savings accounts
                            <input type="checkbox" name="account3"> Certificate of deposit accounts.
                        </td>
                    </tr>
 
                    <tr>
                        <td>
                            <label> Bank user id :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="userid" name="userid" placeholder="Enter your userid">
                            <?php echo $useridERR; ?>
                            <br><br>
                        </td>
                    </tr>
 
                    <tr>
                        <td>
                            <label>Password:&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="password" name="password" placeholder="Enter your password">
                             <?php echo $passwordErr; ?>
                            <br><br>
                        </td>
                    </tr>
 
                    <tr>
                        <td>
                            <label>Confirm password:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="password" name="cpassword" placeholder="Confirm your password">
                            <?php echo $cpasswordErr; ?>
                            <br><br>

                        </td>
                    </tr>
 
                    <tr>
                        <td>
                            <label>Attach your image :&nbsp;&nbsp;&nbsp;</label>
                            <input type="file" name="myfile">
                        </td>
                    </tr>
 
                    <tr>
                        <td>
                            <label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </label>
                         <input type="submit"  name="submit" value="Submit">
                        </td>
                    </tr>
 
                    <tr>
                        <td>

                        <label>   </label>
                            <input type="submit" name="login" value="Login">
                        </td>
                    </tr>
                </table>
            </center>
        </form>
    </center>
</body>
 
</html>