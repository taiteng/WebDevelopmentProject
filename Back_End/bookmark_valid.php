<?php
session_start();

include("db_conn.php");
include("../Back_End/functions.php");

$user_data = check_login($conn);

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    $movie_id = $_POST['movieID'];
    $id = $_SESSION['id'];
    $bookmark = $user_data['bookmark_id'].','.$movie_id;

    if(!empty($movie_id))
    {
        echo '<script type="text/javascript">alert("Successfully bookmarked!")</script>';
        
        $query = "UPDATE users SET bookmark_id='$bookmark' WHERE user_id='$id'";

	mysqli_query($conn, $query);

	header("Location: ../Front_End/bookmark.php");
	die;
    }else{
        echo '<script>alert("Smtg went wrong!")</script>';
    }
}
?>