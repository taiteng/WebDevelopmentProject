<?php

function check_admin($user_data, $adminName){
    if($user_data['username'] == $adminName){
        header("Location: ../Admin/menu.php");
        die;
    }
}

function check_login($conn)
{
    $adminName = 'admin@admin.com';
    
    if(isset($_SESSION['id']))
    {

	$id = $_SESSION['id'];
	$query = "select * from users where user_id = '$id'";

	$result = mysqli_query($conn,$query);
	if($result && mysqli_num_rows($result) > 0)
	{
            $user_data = mysqli_fetch_assoc($result);
            
            check_admin($user_data, $adminName);
            
            return $user_data;
	}
        header("Location: ../Front_End/profile.php");
        die;
    }
    else{
        //redirect to login
        header("Location: ../Front_End/login.php");
        die;
    }

}

function check_movie($conn){
    if(isset($_SESSION['movie_id']))
    {

	$id = $_SESSION['movie_id'];
	$query = "select * from movies where movie_id = '$id'";

	$result = mysqli_query($conn,$query);
        if($result && mysqli_num_rows($result) > 0)
        {
            $movie_data = mysqli_fetch_assoc($result);
            return $movie_data;
        }

        header("Location: ../Front_End/preview.php");
        die;
    }
    else{
        //redirect to login
        header("Location: ../Front_End/home.php");
        die;
    }
}