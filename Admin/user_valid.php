<?php 
session_start();

include("../Back_End/db_conn.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    $uID = $_POST['uID'];

    if(!empty($uID))
    {
	//save to database
        $sql = "select * from users where user_id = '$uID'";   
	$result = mysqli_query($conn, $sql);
        
        if($result){
            if($result && mysqli_num_rows($result) > 0)
            {
                $user_data = mysqli_fetch_assoc($result);

                $_SESSION['user_edit'] = $user_data['user_id'];
                header("Location: user_edit.php");
                die;
            }
        }
    }else{
        echo '<script>alert("Smtg went wrong!")</script>';
    }
}
?>