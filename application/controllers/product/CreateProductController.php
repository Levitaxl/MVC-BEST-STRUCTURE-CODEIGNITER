<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CreateProductController extends CI_Controller {


	public function __construct()
    {
        parent::__construct();
    }

	public function CreateProduct(){

        $payload= $this->input->post();
        if($payload){ 
            $this->load->model('commands/product/CreateProductCommand','createProductCommand', false, $payload);
            $this->load->model('models/product/CreateProductModel','createProductModel',false);
            $this->load->model('services/product/CreateProductService','createProductService',false,$this->createProductModel);
        
            $response= $this->createProductService->__invoke($this->createProductCommand);
            
            header('Content-type: application/json');
            echo json_encode( $response );
        }
	}
}
