<?php 
session_start();

include("../Back_End/db_conn.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    $movieID = $_POST['id'];
    $name = $_POST['name'];
    $desc = $_POST['description'];
    $category = $_POST['category'];
    $date = $_POST['date'];
    $type = $_POST['type'];
    $genre = $_POST['genre'];
    $time = $_POST['time'];
    $img = $_POST['img'];

    if(!empty($movieID))
    {
	//save to database
        $sql = "UPDATE movies SET name='$name',_desc='$desc',category='$category',date='$date',type='$type',genre='$genre',time='$time',img='$img' WHERE movie_id = '$movieID'";
	mysqli_query($conn, $sql);
        
        header("Location: menu.php");
        die;
    }else{
        echo '<script>alert("Smtg went wrong!")</script>';
    }
}
?>