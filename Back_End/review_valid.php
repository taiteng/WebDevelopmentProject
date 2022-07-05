<?php
session_start();

include("db_conn.php");
include("../Back_End/functions.php");

$user_data = check_login($conn);

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    $movie_id = $_POST['movieID'];
    $title = $_POST['Title'];
    $comment = $_POST['Comment'];
    $user_nn = $user_data['nickname'];

    if(!empty($movie_id) && !empty($title) && !empty($comment) && !empty($user_nn))
    {
        echo '<script type="text/javascript">alert("Successfully reviewed!")</script>';
        
	//save to database
	$query = "INSERT INTO reviews (title, comment, nickname, movie_id) values ('$title','$comment','$user_nn','$movie_id')";

	mysqli_query($conn, $query);

	header("Location: ../Front_End/home.php");
	die;
    }else{
        echo '<script>alert("Smtg went wrong")</script>';
    }
}
?>