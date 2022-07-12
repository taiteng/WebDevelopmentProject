<?php
class product{
  
    // database connection and table name
    private $conn;
    private $table_name = "movies";
  
    // object properties
    public $movie_id;
    public $name;
    public $descc;
    public $category;
    public $datee;
    public $type;
    public $genre;
    public $img;
    public $timee;
  
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
    
    // used when filling up the update product form
    function readOne(){
        // query to read single record
        $query = "SELECT * FROM " . $this->table_name . " WHERE movie_id = ? LIMIT 0,1";

        // prepare query statement
        $stmt = $this->conn->prepare( $query );

        // bind id of product to be updated
        $stmt->bindParam(1, $this->movie_id);

        // execute query
        $stmt->execute();

        // get retrieved row
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // set values to object properties 
        $this->name = $row['name'];
        $this->descc = $row['descc'];
        $this->category = $row['category'];
        $this->datee = $row['datee'];
        $this->type = $row['type'];
        $this->genre = $row['genre'];
        $this->img = $row['img'];
        $this->timee = $row['timee'];
    }
    
    // read products
    function read(){
        // select all query  
        $query = "select * from movies";

        // prepare query statement
        $stmt = $this->conn->prepare($query);

        // execute query
        $stmt->execute();

        return $stmt;
    }
    
    // create product
    function create(){
        // query to insert record
        $query = "INSERT INTO " . $this->table_name . " SET name=:name, descc=:descc, category=:category, datee=:datee, type=:type, genre=:genre, img=:img, timee=:timee";
        // prepare query
        $stmt = $this->conn->prepare($query);
        // sanitize
        $this->name=htmlspecialchars(strip_tags($this->name));
        $this->descc=htmlspecialchars(strip_tags($this->descc));
        $this->category=htmlspecialchars(strip_tags($this->category));
        $this->datee=htmlspecialchars(strip_tags($this->datee));
        $this->type=htmlspecialchars(strip_tags($this->type));
        $this->genre=htmlspecialchars(strip_tags($this->genre));
        $this->img=htmlspecialchars(strip_tags($this->img));
        $this->timee=htmlspecialchars(strip_tags($this->timee));
        // bind values
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":descc", $this->descc);
        $stmt->bindParam(":category", $this->category);
        $stmt->bindParam(":datee", $this->datee);
        $stmt->bindParam(":type", $this->type);
        $stmt->bindParam(":genre", $this->genre);
        $stmt->bindParam(":img", $this->img);
        $stmt->bindParam(":timee", $this->timee);
        // execute query
        if($stmt->execute()){
            return true;
        }
        return false;
    }
    
    // update the product
    function update(){
        // update query
        $query = "UPDATE " . $this->table_name . " SET name=:name, descc=:descc, category=:category, datee=:datee, type=:type, genre=:genre, img=:img, timee=:timee WHERE movie_id = :movie_id";
        // prepare query statement
        $stmt = $this->conn->prepare($query);
        // sanitize
        $this->movie_id=htmlspecialchars(strip_tags($this->movie_id));
        $this->name=htmlspecialchars(strip_tags($this->name));
        $this->descc=htmlspecialchars(strip_tags($this->descc));
        $this->category=htmlspecialchars(strip_tags($this->category));
        $this->datee=htmlspecialchars(strip_tags($this->datee));
        $this->type=htmlspecialchars(strip_tags($this->type));
        $this->genre=htmlspecialchars(strip_tags($this->genre));
        $this->img=htmlspecialchars(strip_tags($this->img));
        $this->timee=htmlspecialchars(strip_tags($this->timee));
        // bind new values
        $stmt->bindParam(":movie_id", $this->movie_id);
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":descc", $this->descc);
        $stmt->bindParam(":category", $this->category);
        $stmt->bindParam(":datee", $this->datee);
        $stmt->bindParam(":type", $this->type);
        $stmt->bindParam(":genre", $this->genre);
        $stmt->bindParam(":img", $this->img);
        $stmt->bindParam(":timee", $this->timee);
        // execute the query
        if($stmt->execute()){
            return true;
        }
        return false;
    }
    
    // delete the product
    function delete(){
        // delete query
        $query = "DELETE FROM " . $this->table_name . " WHERE movie_id = ?";

        // prepare query
        $stmt = $this->conn->prepare($query);

        // sanitize
        $this->movie_id=htmlspecialchars(strip_tags($this->movie_id));

        // bind id of record to delete
        $stmt->bindParam(1, $this->movie_id);

        // execute query
        if($stmt->execute()){
            return true;
        }

        return false;
    }
    
    // search products
    function search($keywords){

        // select all query
        $query = "SELECT * FROM " . $this->table_name . " WHERE name LIKE ?";

        // prepare query statement
        $stmt = $this->conn->prepare($query);

        // sanitize
        $keywords = htmlspecialchars(strip_tags($keywords));
        $keywords = "%{$keywords}%";

        // bind
        $stmt->bindParam(1, $keywords);
        //$stmt->bindParam(2, $keywords);
        //$stmt->bindParam(3, $keywords);

        // execute query
        $stmt->execute();

        return $stmt;
    }
}