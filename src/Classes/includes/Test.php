<?php
namespace Classes\includes;

use Classes\App\MassDeleter;
use Classes\App\Book;
use Classes\App\DVD;
use Classes\App\Furniture;
use Classes\App\ProductType;
use Classes\App\Type;

class Test {
        private $sku;
        private $name;
        private $price;
        private $type;
        private $weight;
        private $size;
        private $length;
        private $width;
        private $height;
    
    public function __construct($sku, $name, $price, $type, $weight, $size, $length, $width, $height) {
       $this->sku = $sku;
       $this->name = $name;
       $this->price = $price;
       $this->type = $type;
       $this->weight = $weight;
       $this->size = $size;
       $this->length = $length;
       $this->width = $width;
       $this->height = $height;
    }
    
    public function getDetails() {
       return array_filter([
          'sku' => $this->sku,
          'name' => $this->name,
          'price' => $this->price,
          'type' => $this->type,
          'weight' => $this->weight,
          'size' => $this->size,
          'height' => $this->height,
          'width' => $this->width,
          'length' => $this->length
       ]);
    }
 }
if (isset($_POST['addProduct'])){

    $sku = isset($_POST['SKU']) ? $_POST['SKU'] :  print "SKU is required!";
    $name = isset($_POST['name']) ? $_POST['name'] : print 'Name is required!';
    $price = isset($_POST['price']) ? $_POST['price'] : print 'price is required';
    $type = isset($_POST['type']) ? $_POST['type'] : '';
    $weight = isset($_POST['weight'])? $_POST['weight'] : '';

    $size = isset($_POST['size'])? $_POST['size'] : '';
    $length= isset($_POST['length'])? $_POST['length'] : '';
    $width= isset($_POST['width'])? $_POST['width'] : '';
    $height= isset($_POST['height'])? $_POST['height'] : '';
   
$test = new Test($sku, $name, $price, $type, $weight, $size, $length, $width, $height);
$product = new Type();

$productType = new ProductType($product);

$details = Array(
    'sku' => $sku,
    'name' => $name,
    'price' => $price,
    'type' => $type,
    'weight' => $weight,
    'size' => $size,
    'height' => $height,
    'width' => $width,
    'length' => $length
);

$returnDimensions = array_filter( $details, function ($ele){
    return !empty($ele);
});


foreach ($returnDimensions as $value) {
    $returnValues[] = $value;
}

echo $productType->handleRequest($type, $returnDimensions);
header("Location: ./index.php");
exit;

}elseif (isset($_POST["massDelete"])) {
        $item_ids = isset($_POST['items']) ? $_POST['items'] : [];
        $ids = implode(",", $item_ids);
        $massDelete = new MassDeleter();
        $massDelete->delete($ids);
        header("Location: ./index.php");
        exit;    
}

$book = new Book();
$dvd = new DVD();
$furniture = new Furniture();



?>