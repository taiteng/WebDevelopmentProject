<?php 
session_start();

include("../Back_End/db_conn.php");
include("functions.php");

$movie_data = check_movie($conn);

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
            label    {color: white;
                      font-weight:bold}
            a    {text-decoration: none;
                  text-align: right;}
            th,td,tr   {color: white;
                  text-align: center;}
            table{
                color: white;
                border-color: white;
            }
        </style>
        <title>Edit</title>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-sm bg-white navbar-light fixed-top">
                <div class="container-fluid">
                    <a class="navbar-brand">
                        <img src="../Images/logo.jpg" alt="logo" onclick="location.href='admin_logout.php'" style="width:200px;height:50px;"/>
                    </a>
                    <div class="d-flex flex-row bd-highlight mb-3 justify-content-end">
                        <ul class="navbar-nav nav">
                            <li class="nav-item">
                                <a class="nav-link" href="menu.php" style="font-size: 20px;">Menu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact_valid.php" style="font-size: 20px;">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="users_valid.php" style="font-size: 20px;">Users</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="admin_logout.php" style="font-size: 20px;">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <h1 style="margin-top:75px; text-align: center">Menu</h1>
        <br>
        <form action="edit_movie.php" method="POST">
            <div class="mb-3 mt-3">
                <label class="form-label">Name:</label>
                <input type="text" class="form-control" value="<?php echo $movie_data['name']; ?>" name="name" required>
            </div>
            <div class="mb-3 mt-3">
                <label class="form-label">Description:</label>
                <input type="text" class="form-control" value="<?php echo $movie_data['descc']; ?>" name="description" required>
            </div>
            <div class="mb-3 mt-3">
                <label class="form-label">Category:</label>
                <input type="text" class="form-control" value="<?php echo $movie_data['category']; ?>" name="category" required>
            </div>
            <div class="mb-3 mt-3">
                <label class="form-label">Date:</label>
                <input type="text" class="form-control" value="<?php echo $movie_data['datee']; ?>" name="date" required>
            </div>
            <div class="mb-3 mt-3">
                <label class="form-label">Type:</label>
                <input type="text" class="form-control" value="<?php echo $movie_data['type']; ?>" name="type" required>
            </div>
            <div class="mb-3 mt-3">
                <label class="form-label">Genre:</label>
                <input type="text" class="form-control" value="<?php echo $movie_data['genre']; ?>" name="genre" required>
            </div>
            <div class="mb-3 mt-3">
                <label class="form-label">Time:</label>
                <input type="text" class="form-control" value="<?php echo $movie_data['timee']; ?>" name="time" required>
            </div>
            <div class="mb-3 mt-3">
                <label class="form-label">Image URL:</label>
                <input type="text" class="form-control" value="<?php echo $movie_data['img']; ?>" name="img" required>
            </div>
            <input type="hidden" class="form-control" value="<?php echo $movie_data['movie_id']; ?>" name="id">
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </body>
    <?php
    ?>
</html>

