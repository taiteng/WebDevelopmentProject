<?php 
session_start();

include("../Back_End/db_conn.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    $uID = $_POST['uID'];

    if(!empty($uID))
    {
        echo '<script type="text/javascript">alert("Successfully deleted!")</script>';
        
	//save to database
        $sql = "DELETE FROM users WHERE user_id='$uID'";   
        
	mysqli_query($conn, $sql);

	header("Location: user_table.php");
	die;
    }else{
        echo '<script>alert("Please enter some valid information")</script>';
    }
}
?>