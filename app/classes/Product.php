<?php
namespace App\classes;

class Product
{
    protected $file;
    protected $directory;
    protected $products;
    protected $product;
    protected $name;
    protected $imageName;
    protected $price;
    protected $description;
    protected $image;
    protected $tempPath;

    public function index()
    {
        header('Location: action.php?pages=add-product');
    }

    public function __construct($data=null, $file=null)
    {
        $this->file = $file;
        $this->imageName = $file['image']['name'];
        $this->tempPath = $file['image']['tmp_name'];
        $this->directory = 'assets/img/product-image/'.$this->imageName;
    }

    public function newProduct()
    {
        move_uploaded_file($this->tempPath, $this->directory);
    }
}