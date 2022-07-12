<?php 
session_start();

include("../Back_End/db_conn.php");
//include("../Back_End/functions.php");

//$user_data = check_login($conn);

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
            label    {color: white;}
            a    {text-decoration: none;
                  text-align: right;}
            th,td,tr   {color: white;
                  text-align: center;}
            table{
                color: white;
                border-color: white;
            }
            hr{
	    	background: white;	
	    }
        </style>
        <title>Admin Panel</title>
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
                                <a class="nav-link" href="contact_table.php" style="font-size: 20px;">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="user_table.php" style="font-size: 20px;">Users</a>
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
        <a class="nav-link" href="menu.php" style="font-size: 20px;">Refresh</a>
        <div style="overflow-x:auto;">
            <table border='1px' class="table table-responsive">
                <tr align="left">
                    <th>Movie Name</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Date Released</th>
                    <th>Type</th>
                    <th>Genre</th>
                    <th>Duration</th>
                    <th>Image</th>
                    <th></th>
                    <th></th>
                </tr>
                <tbody class="tbody">
						
		</tbody>
                <?php
//                $sql = "SELECT * from movies";
//                $result = $conn->query($sql);
//                
//                if ($result->num_rows > 0) {
//                    // output data of each row
//                    while($row = $result->fetch_assoc()) { 
//                        $movie_type = 'Movie';
//                        if($row['type'] == $movie_type){
//                            $timeType = ' mins';
//                        }
//                        else{
//                            $timeType = ' episodes';
//                        }
//                        
//                        echo '<tr align="left">
//                                <td>'. $row["name"] .'</td>
//                                <td>'. $row["descc"] .'</td>
//                                <td>'. $row["category"] .'</td>
//                                <td>'. $row["datee"] .'</td>
//                                <td>'. $row["type"] .'</td>
//                                <td>'. $row["genre"] .'</td>
//                                <td>'. $row["timee"] . $timeType .'</td>
//                                <td>'. $row["img"] .'</td>
//                                <td>
//                                    <form action="edit_valid.php" method="POST">
//                                        <input type="hidden" name="movieID" value="'. $row["movie_id"] .'">
//                                        <button class="btn btn-info" type="submit">Edit</button>
//                                    </form>
//                                </td>
//                                <td>
//                                    <form action="delete_movie.php" method="POST">
//                                        <input type="hidden" name="movieID" value="'. $row["movie_id"] .'">
//                                        <button class="btn btn-info" type="submit">Delete</button>
//                                    </form>
//                                </td>
//                              </tr>';
//                      }
//                    } else {
//                      echo "Smtg went wrong!";
//                    }
                ?>
            </table>
        </div>
        <hr>
        <h1>Insert to database</h1>
        <form action="add_movie.php" method="POST">
            <div class="mb-3 mt-3">
                <label class="form-label">Name:</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Description:</label>
                <input type="text" class="form-control" name="description" required>
            </div>
            <div class="mb-3 mt-3">
                <label class="form-label">Category:</label>
                <input type="text" class="form-control" name="category" required>
            </div>
            <div class="mb-3 mt-3">
                <label class="form-label">Date:</label>
                <input type="text" class="form-control" name="date" required>
            </div>
            <div class="mb-3 mt-3">
                <label class="form-label">Type:</label>
                <input type="text" class="form-control" name="type" required>
            </div>
            <div class="mb-3 mt-3">
                <label class="form-label">Genre:</label>
                <input type="text" class="form-control" name="genre" required>
            </div>
            <div class="mb-3 mt-3">
                <label class="form-label">Duration:</label>
                <input type="text" class="form-control" name="time" required>
            </div>
            <div class="mb-3 mt-3">
                <label class="form-label">Image:</label>
                <input type="text" class="form-control" name="img" required>
            </div>
            <button type="submit" class="btn btn-primary">Insert</button>
        </form>
    </body>
    
    <script src="display_movie.js"></script>
    <?php
    ?>
</html>