<?php 

session_start();

include("db_conn.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
	//something was posted
	$username = $_POST['userName'];
	$password = $_POST['pswd'];

	if(!empty($username) && !empty($password))
	{

            //read from database
            $query = "select * from users where username = '$username'";
            $result = mysqli_query($conn, $query);

            if($result){
                if($result && mysqli_num_rows($result) > 0)
                {
                    $user_data = mysqli_fetch_assoc($result);

                    if($user_data['password'] === $password)
                    {
                        if($user_data['nickname'] == "admin"){
                            $_SESSION['id'] = $user_data['user_id'];
                            header("Location: ../Admin/menu.php");
                            die;
                        }
                        else{
                            $_SESSION['id'] = $user_data['user_id'];
                            header("Location: ../Front_End/home.php");
                            die;
                        }
                    }
                }
            }
			
            echo "wrong username or password!";
	}else
	{
            echo "wrong username or password!";
	}
}
?>