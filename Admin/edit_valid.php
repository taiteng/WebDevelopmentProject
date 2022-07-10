<?php 
session_start();

include("../Back_End/db_conn.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    $movieID = $_POST['movieID'];

    if(!empty($movieID))
    {
	//save to database
        $sql = "select * from movies where movie_id = '$movieID'";   
	$result = mysqli_query($conn, $sql);
        
        if($result){
            if($result && mysqli_num_rows($result) > 0)
            {
                $movie_data = mysqli_fetch_assoc($result);

                $_SESSION['edit'] = $movie_data['movie_id'];
                header("Location: edit.php");
                die;
            }
        }
    }else{
        echo '<script>alert("Smtg went wrong!")</script>';
    }
}
?>