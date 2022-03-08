<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<ul>
    <li><a href="/page1.php">Page 1</a></li>
    <li><a href="/page2.php">Page 2</a></li>
    <li><a href="/page3.php">Page 3</a></li>
    <li><a href="/page4.php">Page 4</a></li>
    <li><a href="/disconnect.php">Deco</a></li>
</ul>

<form method="post" action="/formValidation.php">
    <input type="text" name="username" id="usernameId" placeholder="francishuster@gmail.com">
    <label for="usernameId">Username</label>

    <input type="password" name="password" id="passwordId">
    <label for="passwordId">Password</label>

    <button type="submit">Go !</button>
</form>

<?php

    if (isset($_SESSION['connect']) && $_SESSION['connect'] === true) {
        echo 'vous êtes connecté';
    } else {
        echo 'casse toi !';
    }


?>

</body>
</html>
