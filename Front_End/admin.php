<?php
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'You are not authenticated.';
    header("Location: login.php", TRUE, 301);
    exit;
} else {
    if($_SERVER['PHP_AUTH_USER'] == "admin" && $_SERVER['PHP_AUTH_PW'] == "admin"){
        header("Location: ../Admin/menu.php", TRUE, 301);
        die;
    }
    else{
        echo '<script>alert("Wrong Credentials!")</script>';
        header("Location: login.php", TRUE, 301);
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="icon" href="../Images/icon.jpg">
        <style>
            body {background-color: black;}
            h1   {color: white;}
            p    {color: white;}
            a    {text-decoration: none;}
            label{color: white;}
        </style>
        <title>Admin Validate</title>
    </head>
    <body>
    </body>
    <?php
    ?>
</html>