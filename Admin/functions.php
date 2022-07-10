<?php

function check_movie($conn){
    if(isset($_SESSION['edit']))
    {

	$id = $_SESSION['edit'];
	$query = "select * from movies where movie_id = '$id'";

	$result = mysqli_query($conn,$query);
        if($result && mysqli_num_rows($result) > 0)
        {
            $movie_data = mysqli_fetch_assoc($result);
            return $movie_data;
        }

        header("Location: edit.php");
        die;
    }
    else{
        //redirect to login
        header("Location: menu.php");
        die;
    }
}

function check_user($conn){
    if(isset($_SESSION['user_edit']))
    {

	$id = $_SESSION['user_edit'];
	$query = "select * from users where user_id = '$id'";

	$result = mysqli_query($conn,$query);
        if($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }

        header("Location: user_edit.php");
        die;
    }
    else{
        //redirect to login
        header("Location: menu.php");
        die;
    }
}