<?php

session_start();
if (empty($_SESSION["uname"]) && empty($_SESSION["pass"]))
{
    header("location: ../View/adminlogin.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>

<body bgcolor="skyblue">
    <center>
        <h3>
            Welcome to the deshboard
            <br><br><br><br><br><br><br><br>
        </h3>

        <!-- <h3 align="left"> -->
            <!-- <a href="viewinfonewadmin.php">View Request Registration Information</a><br><br><br><br><br><br><br><br><br><br><br><br> --> -->
        <!-- </h3> -->

        <h3>
            Do you want to <a href="../Control/adminlogout.php">logout</a>
        </h3>
    </center>
</body>

</html>