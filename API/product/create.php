<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
  
// include database and object files
include_once '../config/database.php';
include_once '../objects/product.php';
  
$database = new database();
$db = $database->getConnection();
  
$product = new product($db);
  
// get posted data
$json = file_get_contents('php://input');
$data = json_decode($json);

// make sure data is not empty
if(!empty($data->name) && !empty($data->descc) && !empty($data->category) && !empty($data->datee) && !empty($data->type) && !empty($data->genre) && !empty($data->img) && !empty($data->timee)){
    // set product property values
    $product->name = $data->name;
    $product->descc = $data->descc;
    $product->category = $data->category;
    $product->datee = $data->datee;
    $product->type = $data->type;
    $product->genre = $data->genre;
    $product->img = $data->img;
    $product->timee = $data->timee;
  
    // create the product
    if($product->create()){
  
        // set response code - 201 created
        http_response_code(201);
  
        // tell the user
        echo json_encode(array("message" => "Movie was created."));
    }
  
    // if unable to create the product, tell the user
    else{
  
        // set response code - 503 service unavailable
        http_response_code(503);
  
        // tell the user
        echo json_encode(array("message" => "Unable to create movie."));
    }
}
  
// tell the user data is incomplete
else{
  
    // set response code - 400 bad request
    http_response_code(400);
  
    // tell the user
    echo json_encode(array("message" => "Unable to create movie. Data is incomplete."));
}
?>