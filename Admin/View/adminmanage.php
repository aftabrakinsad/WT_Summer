<?php

@include("../Control/adminmanage.process.php");

session_start();
if (empty($_SESSION["username"]) && empty($_SESSION["password"])) {
    header("location: ../View/adminlogin.php");
}

?>

<?php

@include("../View/header.php");
@include("../View/navbar.php");
@include("../View/adminsidebar.php");

?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/CSS" href="../CSS/adminmanage.css">
    <link rel="stylesheet" type="text/CSS" href="../CSS/adminrequest.css">
    <title>Admin Manage</title>
</head>

<body>
    <form action="" method="POST" enctype="multipart/form-data">

        <div class="flex-container-form_header">
            <h1 id="form_header">Search Selected Admin By Username . . .</h1>
        </div>
        <div>
            <?php
            if (count($errors) > 0) 
            {
            ?>
                <div>
                    <?php
                    foreach ($errors as $showerror) 
                    {
                        echo "<p id='denger'> $showerror</p>";
                    }
                    ?>
                </div>
            <?php
            }
            ?>
        </div>
        <div class=container>
            <label>User Name :</label><br>
            <p id="usernameerr"></p>
            <input name="username" type="text" id="username" placeholder="search here by username" onkeyup="checkusername()">
        </div>

        <div class="container">
            <div>
                <button type="submit" name="search">Search</button>
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>First Name :</label><br>
                <input name="fname" type="text" value="<?php echo $fname; ?>">
            </div>
            <div class=container>
                <label>Last Name :</b></label><br>
                <input name="lname" type="text" value="<?php echo $lname; ?>">
            </div>
            <div class=container>
                <label>Username :</label><br>
                <input name="uname" type="text" value="<?php echo $uname; ?>" readonly>
            </div>
        </div>
        <div class="flex-container">
            <div class=container>
                <label>Email-ID :</b></label><br>
                <input name="phone" type="text" value="<?php echo $email; ?>">
            </div>
            <div class=container>
                <label>NID :</label><br>
                <input name="nid" type="text" value="<?php echo $nid; ?>" readonly>
            </div>
            <div class=container>
                <label>Phone No. :</b></label><br>
                <input name="phone" type="text" value="<?php echo $phone; ?>">
            </div>
        </div>
        <div class="flex-container">
            <div class=container>
                <label>Salary :</b></label><br>
                <input name="salary" type="text" value="<?php echo $salary; ?>">
            </div>
            <div class=container>
                <label>Account No. :</b></label><br>
                <input name="accountno" type="text" value="<?php echo $accountno; ?>" readonly>
            </div>
            <div>
                <input class="button" type="submit" name="submit" id="submit" value="update">
                <a class="button" href="../View/selected_admin.php">Show Admins</a>
            </div>
        </div>

    </form>
    <script src="../JS/adminmanage.js"></script>
</body>

</html>