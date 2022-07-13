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
    $recaptcha = $_POST['g-recaptcha-response'];
    
    $secret_key = "6Lce4uogAAAAAIxZUct1gJFbFdMz8d2LJAviKAiS";
    
    $url = 'https://www.google.com/recaptcha/api/siteverify?secret='. $secret_key . '&response=' . $recaptcha;
  
    // Making request to verify captcha
    $response = file_get_contents($url);
  
    // Response return by google is in
    // JSON format, so we have to parse
    // that json
    $response = json_decode($response);
  
    // Checking, if response is true or not
    if ($response->success == true) {
            $_SESSION['captcha'] = true;
        } else {
            $_SESSION['captcha'] = false;
            header("Location: ../Front_End/signup.php");
            die;
        }

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