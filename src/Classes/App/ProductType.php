<?php
namespace Classes\App;


class ProductType {
    private $myClassFactory;

    public function __construct(Type $myClassFactory) {
        $this->myClassFactory = $myClassFactory;
    }

    public function handleRequest($class, ...$args) {
        return $this->myClassFactory
                    ->create($class, ...$args)
                    ->insertProduct();
                    
    }
}
?>