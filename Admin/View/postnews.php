<?php

@include("../View/header.php");
@include("../View/navbar.php");
@include("../View/adminsidebar.php");

?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/post.css">
</head>

<body>
    <form class="news_form" action="post_news_action.php" method="post">
        <div class="flex-container">
            <div class=container>
                <label>News Headline :</label><br>
                <input name="headline" size="50" type="text" required />
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Details :</label><br>
                <textarea class="xd" name="news_details" required></textarea>
            </div>
        </div>

        <div class="flex-container">
            <div class="container">
                <button type="submit">Submit</button>
            </div>

            <div class="container">
                <button type="reset" class="reset">Reset</button>
            </div>
        </div>

    </form>
</body>

</html>