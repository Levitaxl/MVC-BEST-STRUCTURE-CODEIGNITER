<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GetStore extends CI_Controller {

	public function __construct()
        {
            parent::__construct();
            // Your own constructor code
        }

	public function index(){
		print_r('test');
		return 'test';
	}

	public function GetStoreController(){
		print_r('store');
		return 'store';
	}
}
