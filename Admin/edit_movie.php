<?php 
session_start();

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
    if(!empty($_POST['id']) && !empty($_POST['name']) && !empty($_POST['description']) && !empty($_POST['category']) && !empty($_POST['date'])
            && !empty($_POST['type']) && !empty($_POST['genre']) && !empty($_POST['time']) && !empty($_POST['img'])){
        $product->movie_id = $_POST['id'];
        $product->name = $_POST['name'];
        $product->descc = $_POST['description'];
        $product->category = $_POST['category'];
        $product->datee = $_POST['date'];
        $product->type = $_POST['type'];
        $product->genre = $_POST['genre'];
        $product->img = $_POST['time'];
        $product->timee = $_POST['img'];
        
        // create the product
        if($product->update()){

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

//include("../Back_End/db_conn.php");
//
//if($_SERVER['REQUEST_METHOD'] == "POST")
//{
//    //something was posted
//    $movieID = $_POST['id'];
//    $name = $_POST['name'];
//    $desc = $_POST['description'];
//    $category = $_POST['category'];
//    $date = $_POST['date'];
//    $type = $_POST['type'];
//    $genre = $_POST['genre'];
//    $time = $_POST['time'];
//    $img = $_POST['img'];
//
//    if(!empty($movieID))
//    {
//	//save to database
//        $sql = "UPDATE movies SET name='$name',descc='$desc',category='$category',datee='$date',type='$type',genre='$genre',timee='$time',img='$img' WHERE movie_id = '$movieID'";
//	mysqli_query($conn, $sql);
//        
//        header("Location: menu.php");
//        die;
//    }else{
//        echo '<script>alert("Smtg went wrong!")</script>';
//    }
//}
?>