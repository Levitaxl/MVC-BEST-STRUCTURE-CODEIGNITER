<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CreateProductCommand extends Validations
{

    private $title;
    private $price;
    private $quantity;
    private $description;
    
    public function __construct($payload)
    { 
        parent::__construct();

        $this->validate_is_isset($payload,'title');
        $this->validate_is_isset($payload,'price');
        $this->validate_is_isset($payload,'quantity');
        $this->validate_is_isset($payload,'description');

        $this->title        =   $payload['title'];
        $this->price        =   $payload['price'];
        $this->quantity     =   $payload['quantity'];
        $this->description  =   $payload['description'];

        $this->validate_is_empty($this->title);
        $this->validate_is_empty($this->price);
        $this->validate_is_empty($this->quantity);
        $this->validate_is_empty($this->description);
        $this->validate_is_numeric($this->quantity);
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
}
