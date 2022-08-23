<?php

session_start();

if (empty($_SESSION["username"]) && empty($_SESSION["password"]))
{
    header("location: ../view/employelogin.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee - Home </title>

</head>

<body bgcolor="skyblue">
    <center>

        <header>
            <h1><font color="green">City Bank Limited.</font></h1>
            <p><strong><font color="green">Employe Homepage</font></strong></p>
            <br><br><br><br>
        </header>

        <h3> <a href="viewinformation.php">View Employe Information </a></h3>
        <br>

        <h2> <strong><font color="blue"> Welcome to Your Home Page<?php include('../control/cookie.php'); ?> </font></strong> </h2> 
        <br><br>

        <h3>Do you want to <a href="../control/employelogout.php">Logout</a></h3>

    </center>
</body>

</html>