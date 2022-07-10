<?php 
session_start();

include("../Back_End/db_conn.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    $uID = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nickname = $_POST['nickname'];

    if(!empty($uID))
    {
	//save to database
        $sql = "UPDATE users SET username='$username',password='$password',nickname='$nickname' WHERE user_id = '$uID'";
	mysqli_query($conn, $sql);
        
        header("Location: user_table.php");
        die;
    }else{
        echo '<script>alert("Smtg went wrong!")</script>';
    }
}
?>