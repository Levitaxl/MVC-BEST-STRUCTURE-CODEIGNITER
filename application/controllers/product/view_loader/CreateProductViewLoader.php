<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CreateProductViewLoader extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->helper('url');
    }

	public function load(){

        /*$url = 'http://localhost/codeigniter_ddd/product/CreateProductController/CreateProduct';

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        //curl_setopt($ch, CURLOPT_POSTFIELDS,'d58840bf5801283bb1d321f7816fa7b3e3f930ccc02fae4b3174344801a49aec='.$hash);
		$result = curl_exec($ch);
		curl_close($ch);*/
		$this->load->view('admin/commons/header');
		$this->load->view('admin/product/create');
		$this->load->view('admin/commons/footer');
	}
}
