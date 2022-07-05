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
            address{color: white;}
            hr{
	    	background: white;	
	    }

            .contact-form{
		background:rgba(0,0,0, .6);
		color:white;
		margin-top: 100px;
		padding: 20px;
		box-shadow: 0px 0px 10px 3px grey;
            }
        </style>
        <title>Contact Us</title>
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
            <div style="margin-top:75px" style="width:100%">
                <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31775.935637974806!2d100.36723999894245!3d5.418190972443643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304ac45b64942a79%3A0x945563875197c7fe!2sTaman%20Riang!5e0!3m2!1sen!2smy!4v1656916366710!5m2!1sen!2smy" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                -->
                <div class="container contact-form">
                    <h1>Contact form</h1>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <address>W-343 Coseis Meits UT</address>
                            <p>Email:- test@email.com</p>
                            <p>Phone:- 34563463434</p>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Massage</label>
                                <textarea  class="form-control" rows="7"></textarea>
                            </div>
                            <div class="form-group">
                                <br>
                                <button class="btn btn-primary btn-block">Send</button>
                            </div>
                       </div>
                    </div>
                </div>
            </div>
        </header>
    </body>
</html>
