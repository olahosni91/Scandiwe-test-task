<?php

namespace Classes\App;

class Book extends Product{
    public $weight;

    public function __construct($sku='', $name='', $price='', $type='', $weight='')
    {
        parent::__construct($sku, $name, $price, $type);

        $this->weight = $weight;    
    }

    public function insertProduct()
    {

        $query = "INSERT INTO products (sku, name, price, type, weight) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("ssdss", $this->sku, $this->name, $this->price, $this->type, $this->weight);
        $result = $stmt->execute();
        $stmt->close();
        $this->conn->close();
        return $result;
    }

    public function view(){
        $query = "SELECT * FROM products WHERE type = 'Book'";
        $stmt = $this->conn->query($query);
        $html ="";
        while($row = $stmt->fetch_assoc()) {
            $html .= '<div class="rounded col-lg-3 col-md-4 bg-dark mx-3 my-3">';
            $html .= '<input type="checkbox" name="items[]" value='.$row['id'].' class="form-check-input my-3">';
            $html .= "<p class='fw-light fs-4 text-center text-light'>" . $row['sku'] ."</p>";
            $html .= "<p class='fw-light fs-4 text-center text-light'>" . $row['name'] ."</p>";
            $html .= "<p class='fw-light fs-5 text-center text-light'> Price:" . $row['price'] ."$ </p>";
            $html .= "<p class='fw-light fs-5 text-center text-light'> Weight:" . $row['weight'] ."KG </p>";

           $html .="</div>";
        }
        return $html;
    }

    
}

?>