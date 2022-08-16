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
    <title>Admin Manage</title>
</head>

<body>
    <form action="" method="POST" enctype="multipart/form-data">

        <div class="flex-container-form_header">
            <h1 id="form_header">Search Admin By Username . . .</h1>
        </div>
        <div class=container>
            <label>User Name :</label><br>
            <input name="uname" size="30" type="text" />
        </div>
        <div class="container">
            <button type="submit" name="search">Search</button>
        </div>
        <div class="flex-container">
            <div class=container>
                <label>First Name :</label><br>
                <input name="fname" size="30" type="text" value="<?php echo $fname; ?>">
            </div>
            <div class=container>
                <label>Last Name :</b></label><br>
                <input name="lname" size="30" type="text" value="<?php echo $lname; ?>">
            </div>
        </div>
        <div class="flex-container">
            <div class=container>
                <label>Username :</label><br>
                <input name="email" size="30" type="text" value="<?php echo $uname; ?>" readonly>
            </div>
            <div class=container>
                <label>Email-ID :</b></label><br>
                <input name="phone" size="30" type="text" value="<?php echo $email; ?>">
            </div>
        </div>
        <div class="flex-container">
            <div class=container>
                <label>NID :</label><br>
                <input name="nid" size="30" type="text" value="<?php echo $nid; ?>">
            </div>
            <div class=container>
                <label>Phone No. :</b></label><br>
                <input name="phone" size="30" type="text" value="<?php echo $phone; ?>">
            </div>
        </div>
    </form>
</body>

</html>