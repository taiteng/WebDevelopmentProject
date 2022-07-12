<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');
  
// include database and object files
include_once '../config/database.php';
include_once '../objects/product.php';
  
// get database connection
$database = new database();
$db = $database->getConnection();
  
// prepare product object
$product = new product($db);
  
// set ID property of record to read
$product->movie_id = isset($_GET['movie_id']) ? $_GET['movie_id'] : die();
  
// read the details of product to be edited
$product->readOne();
  
if($product->name!=null){
    // create array
    $product_arr = array(
        "movie_id" =>  $product->movie_id,
        "name" => $product->name,
        "descc" => $product->descc,
        "category" => $product->category,
        "datee" => $product->datee,
        "type" => $product->type,
        "genre" => $product->genre,
        "img" => $product->img,
        "timee" => $product->timee
  
    );
  
    // set response code - 200 OK
    http_response_code(200);
  
    // make it json format
    echo json_encode($product_arr);
}
  
else{
    // set response code - 404 Not found
    http_response_code(404);
  
    // tell the user product does not exist
    echo json_encode(array("message" => "Movie does not exist."));
}
?>