<?php 

session_start();

include("db_conn.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
	//something was posted
	$username = $_POST['userName'];
	$password = $_POST['pswd'];
        $recaptcha = $_POST['g-recaptcha-response'];
    
        $secret_key = "6LeQ3-ogAAAAAKNSDL0N9vWwKy2hSUYBaQkZ7BmN";

        $url = 'https://www.google.com/recaptcha/api/siteverify?secret='. $secret_key . '&response=' . $recaptcha;

        // Making request to verify captcha
        $response = file_get_contents($url);

        // Response return by google is in
        // JSON format, so we have to parse
        // that json
        $response = json_decode($response);

        // Checking, if response is true or not
        if ($response->success == true) {
            echo '<script>alert("Google reCAPTACHA verified")</script>';
            $_SESSION['captcha'] = true;
        } else {
            echo '<script>window.confirm("Error in Google reCAPTACHA");</script>';
            $_SESSION['captcha'] = false;
            header("Location: ../Front_End/login.php");
            die;
        }

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