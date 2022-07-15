<?php 

// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
  
// include database and object files
include_once 'API/database.php';
include_once 'API/product.php';
  
$database = new database();
$db = $database->getConnection();
  
$product = new product($db);

if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(!empty($_POST['movieID'])){
        $product->movie_id = $_POST['movieID'];
        
        // create the product
        if($product->delete()){

            // set response code - 201 created
            http_response_code(201);

            // tell the user
            echo json_encode(array("message" => "Movie was updated."));

            header("Location: menu.php", TRUE, 301);
            exit;
        }
  
        // if unable to create the product, tell the user
        else{

            // set response code - 503 service unavailable
            http_response_code(503);

            // tell the user
            echo json_encode(array("message" => "Unable to update movie."));
        }
    }
    // tell the user data is incomplete
    else{

        // set response code - 400 bad request
        http_response_code(400);

        // tell the user
        echo json_encode(array("message" => "Unable to update movie. Data is incomplete."));
        }
}


//session_start();
//
//include("../Back_End/db_conn.php");
//
//if($_SERVER['REQUEST_METHOD'] == "POST")
//{
//    //something was posted
//    $movieID = $_POST['movieID'];
//
//    if(!empty($movieID))
//    {
//        echo '<script type="text/javascript">alert("Successfully deleted!")</script>';
//        
//	//save to database
//        $sql = "DELETE FROM movies WHERE movie_id='$movieID'";   
//        
//	mysqli_query($conn, $sql);
//
//	header("Location: menu.php");
//	die;
//    }else{
//        echo '<script>alert("Please enter some valid information")</script>';
//    }
//}
?>