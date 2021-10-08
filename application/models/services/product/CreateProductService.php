
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CreateProductService implements Test_interface
{
    private $CreateProductCommand;

    public function __construct($CreateProductCommand)
    { 
        $this->CreateProductCommand=$CreateProductCommand;
    }

    public function __invoke(){
        print_r($this->CreateProductCommand->getTitle());
    }

    public function aaaa(){
        return 'ahhh';
    }

    public function save(){
        return 'xxx';
    }

    
}
