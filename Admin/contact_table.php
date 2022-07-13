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
        <title>Contact</title>
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
        <div style="overflow-x:auto;">
            <table border='1px' class="table table-responsive">
                <tr align="left">
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th></th>
                </tr>
                <?php
                $sql = "SELECT * from contact";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) { 
                        echo '<tr align="left">
                                <td>'. $row["name"] .'</td>
                                <td>'. $row["email"] .'</td>
                                <td>'. $row["message"] .'</td>
                                <td>
                                    <form action="contact_delete.php" method="POST">
                                        <input type="hidden" name="contactID" value="'. $row["contact_id"] .'">
                                        <button class="btn btn-info" type="submit">Delete</button>
                                    </form>
                                </td>
                              </tr>';
                      }
                    } else {
                      echo "Smtg went wrong!";
                    }
                ?>
            </table>
        </div>
    </body>
    <?php
    ?>
</html>

