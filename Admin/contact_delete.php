<?php 
session_start();

include("../Back_End/db_conn.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    $cID = $_POST['contactID'];

    if(!empty($cID))
    {
        echo '<script type="text/javascript">alert("Successfully deleted!")</script>';
        
	//save to database
        $sql = "DELETE FROM contact WHERE contact_id='$cID'";   
        
	mysqli_query($conn, $sql);

	header("Location: contact_table.php");
	die;
    }else{
        echo '<script>alert("Smtg went wrong!")</script>';
    }
}
?>