<?php
class Builder{

    private $name;
    private $product;

    public function __construct($name, $config)
    {
        $this->name = $name;

        require_once './Product.php';
        $product = new Product();
        if(isset($config['size'])){
            $product->setSize($config['size']);
        }
        if(isset($config['color'])){
            $product->setColor($config['color']);
        }

        $this->product = $product;
    }

    public function getProduct()
    {
        return $this->product;
    }
}