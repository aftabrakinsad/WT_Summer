<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax</title>
</head>
<body>
    <p id="ajaxresponce"></p>
    <div>
        <form action="" method="POST" enctype="multipart/form-data" onsubmit="return ajax_formcheck()">
            <label for="name">Enter your name: </label>
            <input type="text" name="uname" id="uname" onkeyup="ajax()">
        </form>
    </div>
</body>
</html>