<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if(empty($_SESSION["username"])) 
{
header("Location: managerlogin.php"); // Redirecting To Home Page
}

?>
<?php
include("../control/managerprocess.php");
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body  bgcolor="skyblue">
    <center><h1>Hello<?php include('../control/cookie.php');?></h1></center>
    <center>
        <h1>Welcome to XYZ Bank Limited.</h1>
        <p><strong>To do further work, please register.</strong></p>
        <br><br><br><br>
        <form action="" method="POST" enctype="multipart/form-data">
            <center>
                <table>
                    <tr>
                        <td>
                            <label>
                                Firstname:
                            </label>
                        </td>
                        <td> <input type="text" name="fname" placeholder="Enter your firstname"></td><td> <?php echo $nameErr; ?></td>
                    </tr>
                    <tr>
                        <td>
                        <label>Lastname: </label> 
                        </td>
                        <td>
                        <input type="text" name="lname" placeholder="Enter your lastname"> <td> <?php echo $name2Err; ?></td>
                        </td>
                    </tr>
                    <tr><td><label>Gender: </label></td>
                        <td>
                            <input type="radio" name="gender" value="male">Male
                            <input type="radio" name="gender" value="female">Female
                            <input type="radio" name="gender" value="others">Others <td><?php echo $genderErr;?> </td>
                    </td>
                    </tr>
                    <tr>
                        <td><label>Date of Birth:</label></td>
                        <td><input type="date" name="dateofbirth"></td><td><?php echo $dobErr;?> </td>
                    </tr>
                    <tr>
                        <td><label>Father's Name: </label></td>
                        <td><input type="text" name="fathername" placeholder ="Enter your father's name"></td><td><?php echo $fnameErr; ?></td>
                    </tr>
                    <tr>
                        <td><label>Mother's Name: </label></td>
                        <td><input type="text" name="mothername" placeholder ="Enter your mother's name"></td><td><?php echo $mnameErr; ?></td>
                    </tr>
                    
                    <tr>
                        <td>
                        <label>Username: </label>
                        </td>
                        <td>
                        <input type="text" name="uname" placeholder="Enter your username">  <td><?php echo $unameErr; ?></td>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <label>Password: </label> 
                        </td>
                        <td>
                        <input type="text" name="pass" placeholder ="Enter New Password">  <td> <?php echo $passErr; ?></td> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <label>Confirm Password: </label> 
                        </td>
                        <td>
                        <input type="text" name="cpass" placeholder ="Enter The Password Again"> <td> <?php echo $cpassErr; ?></td> 
                        </td>
                    </tr>
                    <tr>
                    <td> <label>Present Address: </label></td>
                    <td><input type="text" name="street" placeholder="Enter street no: ">
                    <label for="city">Choose City:</label>
                    <select name="city" id="city">
                    <option value="DHAKA">DHAKA</option>
                    <option value="CHATTOGRAM">CHATTOGRAM</option>
                    <option value="KHULNA">KHULNA</option>
                    <option value="SYLHET">SYLHET</option>
                    <option value="RAJSHAHI">RAJSHAHI</option>
                    <option value="NARAYANGANJ">NARAYANGANJ</option>
                    </select>
                </td>
            
                    <td>
                    <label for="postal">Choose Postal Code:</label> 
                    <select name="postal" id="postal">POSTAL FOR
                    <option value="1211">1211</option>
                    <option value="7899">7899</option>
                    <option value="2899">2899</option>
                    <option value="8002">8002</option>
                    <option value="1900">1900</option>
                    <option value="3399">3399</option>
                    </select>
                    </td><td><?php echo  $preaddressErr;?></td>
                    </tr>
                   
                    <tr>
                        <td> <label>Email: </label></td>
                        <td><input type="email" name="email"placeholder="Enter your email"></td><td> <?php echo $emailErr; ?> </td>
                    </tr>
                    <tr>
                        <td> <label>NID Number: </label></td>
                        <td><input type="text" name="nid" placeholder="Enter your valid nid"></td><td> <?php echo $nidErr; ?> </td>
                    </tr>
                    <tr>
                        <td><label>Phone: </label></td>
                        <td><input type="text" name="phone" placeholder="01xxx-xxxxxx" ></td><td> <?php echo $phnErr; ?> </td>
                    </tr>
                    <tr>
                    <td><label>Curriculum Vitae: </label></td>
                    <td><input type="file"name="cv" accept="pdf/*"></td> <td> <?php echo $fileErr; ?> </td>

                    </tr>
                    <tr>
                        <td><label>Image: </label></td>
                        <td> <input type="file"  name="img" accept="image/*"></td>  <td> <?php echo $imgErr; ?> </td>
                    </tr>
                    <tr>
                    <td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        </td>
                        <td>

                        <input type="submit" name="Submit" value="Register">
                        </td>
                        <td><input type="reset" value="Reset"></td>
                       
                        
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                        <?php echo $datasave; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <a href="ViewInformation.php">View Registered Managers
                        </td>
                    </tr>
                    <tr>
                        <td>Do you want to <a href="../control/logout.php">logout</td>
                    </tr>
                    <tr>
                    <br>
                        <td><br><br><br><br><br><br><br></td>
                    </tr>
                </table>
            </center>
        </form>
    </center>
</body>
</html>