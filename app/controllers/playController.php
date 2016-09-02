<?php 
namespace Test\Controllers;

use  Test\Models\Games;

/**
* 
*/
class playController extends indexController
{
	
	public function initialize()
	{

		$this->tag->setTitle('Play');
		parent::initialize();
	}


	public function indexAction()
	{
		$em 		= $this->di['entityManager'];
		$game 	 	= new Games();
		$games 		= $em->getRepository('Test\Models\Games')->findAll();


		$this->view->games 	 = $games;


		
	}
}

?>