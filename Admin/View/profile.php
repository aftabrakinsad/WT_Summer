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
    <link rel="stylesheet" href="../CSS/admin_profile.css">
    <title>Profile</title>
</head>

<body>
    <form class="add_customer_form" action="customer_profile_action.php" method="post">
        <div class="flex-container-form_header">
            <h1 id="form_header">Your account details . . .</h1>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>First Name : <label id="info_label"></label></label>
            </div>
            <div class=container>
                <label>Last Name : <label id="info_label"></label></label>
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Account No : <label id="info_label"></label></label>
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Balance (INR) : <label id="info_label"></label></label>
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Date of Birth : <label id="info_label"></label></label>
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Aadhar No : <label id="info_label"></label></label>
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Email-ID :</label><br>
                <input name="email" size="30" type="text" value="" required />
            </div>
            <div class=container>
                <label>Username :</label><br>
                <input name="cus_uname" size="30" type="text" value="" required />
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Phone No. : <label id="info_label"></label></label>
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Address :</label><br>
                <textarea name="address" required></textarea>
            </div>
        </div>

        <div class="flex-container">
            <div class="container">
                <a href="../View/adminhomepage.php" class="button">Back To Work</a>
            </div>
            <div class="container">
                <button type="submit">Update</button>
            </div>
        </div>

    </form>

</body>

</html>