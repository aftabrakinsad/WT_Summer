<?php
session_start();
if(empty($_SESSION["username"]) && empty($_SESSION["password"]))
{
    header("location: ../View/adminlogin.php");
}

@include("../View/header.php");
@include("../View/navbar.php");
@include("../View/adminsidebar.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/adminhome.css">
    <title>Admin Dashboard</title>
</head>

<body>
    <div class="flex-container">
        <div class="flex-item">
            <h1 id="customer">Welcome to the deshboard admin<?php include('../Control/cookie.php'); ?></h1>
            <p id="customer">
                From here I can manage you nigga!
            </p>
        </div>
    </div>
</body>

</html>