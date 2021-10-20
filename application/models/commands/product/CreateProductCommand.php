<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CreateProductCommand extends Validations
{

    private $title;
    private $price;
    private $quantity;
    private $description;
    private $image;
    
    public function __construct($payload)
    { 
        parent::__construct();

        $this->is_isset($payload,'title');
        $this->is_isset($payload,'price');
        $this->is_isset($payload,'quantity');
        $this->is_isset($payload,'description');
        $this->is_isset($_FILES,'image');

        $this->is_empty($payload['title']);
        $this->is_empty($payload['price']);
        $this->is_empty($payload['quantity']);
        $this->is_empty($payload['description']);
        $this->is_numeric($payload['quantity']);

        $this->image         =   $this->uploads($_FILES);
        $this->title        =   $payload['title'];
        $this->price        =   $payload['price'];
        $this->quantity     =   $payload['quantity'];
        $this->description  =   $payload['description'];

    }

	public function __invoke($payload){
        return 'command';
	}

    public function getTitle()
    {
        return $this->title;
    }
    
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

     
    public function getPrice()
    {
        return $this->price;
    }

     
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

     
    public function getQuantity()
    {
        return $this->quantity;
    }

     
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }
 
    public function getDescription()
    {
        return $this->description;
    }
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
    
    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    private function uploads($image){
        $archivos=array();
        foreach($image as $key => $tmp_name) {
            if($image["image"]["name"]) {
                $filename = date("Y_h_i_s")."_".$image["image"]["name"]; 
                $source = $image["image"]["tmp_name"];
                //print_r($source);
                $directorio = './application/images';
                
                if(!file_exists($directorio)) mkdir($directorio, 0777) or die("No se puede crear el directorio de extracci&oacute;n");	
                
                $replace = str_replace(' ', '_', $filename);
                $target_path = $directorio.'/'.$replace; 
                if(move_uploaded_file($source, $target_path)) array_push($archivos, $replace);                    
            }
        }

        return  $archivos[0];    
    }




   
}
