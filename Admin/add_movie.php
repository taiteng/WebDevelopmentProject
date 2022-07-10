<?php 
session_start();

include("../Back_End/db_conn.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    $name = $_POST['name'];
    $desc = $_POST['description'];
    $category = $_POST['category'];
    $date = $_POST['date'];
    $type = $_POST['type'];
    $genre = $_POST['genre'];
    $time = $_POST['time'];
    $img = $_POST['img'];

    if(!empty($name) && !empty($desc) && !empty($category) && !empty($date) && !empty($type) && !empty($genre) && !empty($time) && !empty($img))
    {
        echo '<script type="text/javascript">alert("Successfully insert!")</script>';
        
	//save to database
	$sql = "INSERT INTO movies (name,_desc,category,date,type,genre,img,time) VALUES ('$name','$desc','$category','$date','$type','$genre','$img','$time')";
        
	mysqli_query($conn, $sql);

	header("Location: menu.php");
	die;
    }else{
        echo '<script>alert("Please enter some valid information")</script>';
    }
}
?>