<?php

session_start();
if(empty($_SESSION["username"]) && empty($_SESSIO["password"]))
{
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
</head>

<body>

    <form action="" method="POST">

        <div class="search-bar-wrapper">
            <div class="search-bar" id="the-search-bar">
                <div class="flex-item-search-bar" id="fi-search-bar">
                    <form class="search_form" action="" method="post">
                        <div class="flex-item-search">
                            <input name="search" size="30" type="text" placeholder="Search Admins..." />
                        </div>
                        <div class="flex-item-search-button">
                            <button type="submit" name="submit" id="search"></button>
                        </div>
                        <div class="flex-item-by">
                            <label>By :</label>
                        </div>
                        <div class="flex-item-search-by">
                            <select name="by">
                                <option value="name" id="name">Name</option>
                                <option value="acno">Ac/No</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </form>
    <br><br>

    <table>
        <caption>Admin Data</caption>
        <thead>
            <tr>
                <th scope="col">Serial</th>
                <th scope="col">User Name</th>
                <th scope="col">Email</th>
                <th scope="col">Operations</th>
            </tr>
        </thead>

        <tbody>
            <?php

            @include("../Control/adminmanage.process.php");

            ?>
        </tbody>
    </table>

</body>

</html>