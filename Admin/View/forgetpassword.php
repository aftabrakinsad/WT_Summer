<?php

@include("../Control/forgetpassprocess.php");

if (isset($_SESSION['username'])) {
    header("location: ../View/adminlogin.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/CSS" href="../CSS/forgetpassword.css">
    <title>Forgot Password</title>
</head>

<body class="bodyimage">
    <form action="" method="POST">
        <h2 class="h2">Forgot Password</h2>
        <p>Enter your Username and Email address</p>

        <input type="text" name="uname" placeholder="Enter user name">

        <input type="email" name="email" placeholder="Enter email address">

        <input type="password" name="newpass" placeholder="New password">

        <input class="inputbutton" type="submit" name="submit" value="Continue">

        <input class="inputrequestreturn" type="submit" name="return" value="Back">
    </form>
</body>

</html>