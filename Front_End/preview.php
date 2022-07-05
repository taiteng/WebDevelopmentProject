<?php 
session_start();

include("../Back_End/db_conn.php");
include("../Back_End/functions.php");

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
            a    {text-decoration: none;}
            label{color: white;}
            td   {text-align: center;
                  min-width:320px;}
            
            .img-thumbnail{
                transition: transform .5s;
            }
            .review-form{
                background:rgba(0,0,0, .6);
		color:white;
		margin-top: 50px;
		padding: 10px;
		box-shadow: 0px 0px 10px 3px grey;
            }
            
            .review-box{
                background:rgba(0,0,0,.6);
		color:white;
		padding: 5px;
                border-color: grey;
            }
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
        <div style="margin-top:75px" align='center'>
            <h1><?php echo $movie_data['name']; ?></h1>
            <img src="<?php echo $movie_data['img']; ?>" alt="image" style="width:600px;height:800px;"/>
            <p>
                Movie Description: <?php echo $movie_data['desc']; ?><br>
                <br><br>
                Date Released: <?php echo $movie_data['date']; ?><br>
                <br><br>
                Type: <?php echo $movie_data['type']; ?><br>
                <br><br>
                Genre: <?php echo $movie_data['genre']; ?><br>
                <br><br>
                Time (Min): 
                    <?php 
                        $movie_type = "Movie";
                        echo $movie_data['time']; 
                        if($movie_data['type'] == $movie_type){
                            echo ' mins';
                        }
                        else{
                            echo ' episodes';
                        }
                    ?> <br>
                <br><br>
                <?php
                    echo '<div style="align-items: center; justify-content: center; display: flex;">
                              <form action="../Back_End/bookmark_valid.php" method="POST">
                                  <input type="hidden" name="movieID" value="'. $movie_data["movie_id"]. '">
                                  <button class="btn btn-info" type="submit">Bookmark</button>
                              </form>
                          </div>';
                ?>
                <br>
            </p>
                <p>More Like This: </p><br>
                <table class="table-borderless table-responsive" style="min-height: 450px;">
                    <tr align="center">
                        <?php
                        $count = 0;

                        $more = $movie_data['genre'];

                        $query = "SELECT name, img from movies where genre = '$more'";
                        $results = $conn->query($query);

                        $rows = $results->fetch_assoc();

                        if ($results->num_rows > 0) {
                            // output data of each row
                            while($rows = $results->fetch_assoc()) {
                                if($count == 2){
                                    break;
                                }
                                else{
                                    if($rows['name'] == $movie_data['name']){
                                        continue;
                                    }
                                    else{
                                        echo '<td>
                                                <img src="'. $rows["img"].'" width="200px" height="300px" alt="movie" class="img-thumbnail"/>
                                                <p>'. $rows["name"] . '</p>
                                                <form action="../Back_End/movie_valid.php" method="POST">
                                                    <input type="hidden" name="movieName" value="'. $rows["name"] .'">
                                                    <button class="btn btn-info" type="submit">Details</button>
                                                </form>
                                              </td>';
                                    }
                                }
                                $count++;
                            }
                        } else {
                            echo "Smtg went wrong!";
                        }
                        ?>
                    </tr>
                </table>
                <br><br>
                <p>Review Section: </p><br>
                <br>
                <p>
                <?php
                    $movieID = $movie_data['movie_id'];
                    $sql = "SELECT title, comment, nickname from reviews where movie_id = '$movieID'";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                      // output data of each row
                      while($row = $result->fetch_assoc()) {
                        echo '<div class="card" style="width: 300px;">
                                <div class="card-body">
                                  <h1 class="card-title" style="color:black;">'. $row["nickname"] .'</h1>
                                  <p class="card-text" style="color:black;">'. $row["title"] .'</p>
                                  <p class="card-body" style="color:black;">'. $row["comment"] . '</p>
                                </div>
                              </div><br>';
                      }
                    } else {
                      echo "No comments...";
                    }
                ?>
                </p>
            <div class="review-form">
                <hr>
                <form action="../Back_End/review_valid.php" method="POST" align="center">
                    <label for="title">Title:</label><br>
                    <input type="text" id="title" name="Title"><br>
                    <label for="comment">Comment:</label><br>
                    <textarea name="Comment" rows="10" cols="30"></textarea><br><br>
                    <input type="hidden" name="movieID" value="<?php echo $movie_data['movie_id'] ?>">
                    <button type="submit" class="btn btn-success btn-block">Submit</button>
                </form>
            </div>
        </div>
    </body>
    <?php
    ?>
</html>
