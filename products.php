<?php
class Product {
    public $id;
    public $name;
    public $image;
    public $price;
    public $quantity;


    public function __construct($id, $name, $image, $price, $quantity)
    {
      $this->id = $id;
      $this->name = $name;
      $this->image = $image;
      $this->price = $price;
      $this->quantity = $quantity;  
    }
}


 public static function getAllproductcs(){
 return [
  new Product (1, "", ["..\img\DSC_8892 1.png", "..\img\DSC_8891 1.png"], )
     



 ]


}