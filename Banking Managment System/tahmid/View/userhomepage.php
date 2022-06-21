
<?php
if(empty($_SESSION["username"]) && empty($_SESSION["password"]))
{
    header("location: ../View/userlogin.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
</head>

<body>
<p><h1>Welcome</h1></p>
<h1><b>Do you want to <a href ="../Control/userlogout.php">logout ?</a></b></h1>


</body>
</html>