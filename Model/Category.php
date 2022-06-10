<?php
class Category {
    public $id;
    public $name;
    public $description;
    public $quantity;
    public $image;
    public $price;

    public function __construct($id, $name, $description, $quantity, $image, $price) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->quantity = $quantity;
        $this->image = $image;
        $this->price = $price;
    }
}