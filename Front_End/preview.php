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
        <title>Preview</title>
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
                                <a class="nav-link" href="profile.php" style="font-size: 20px;">Profile</a>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="text" placeholder="Search" required>
                            <button class="btn btn-primary" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
        </header>
        <div style="margin-top:75px" align='center'>
            <h1>Movie Name</h1>
            <img src="../Images/cm.jpg" alt="image" style="width:600px;height:800px;"/>
            <p>
                Movie Description: <br>
                <br><br>
                Date Released: <br>
                <br><br>
                Type: <br>
                <br><br>
                Genre: <br>
                <br><br>
                Time (Min): <br>
                <br><br>
                More Like This: <br>
                <br><br>
                Review Section: <br>
                <br><br>
            </p>
            <form align="center">
                <label for="title">Title:</label><br>
                <input type="text" id="title" name="title"><br>
                <label for="comment">Comment:</label><br>
                <textarea name="comment" rows="10" cols="30"></textarea><br><br>
                <input type="submit" value="Submit">
            </form>
        </div>
    </body>
    <?php
    ?>
</html>
