<?php

@include('../Control/forgetpasswordprocess.php');

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
        <p>Enter your NID and Email address</p>

        <input type="email" name="email" placeholder="Enter email address">

        <input type="text" name="nid" placeholder="Enter your nid number">

        <input type="text" name="npass" placeholder="Enter new password">

        <input type="text" name="cpass" placeholder="Confirm new password">

        <input class="inputbutton" type="submit" name="check" value="Continue">
    </form>
</body>

</html>