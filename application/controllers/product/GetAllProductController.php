<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GetAllProductController extends CI_Controller {


	public function __construct()
    {
        parent::__construct();
    }

	public function GetAllProduct(){

        $this->load->model('models/product/GetAllProductModel','getAllProductModel',false);
        $this->load->model('services/product/GetAllProductService','getAllProductService',false,$this->getAllProductModel);
        
        $response= $this->getAllProductService->__invoke();
            
        header('Content-type: application/json');
        echo json_encode( $response );
    }
}

