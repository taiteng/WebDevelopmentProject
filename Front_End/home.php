<?php 
session_start();

include("../Back_End/db_conn.php");
include("../Back_End/functions.php");
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
            h1   {color: white;
                  text-align: center;}
            p    {color: white;}
            a    {text-decoration: none;}
            td   {text-align: center;
                  min-width:320px;}
            
            .img-thumbnail{
                transition: transform .5s;
            }

            .img-thumbnail:hover {
                z-index: 1;
                transform: scale(1.25);
            }
                
            /* width */
            ::-webkit-scrollbar {
              width: 10px;
            }

            /* Track */
            ::-webkit-scrollbar-track {
              background: #f1f1f1;
            }

            /* Handle */
            ::-webkit-scrollbar-thumb {
              background: #888;
            }

            /* Handle on hover */
            ::-webkit-scrollbar-thumb:hover {
              background: #555;
            }

        </style>
        <title>Home</title>
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
                        <form class="d-flex" name="search">
                            <input class="form-control me-2" type="text" placeholder="Search" name="Search" required>
                            <button class="btn btn-primary" type="submit" onclick="">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
        </header>
        
        <h1 style="margin-top:75px">Coming Soon</h1>
        <!-- Carousel -->
        <div id="demo" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner slide">
                <?php
                    $count = 0;
                    $category = 'comingsoon';
                    $sql = "SELECT name, img from movies where category = '$category'";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                      // output data of each row
                      while($row = $result->fetch_assoc()) {
                          if($count == 0){
                              echo '<div class="carousel-item active">
                                  <img src="'. $row["img"] .'" alt="carouselImage" class="d-block w-100" height="600px">
                                  <div class="carousel-caption">
                                      <h3>'. $row["name"] .'</h3>
                                  </div>
                              </div>';
                              
                              $count++;
                          }
                          else{
                              echo '<div class="carousel-item">
                                  <img src="'. $row["img"] .'" alt="carouselImage" class="d-block w-100" height="600px">
                                  <div class="carousel-caption">
                                      <h3>'. $row["name"] .'</h3>
                                  </div>
                              </div>';
                          }
                      }
                    } else {
                      echo "Smtg went wrong!";
                    }
                ?>
            </div>

            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
        <h1>Trending</h1>
        <div style="overflow-x:auto;">
            <table class="table-borderless table-responsive" style="min-height: 450px;">
                <tr align='center'>
                    <?php
                    $category1 = 'trend';
                    $sql1 = "SELECT name, img from movies where category = '$category1'";
                    $result1 = $conn->query($sql1);

                    if ($result1->num_rows > 0) {
                      // output data of each row
                      while($row = $result1->fetch_assoc()) {
                        echo '<td>
                                  <img src="'. $row["img"].'" width="200px" height="300px" alt="movie" class="img-thumbnail"/>
                                  <p>'. $row["name"] . '</p>
                                  <form action="../Back_End/movie_valid.php" method="POST">
                                      <input type="hidden" name="movieName" value="'. $row["name"] .'">
                                      <button class="btn btn-info" type="submit">Click Me</button>
                                  </form>
                              </td>';
                      }
                    } else {
                      echo "Smtg went wrong!";
                    }
                    ?>
                </tr>
            </table>
        </div>
        <h1>Top 10 Movies</h1>
        <div style="overflow-x:auto;">
            <table class="table-borderless table-responsive" style="min-height: 450px;">
                <tr align='center'>
                    <?php
                    $category2 = 'top';
                    $sql2 = "SELECT name, img from movies where category = '$category2'";
                    $result2 = $conn->query($sql2);

                    if ($result2->num_rows > 0) {
                      // output data of each row
                      while($row = $result2->fetch_assoc()) {
                        echo '<td>
                                  <img src="'. $row["img"].'" width="200px" height="300px" alt="movie" class="img-thumbnail"/>
                                  <p>'. $row["name"] . '</p>
                                  <form action="../Back_End/movie_valid.php" method="POST">
                                      <input type="hidden" name="movieName" value="'. $row["name"] .'">
                                      <button class="btn btn-info" type="submit">Click Me</button>
                                  </form>
                              </td>';
                      }
                    } else {
                      echo "Smtg went wrong!";
                    }
                    ?>
                </tr>
            </table>
        </div>
        <h1>All Movies </h1>
        <div style="overflow-x:auto;">
            <table class="table-borderless table-responsive" style="min-height: 450px;">
                <tr align='center'>
                    <?php
                    $sql3 = "SELECT name, img from movies";
                    $result3 = $conn->query($sql3);

                    if ($result3->num_rows > 0) {
                      // output data of each row
                      while($row = $result3->fetch_assoc()) {
                        echo '<td>
                                  <img src="'. $row["img"].'" width="200px" height="300px" alt="movie" class="img-thumbnail"/>
                                  <p>'. $row["name"] . '</p>
                                  <form action="../Back_End/movie_valid.php" method="POST">
                                      <input type="hidden" name="movieName" value="'. $row["name"] .'">
                                      <button class="btn btn-info" type="submit">Click Me</button>
                                  </form>
                              </td>';
                      }
                    } else {
                      echo "Smtg went wrong!";
                    }
                    ?>
                </tr>
            </table>
        </div>
    </body>
</html>
