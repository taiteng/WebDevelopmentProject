<?php 
session_start();

include("../Back_End/db_conn.php");
include("../Back_End/functions.php");

$user_data = check_login($conn);

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
        <title>Profile</title>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-sm bg-white navbar-light fixed-top">
                <div class="container-fluid">
                    <a class="navbar-brand">
                        <img src="../Images/logo.jpg" alt="logo" onclick="location.href='home.php'" style="width:200px;height:50px;"/>
                    </a>
                    <div class="d-flex flex-row bd-highlight mb-3 justify-content-end">
                        <ul class="navbar-nav nav">
                            <li class="nav-item">
                                <a class="nav-link" href="home.php" style="font-size: 20px;">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="bookmark.php" style="font-size: 20px;">Bookmark</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php" style="font-size: 20px;">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="profile.php" style="font-size: 20px;">Profile</a>
                            </li>
                        </ul>
                        <form action="../Back_End/search.php" class="d-flex" name="search" method="POST">
                            <input class="form-control me-2" type="text" placeholder="Search" name="Search" required>
                            <button class="btn btn-primary" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
        </header>
        <div style="margin-top:75px" style="width:100%">
            <h1 align="center">Profile</h1>
            <br>
            <p style="text-align:center">
                Howdy, <?php echo $user_data['nickname']; ?> <br><br>
                <a href="../Back_End/user_logout.php">Logout</a><br>
            </p>
        </div>
    </body>
    <?php
    ?>
</html>
