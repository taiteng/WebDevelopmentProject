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
        
        <h1 style="margin-top:75px">What's New</h1>
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
                <div class="carousel-item active">
                    <img src="../Images/SXF.jpg" alt="Spy X Family" class="d-block w-100" height="600px">
                    <div class="carousel-caption">
                        <h3>Spy X Family</h3>
                    </div>
                </div>
                <div class="carousel-item">
                     <img src="../Images/kakegurui.jpg" alt="Kakegurui" class="d-block w-100" height="600px">
                     <div class="carousel-caption">
                        <h3>Kakegurui</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../Images/TMD.jpg" alt="The Millionaire Detective" class="d-block w-100" height="600px">
                    <div class="carousel-caption">
                        <h3>The Millionaire Detective</h3>
                    </div>
                </div>
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
                    <td>
                        <img src="../Images/doctorStrange.jpg" width="200px" height="300px" alt="movie" class="img-thumbnail"/>
                        <p>Doctor Strange: Multiverse of Madness</p>
                        <button class="btn btn-info" type="button" onclick="location.href='preview.php'">Click Me</button>
                    </td>
                    <td>
                        <img src="../Images/fantasticBeasts.jpg" width="200px" height="300px" alt="movie" class="img-thumbnail"/>
                        <p>Fantastic Beasts: The Secrets of Dumbledore</p>
                        <button class="btn btn-info" type="button" onclick="location.href='preview.php'">Click Me</button>
                    </td>
                    <td>
                        <img src="../Images/fiftyShades.jpg" width="200px" height="300px" alt="movie" class="img-thumbnail"/>
                        <p>Fifty Shades of Grey</p>
                        <button class="btn btn-info" type="button" onclick="location.href='preview.php'">Click Me</button>
                    </td>
                    <td>
                        <img src="../Images/passengers.jpg" width="200px" height="300px" alt="movie" class="img-thumbnail"/>
                        <p>Passengers</p>
                        <button class="btn btn-info" type="button" onclick="location.href='preview.php'">Click Me</button>
                    </td>
                    <td>
                        <img src="../Images/assassinCreed.jpg" width="200px" height="300px" alt="movie" class="img-thumbnail"/>
                        <p>Assassin's Creed</p>
                        <button class="btn btn-info" type="button" onclick="location.href='preview.php'">Click Me</button>
                    </td>
                    <td>
                        <img src="../Images/Reef.jpg" width="200px" height="300px" alt="movie" class="img-thumbnail"/>
                        <p>The Reef: Stalked</p>
                        <button class="btn btn-info" type="button" onclick="location.href='preview.php'">Click Me</button>
                    </td>
                    <td>
                        <img src="../Images/RIPD.jpg" width="200px" height="300px" alt="movie" class="img-thumbnail"/>
                        <p>R.I.P.D</p>
                        <button class="btn btn-info" type="button" onclick="location.href='preview.php'">Click Me</button>
                    </td>
                </tr>
            </table>
        </div>
        <h1>Top 10 Movies</h1>
        <div style="overflow-x:auto;">
            <table class="table-borderless table-responsive" style="min-height: 450px;">
                <tr align='center'>
                    <td>
                        <img src="../Images/pacificRim.jpg" width="200px" height="300px" alt="movie" class="img-thumbnail"/>
                        <p>Pacific Rim</p>
                        <button class="btn btn-info" type="button" onclick="location.href='preview.php'">Click Me</button>
                    </td>
                    <td>
                        <img src="../Images/adamProject.jpg" width="200px" height="300px" alt="movie" class="img-thumbnail"/>
                        <p>The Adam Project</p>
                        <button class="btn btn-info" type="button" onclick="location.href='preview.php'">Click Me</button>
                    </td>
                    <td>
                        <img src="../Images/redNotice.jpg" width="200px" height="300px" alt="movie" class="img-thumbnail"/>
                        <p>Red Notice</p>
                        <button class="btn btn-info" type="button" onclick="location.href='preview.php'">Click Me</button>
                    </td>
                </tr>
            </table>
        </div>
        <h1>More Like This</h1>
        <div style="overflow-x:auto;">
            <table class="table-borderless table-responsive" style="min-height: 450px;">
                <tr align='center'>
                    <td>
                        <img src="../Images/towerHeist.jpg" width="200px" height="300px" alt="movie" class="img-thumbnail"/>
                        <p>Tower Heist</p>
                        <button class="btn btn-info" type="button" onclick="location.href='preview.php'">Click Me</button>
                    </td>
                    <td>
                        <img src="../Images/AOT.jpg" width="200px" height="300px" alt="movie" class="img-thumbnail"/>
                        <p>Army of Thieves</p>
                        <button class="btn btn-info" type="button" onclick="location.href='preview.php'">Click Me</button>
                    </td>
                    <td>
                        <img src="../Images/jumanji.jpg" width="200px" height="300px" alt="movie" class="img-thumbnail"/>
                        <p>Jumanji: Welcome to the Jungle</p>
                        <button class="btn btn-info" type="button" onclick="location.href='preview.php'">Click Me</button>
                    </td>
                </tr>
            </table>
        </div>
        <!--
        <?php
        // put your code here
        $num = 1;
        echo "Hi, this is ".$num."st project.";
        ?>
        -->
        
    </body>
</html>
