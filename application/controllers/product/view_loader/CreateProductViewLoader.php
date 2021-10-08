<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CreateProductViewLoader extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->helper('url');
    }

	public function load(){
		$this->load->view('admin/commons/header');
		$this->load->view('admin/product/create');
		$this->load->view('admin/commons/footer');
	}
}
