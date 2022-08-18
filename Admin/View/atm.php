<?php

session_start();
if (empty($_SESSION["username"]) && empty($_SESSION["password"])) {
    header("location: ../View/adminlogin.php");
}

@include("../View/header.php");
@include("../View/navbar.php");
@include("../View/adminsidebar.php");


?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/CSS" href="../CSS/atm.css">
</head>

<body>
    <form action="../Control/atm.process.php" method="post">
        <div class="flex-container-form_header">
            <h1 id="form_header">ATM Simulator</h1>
        </div>
        <div>
            <nav>
                <a href="../View/mytransaction.php">See your Transactions</a>
            </nav>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Enter Account No:</label><br>
                <input name="accountno" size="24" type="text" />
            </div>

            <div class=container>
                <label>Enter Amount:</label><br>
                <input name="atm" size="24" type="text" />
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Type :</label>
            </div>
            <div class="flex-container-radio">
                <div class="container">
                    <input type="radio" name="type" value="debit" id="debit-radio" checked>
                    <label id="radio-label" for="debit-radio"><span class="radio">Debit</span></label>
                </div>
                <div class="container">
                    <input type="radio" name="type" value="credit" id="credit-radio">
                    <label id="radio-label" for="credit-radio"><span class="radio">Credit</span></label>
                </div>
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>PIN(4 digit) :</b></label><br>
                <input name="pin" size="12" type="password" />
            </div>
        </div>

        <div class="flex-container">
            <div class="container">
                <input class="button" name="submit" type="submit" value="submit">
            </div>

            <div class="container">
                <button type="reset" class="reset">Reset</button>
            </div>
        </div>

    </form>
</body>

</html>