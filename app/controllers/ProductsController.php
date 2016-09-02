<?php 

namespace Test\Controllers;
use Test\Forms\ProductsForm;
use Test\Models\Games;

/**
* 
*/
class ProductsController extends indexController
{
	
	public function indexAction(){

		$em 	= $this->di['entityManager'];

		$companies = $em->getRepository("Test\Models\Companies")->findAll();
		$this->view->companies = $companies;


	}


	public function addAction()
	{
		$form = new ProductsForm();

		if ($this->request->isPost() == true ) {
			$name 		 = $this->request->getPost('name');
			$company 	 = $this->request->getPost('company');
			$description = $this->request->getPost('description');
			$price 		 = $this->request->getPost('price'); 
			$info 		 = $this->request->getPost('info');

			$products 	 = new Games();

			$products->name        = $name;
			$products->description = $description;
			$products->cost 	   = $price;
			$products->company	   = $company;
			$products->info 	   = $info ;

			if ($products->save() == false) {
				echo ":(";
				foreach ($products->getMessages() as $message) {
					$this->flash->error((string) $message);
					return  $this->forward('products/index');
				}
			}else{
				return  $this->forward('products/index');

			}

		}
	}


}
?>