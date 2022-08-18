<?php

session_start();
if (empty($_SESSION["username"]) && empty($_SESSION["password"])) {
    header("location: ../View/adminlogin.php");
}

@include("../View/header.php");
@include("../View/navbar.php");
@include("../View/adminsidebar.php");

// @include("../Control/transferfunds.process.php");

?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/transferfunds.css">
</head>

<body>
    <form action="../Control/transferfunds.process.php" method="post">
        <div class="flex-container-form_header">
            <h1 id="form_header">Transfer Funds</h1>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Enter Account No. :</label><br>
                <input type="text" name="accountno" id="accountno">
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Enter Amount :</label><br>
                <input name="atm" size="24" type="text">
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Enter your PIN :</b></label><br>
                <input name="pin" size="24" type="password">
            </div>
        </div>

        <div class="flex-container">
            <div class="container">
                <a href="../View/atm.php" class="button">Go Back</a>
            </div>

            <div class="container">
                <input name="submit" type="submit">
            </div>

            <div class="container">
                <button type="reset" class="reset">Reset</button>
            </div>
        </div>

    </form>