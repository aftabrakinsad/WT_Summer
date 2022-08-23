<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/CSS" href="../CSS/navbar.css">
</head>

<body>
    <div class="nav-wrapper">
        <div class="topnav" id="theTopNav">
            <a id="user">Welcome Admin<?php include('../Control/cookie.php'); ?></a>
            <a id="logout" href="../Control/adminlogout.php">Logout</a>
        </div>
    </div>

    <script src="../JS/navbar.js"></script>
</body>

</html>