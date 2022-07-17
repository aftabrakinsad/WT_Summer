<?php

include("../Control/user_login_process.php");

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
                    <h1>Login</h1>
                    <fieldset>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <label>
                                Username:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;<input type="text" name="uname"><?php echo $errme; ?>
                            </label><br>
                            <label>
                                Enter your password: &nbsp;<input type="text" name="pass"><?php echo $errme; ?>
                            </label><br><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="submit" name="submit" value="Login">
                        </form>
                    </fieldset>
                </fieldset>
            </td>
        </tr>
    </table>
</body>

</html>