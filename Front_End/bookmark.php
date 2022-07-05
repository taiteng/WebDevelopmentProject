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
            th   {color: white;
                  text-align: center;
                  min-width: 200px;}
            td   {color: white;
                  text-align: center;
                  min-width: 250px;}
            table{min-height: 300px;}
        </style>
        <title>Bookmark</title>
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
        <h1 style="margin-top:75px; text-align: center">Bookmark</h1>
        <div style="overflow-x:auto;">
            <table border="1px" class="table-borderless table-responsive">
                <tr align="left">
                    <th>Movie Name</th>
                    <th>Date Released</th>
                    <th>Type</th>
                    <th>Genre</th>
                    <th>Duration</th>
                    <th>More Like This</th>
                </tr>
                <?php
                $bookmarks = $user_data['bookmark_id'];
                $bk_str = $bookmarks;
                $bookmark_id = explode(',', $bk_str);
                $sizeOfArray = sizeof($bookmark_id);
                
                for ($i = 1; $i < $sizeOfArray; $i++){
                    $count = 0;
                    
                    $sql = "SELECT name, date, type, genre, time from movies where movie_id = '$bookmark_id[$i]'";
                    $result = $conn->query($sql);

                    $row = $result->fetch_assoc();
                    
                    $more = $row["genre"];
                    
                    $query = "SELECT name, img from movies where genre = '$more'";
                    $results = $conn->query($query);
                    
                    $rows = $results->fetch_assoc();
                    
                    echo '<tr align="left">
                            <td>'. $row["name"] .'</td>
                            <td>'. $row["date"] .'</td>
                            <td>'. $row["type"] .'</td>
                            <td>'. $row["genre"] .'</td>
                            <td>'. $row["time"] .'</td>
                            <td>
                                <table>
                                    <tr align="center">';
                    
                    if ($results->num_rows > 0) {
                        // output data of each row
                        while($rows = $results->fetch_assoc()) {
                            if($count == 2){
                                break;
                            }
                            else{
                                if($row['name'] == $rows["name"]){
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
                    
                    echo '</tr>
                                </table>
                            </td>
                        </tr>';           
                }
                ?>
            </table>
        </div>
    </body>
    <?php
    ?>
</html>

