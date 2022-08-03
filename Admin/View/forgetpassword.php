<?php

@include("../Control/userexits.emailconfirmation.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/CSS" href="../CSS/forgetpassword.css">
    <title>Forgot Password</title>
</head>

<body>
    <header>
        <h1 class="h1">City Bank Limited.</h1>
    </header>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">

        <h2 class="h2">Forgot Password</h2>
        <p id="info">Enter your Email</p>

        <input type="email" name="email" placeholder="Enter email address">

        <?php
        echo $emailerr;
        echo $emailerr1;

        if(count($errors) > 0){
            ?>
            <div>
                <?php 
                    foreach($errors as $error)
                    {
                        echo $error;
                    }
                ?>
            </div>
            <?php
        }
        ?>

        <table id="table">
            <tr>
                <td>
                    <input class="inputbutton" type="submit" name="Change" value="Change">
                    <input class="inputrequestreturn" type="submit" name="return" value="Back to Login">
                </td>
            </tr>
        </table>

    </form>
</body>

</html>