<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
  
// include database and object file
include_once '../config/database.php';
include_once '../objects/product.php';
  
// get database connection
$database = new database();
$db = $database->getConnection();
  
// prepare product object
$product = new product($db);
  
// get product id
$json = file_get_contents('php://input');
$data = json_decode($json);
  
// set product id to be deleted
$product->movie_id = $data->movie_id;
  
// delete the product
if($product->delete()){
  
    // set response code - 200 ok
    http_response_code(200);
  
    // tell the user
    echo json_encode(array("message" => "Movie was deleted."));
}
  
// if unable to delete the product
else{
  
    // set response code - 503 service unavailable
    http_response_code(503);
  
    // tell the user
    echo json_encode(array("message" => "Unable to delete product."));
}
?>
