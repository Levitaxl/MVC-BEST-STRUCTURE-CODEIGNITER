
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class GetAllProductModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }


    public function __invoke(){
        $query = $this->db->get('product');
        return $query->result();
    }
    
}
