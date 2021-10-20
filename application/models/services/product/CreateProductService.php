
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CreateProductService extends CI_Model
{
   private $createProductModel;
    public function __construct($createProductModel)
    {
        $this->createProductModel=$createProductModel;
    }


    public function __invoke($createProductCommand){

       $response= $this->createProductModel->__invoke($createProductCommand);
       
       if($response)    $apiResponse =$this->response(100,'Successfully created product','',200);
       else             $apiResponse =$this->response(500,'There was a problem creating the product','',500);

       return $apiResponse;
    }


    
}
