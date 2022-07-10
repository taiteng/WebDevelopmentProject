<?php 
session_start();

include("../Back_End/db_conn.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    $movieID = $_POST['movieID'];

    if(!empty($movieID))
    {
        echo '<script type="text/javascript">alert("Successfully deleted!")</script>';
        
	//save to database
        $sql = "DELETE FROM movies WHERE movie_id='$movieID'";   
        
	mysqli_query($conn, $sql);

	header("Location: menu.php");
	die;
    }else{
        echo '<script>alert("Please enter some valid information")</script>';
    }
}
?>