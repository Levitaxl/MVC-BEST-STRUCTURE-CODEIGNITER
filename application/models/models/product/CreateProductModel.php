
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CreateProductModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }


    public function __invoke($createProductCommand){

        $this->db->set('title'         ,       $createProductCommand->getTitle());
        $this->db->set('price'         ,       $createProductCommand->getPrice());
        $this->db->set('quantity'      ,       $createProductCommand->getQuantity());
        $this->db->set('description'   ,       $createProductCommand->getDescription());
        $this->db->set('image'         ,       $createProductCommand->getImage());


        return $this->db->insert('product');
    }
    
}
