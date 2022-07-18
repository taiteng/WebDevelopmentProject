<?php
    session_start();
    
    if($_SESSION["captcha"] == false){
        echo '<script>alert("Please check Google reCAPTACHA");</script>';
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
        <title>Login</title>
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
                            <li class="nav-item">
                                <a class="nav-link" href="admin.php" style="font-size: 20px;">Admin</a>
                            </li>
                        </ul>
                        <form action="../Back_End/search.php" class="d-flex" name="search" method="POST">
                            <input class="form-control me-2" type="text" placeholder="Search" name="Search" required>
                            <button class="btn btn-primary" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
            <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        </header>
        <div style="margin-top:75px" style="width:100%">
            <h1 align="center">Login</h1>
            <div style="align-items: center; justify-content: center; display: flex;">
                <form action="../Back_End/user_login.php" method='POST'>
                    <div class="mb-3 mt-3">
                        <label for="username" class="form-label">Username:</label>
                        <input type="email" class="form-control" id="username" placeholder="Enter email" name="userName" required>
                    </div>
                    <div class="mb-3">
                        <label for="pwd" class="form-label">Password:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
                    </div>
                    <div class="g-recaptcha" 
                        data-sitekey="6LeQ3-ogAAAAAEEG8QliDr0b9H4r_nh53ZioF4yA">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
            <br>
            <p style="text-align:center">
                <a href="forgotpassword.php">Forgot password?</a><br>
                <a href="signup.php">Don't have an account yet? Sign up for free!</a>
            </p>
            <div style="align-items: center; justify-content: center; display: flex;">
                <br><br>
                <p>
                    Benefits of being a member: <br>
                    ➳ Bookmark feature<br>
                    ➳ Review feature
                </p>
            </div>
        </div>
    </body>
    <?php
    ?>
</html>