<?php 

session_start();

include("db_conn.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
	//something was posted
	$movie = $_POST['movieName'];

	if(!empty($movie))
	{
            //read from database
            $query = "select * from movies where name = '$movie'";
            $result = mysqli_query($conn, $query);

            if($result){
                if($result && mysqli_num_rows($result) > 0)
                {
                    $movie_data = mysqli_fetch_assoc($result);

                    $_SESSION['movie_id'] = $movie_data['movie_id'];
                    header("Location: ../Front_End/preview.php");
                    die;
                }
            }
	}else
	{
            echo "Smtg went wrong!";
	}
}
?>