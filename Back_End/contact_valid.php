<?php 
session_start();

include("db_conn.php");
//include("functions.php");


if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    $name = $_POST['userName'];
    $email = $_POST['userEmail'];
    $message = $_POST['message'];

    if(!empty($name) && !empty($email) && !empty($message))
    {
        echo '<script type="text/javascript">alert("Successfully signed up!")</script>';
        
	//save to database
	$query = "INSERT INTO contact (name,email,message) values ('$name','$email','$message')";

	mysqli_query($conn, $query);

	header("Location: ../Front_End/contact.php");
	die;
    }else{
        echo '<script>alert("Please enter some valid information")</script>';
    }
}
?>