<?php
namespace Classes\App;
use Classes\includes\Database;

abstract class Product extends Database
{
    protected $sku;
    protected $name;
    protected $price;
    protected $type;
    public $conn;
    
    public function __construct($sku='', $name='', $price='', $type='')
    {
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->type = $type;

        $this->conn = $this->connect();

    }
    public function getSku():string
    {
        return $this->sku;
    }

    public function getname():string
    {
        return $this->name;
    }

    public function getprice():string
    {
        return $this->price;
    }
    
   

    abstract public function insertProduct();

    abstract public function view();
 }




?>