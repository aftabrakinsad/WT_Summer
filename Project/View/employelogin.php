<?php

    include('../control/emplogin.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employe Log in</title>
</head>

    <body>
    <center>
        <header>
            <h1><font color="green">XYZ Bank Limited.</font></h1>
            <p><strong><font color="green">Login As An Employe</font></strong></p>
            <br><br><br><br>
        </header>

        <form action="" method="POST" enctype="multipart/form-data">
            <center>
                <table>
                    <tr>
                        <td>
                            <label>
                                <font color="darkblue">Username:</font>
                            </label>
                            <input type="text" name="username"> <br><br>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>
                                <font color="darkblue">Password :</font>
                            </label>
                            <input type="password" name="password"> <br><br>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <center>
                                <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <input type="submit" name="submit" value="Login">
                                <input type="submit" name="registration" value="Registration">
                            </center>
                        </td>
                    </tr>
                </table>
            </center>
        </form>
    </center>
</body>

</html