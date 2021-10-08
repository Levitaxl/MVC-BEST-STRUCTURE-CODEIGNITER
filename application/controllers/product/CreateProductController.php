<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CreateProductController extends CI_Controller {


	public function __construct()
    {
        parent::__construct();
    }

	public function CreateProduct(){
        $payload= $this->input->post();
        $payload = array(
            'title'         => 'title Test',
            'price'         => 30,
            'quantity'      => 30,
            'description'   => 'Test Description'
        );
        $this->load->model('commands/product/CreateProductCommand','command', false, $payload);
        $this->load->model('services/product/CreateProductService','service',false,$this->command);
        $this->service->__invoke();
        die();
	}
}
