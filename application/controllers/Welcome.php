<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{	
		$model = $this->load->model('test_model');
	}

	public function save(){
		print_r('hello world');
	}
}
