<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Page</title>
</head>
<body>
    <?php
        if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
            echo "<h1>The server is running. Try <a href='http://{$_SERVER['HTTP_HOST']}:8080'>HTTP</a></h1>";
            echo "<h1>The server is running. Try <a href='http://{$_SERVER['SERVER_NAME']}:8080'>HTTP</a></h1>";
        } else {
            echo "<h1>The server is running. Try <a href='https://{$_SERVER['HTTP_HOST']}'>HTTPS</a></h1>";
            echo "<h1>The server is running. Try <a href='https://{$_SERVER['SERVER_NAME']}'>HTTPS</a></h1>";
        }
    ?>
    <?php
        phpinfo();
    ?>
</body>
</html>