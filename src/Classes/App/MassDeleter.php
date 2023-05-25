<?php
namespace Classes\App;

use Classes\includes\Database;

class MassDeleter extends Database{
    public $conn;
    public function __construct()
    {
        $this->conn = $this->connect();
    }

    public function delete($itemsIds){
            $query = "DELETE FROM products WHERE id IN ($itemsIds)";
            echo $query;
            $stmt = $this->conn->prepare($query)->execute();
            $this->conn->close();
    
            return $stmt;
    }

}
?>