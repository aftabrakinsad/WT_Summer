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
        <div class=container>
            <label>User Name :</label><br>
            <input name="username" type="text" placeholder="search here by username" onchange="username_check_admin_manage_page_AJAX()">
            <span><?php echo "<p id='denger'>$unameerr</p>"; ?></span>
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
                    <input name="accountno" type="text" value="<?php echo $accountno; ?>">
                </div>
                <div>
                    <input class="button" type="submit" name="submit" id="submit" value="update">
                </div>
            </div>
    </form>

    <form action="" method="POST">
        <table>
            <caption>Information Of Selceted Admin</ caption>
            <thead>
                <tr>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">NID</th>
                    <th scope="col">Phone</th>
                    <th scope="col">salary</th>
                    <th scope="col">accountno</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </form>
</body>

</html>