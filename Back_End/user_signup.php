<?php 
session_start();

include("db_conn.php");
//include("functions.php");


if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    $user_name = $_POST['userName'];
    $password = $_POST['pswd'];
    $nickname = $_POST['nickName'];
    $bookmark_id = '0';

    if(!empty($user_name) && !empty($password) && !empty($nickname))
    {
        echo '<script type="text/javascript">alert("Successfully signed up!")</script>';
        
	//save to database
	$query = "INSERT INTO users (username,password,nickname,bookmark_id) values ('$user_name','$password','$nickname','$bookmark_id')";

	mysqli_query($conn, $query);

	header("Location: ../Front_End/profile.php");
	die;
    }else{
        echo '<script>alert("Please enter some valid information")</script>';
    }
}
?>