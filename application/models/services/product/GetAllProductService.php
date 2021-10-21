
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class GetAllProductService extends CI_Model
{
   private $getAllProductModel;
    public function __construct($getAllProductModel)
    {
        $this->getAllProductModel=$getAllProductModel;
    }


    public function __invoke(){

       $response= $this->getAllProductModel->__invoke();
       if($response)    $apiResponse =$this->response(100,'Successfully created product',$response,200);
       else             $apiResponse =$this->response(500,'There was a problem creating the product','',500);

       return $apiResponse;
    }


    
}
