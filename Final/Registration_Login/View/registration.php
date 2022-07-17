<?php

include("../Control/user_registration_process.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>

<body>
    <table>
        <tr>
            <td>
                <fieldset>
                    <h1>Registration</h1>
                    <fieldset>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <label>
                                Enter your name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name"><?php echo $errme; ?>
                            </label> <br>

                            <label>
                                Enter your username: &nbsp;&nbsp;<input type="text" name="uname"><?php echo $errme; ?>
                            </label> <br>

                            <label>
                                Enter your password: &nbsp;&nbsp;<input type="text" name="pass"><?php echo $errme; ?>
                            </label> <br><br>

                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="submit" name="submit" value="Register">
                        </form>
                    </fieldset>
                </fieldset>
            </td>
        </tr>
    </table>
</body>

</html>