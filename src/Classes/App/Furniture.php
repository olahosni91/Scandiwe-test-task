<?php

namespace Classes\App;

use Classes\App\Product;

class Furniture extends Product{
    protected $height;
    protected $width;
    protected $length;


    public function __construct($sku='', $name='', $price='', $type='', $height='', $width='', $length='')
    {
        parent::__construct($sku, $name, $price, $type);
        $this->height = $height;
        $this->width = $width;
        $this->length = $length;

        // $conn = $this->conn;
    }

    public function insertProduct()
{
    $query = "INSERT INTO products (sku, name, price, type, height, width, length) VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = $this->conn->prepare($query);
    $stmt->bind_param("ssdssss", $this->sku, $this->name, $this->price, $this->type, $this->height, $this->width, $this->length);
    $result = $stmt->execute();
    $stmt->close();
    $this->conn->close();
    return $result;
}

    public function view(){
        $query = "SELECT * FROM products WHERE type = 'Furniture'";
        $stmt = $this->conn->query($query);
        $html ="";
        while($row = $stmt->fetch_assoc()) {
            $html .= '<div class="rounded col-lg-3 col-md-4 bg-dark mx-3 my-3">';
            $html .= '<input type="checkbox" name="items[]" value='.$row['id'].' class="form-check-input my-3">';
            $html .= "<p class='fw-light fs-4 text-center text-light'>" . $row['sku'] ."</p>";
            $html .= "<p class='fw-light fs-4 text-center text-light'>" . $row['name'] ."</p>";
            $html .= "<p class='fw-light fs-5 text-center text-light'> Price:" . $row['price'] ."$ </p>";
            $html .= "<p class='fw-light fs-5 text-center text-light'> Dimensions:" .
            $row['height']."x".$row['length']."x".$row['width']  ."</p>";

           $html .="</div>";
        }
        return $html;
    }
}

?>