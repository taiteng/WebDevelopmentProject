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
                <tr align="left">
                    <td>Fantastic Beasts: The Secrets of Dumbledore</td>
                    <td>14/04/2022</td>
                    <td>Movie</td>
                    <td>Fantasy</td>
                    <td>142 min</td>
                    <td>
                        <table>
                            <tr align="center">
                                <td>
                                    <img src="../Images/doctorStrange.jpg" width="130px" height="200px" alt="doctorStrange"/>
                                    <p>Doctor Strange: Multiverse of Madness</p>
                                    <button class="btn btn-success" type="button" onclick="location.href='preview.php'">Click Me</button>
                                </td>
                                <td>
                                    <img src="../Images/assassinCreed.jpg" width="130px" height="200px" alt="assassinCreed"/>
                                    <p>Assassin's Creed</p>
                                    <button class="btn btn-success" type="button" onclick="location.href='preview.php'">Click Me</button>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr align="left">
                    <td>Spy X Family</td>
                    <td>09/04/2022</td>
                    <td>Show</td>
                    <td>Anime</td>
                    <td>12 ep</td>
                    <td>
                        <table>
                            <tr align="center">
                                <td>
                                    <img src="../Images/jujutsuKaisen.jpg" width="130px" height="200px" alt="jujutsuKaisen"/>
                                    <p>Jujutsu Kaisen</p>
                                    <button class="btn btn-success" type="button" onclick="location.href='preview.php'">Click Me</button>
                                </td>
                                <td>
                                    <img src="../Images/1PM.jpg" width="130px" height="200px" alt="1PM"/>
                                    <p>One Punch Man</p>
                                    <button class="btn btn-success" type="button" onclick="location.href='preview.php'">Click Me</button>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </body>
    <?php
    ?>
</html>

