<?php
include("../Control/process.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form Using JSON</title>
</head>

<body>
    <?php

    echo $nameErr;
    echo $name2Err;
    echo $AgeErr;
    echo $desigErr;
    echo $LanErr;
    echo $emailErr;
    echo $passErr;
    echo $fileErr;
    
    ?>
    <h1> Website Registration Form </h1>
    <p>@<strong>Rakin Sad Aftab</strong></p>
    <form action="" method="post" enctype="multipart/form-data">

        <table>

            <tr>
                <td>
                    First Name :
                </td>
                <td>
                    <input type="text" name="fname" placeholder=" Enter First Name"> <br>
                </td>
            </tr>

            <tr>
                <td>
                    Last Name :
                </td>
                <td>
                    <input type="text" name="lname" placeholder="Enter Last Name"> <br>
                </td>
            </tr>

            <tr>
                <td>
                    Age :
                </td>
                <td>
                    <input type="text" name="age" placeholder="Enter Your Age"> <br>
                </td>
            </tr>

            <tr>
                <td>
                    Designation :
                </td>
                <td>
                    <input type="radio" name="designation" value="juniorprogrammer">Junior Programmer
                    <input type="radio" name="designation" value="seniorprogrammer">Senior Programmer
                    <input type="radio" name="designation" value="projectlead">Project Lead
                    <br>
                </td>
            </tr>

            <tr>
                <td>
                    Preferred Language :
                </td>
                <td>
                    <input type="checkbox" name="PreferredLanguage1" value="java">JAVA
                    <input type="checkbox" name="PreferredLanguage2" value="php"> PHP
                    <input type="checkbox" name="PreferredLanguage2" value="c++"> C++
                    <br>
                </td>
            </tr>

            <tr>
                <td>
                    Email :
                </td>
                <td>
                    <input type="email" name="email" placeholder="Enter Your Email" autocomplete="on"> <br>
                </td>
            </tr>

            <tr>
                <td>
                    Password :
                </td>
                <td>
                    <input type="password" name="pass" placeholder="Enter Desired Password"> <br>
                </td>
            </tr>

            <tr>
                <td>
                    Please choose a file
                </td>
                <td>
                    <input type="file" name="myfile"> <br>
                </td>
            </tr>

            <tr>
                <td>
                    <input type="submit" name="Submit">
                    <input type="reset">
                </td>
            </tr>

        </table>

    </form>
</body>

</html>