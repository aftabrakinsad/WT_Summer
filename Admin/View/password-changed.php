<?php

@include("../Control/changepassword.process.php");

?>

<?php

if ($_SESSION['info'] == false) {
    header('location: ../View/adminlogin.php');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Back to Login</title>
</head>

<body>

    <?php
    if (isset($_SESSION['info'])) {
    ?>
        <?php echo $_SESSION['info']; ?>
    <?php
    }
    ?>

    <form action="../View/adminlogin.php">
        <input type="submit" name="returntologin" value="Login">
    </form>
</body>

</html>