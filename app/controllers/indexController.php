<?php 
namespace Test\Controllers;

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Dispatcher;

class indexController extends Controller
{
	

 /**
     * Execute before the router so we can determine if this is a private controller, and must be authenticated, or a
     * public controller that is open to all.
     *
     * @param Dispatcher $dispatcher
     * @return boolean
     */
 
	public function initialize()
	{

		$this->tag->setTitle('Welcome');
		$this->view->setTemplateAfter('main');
	}




	public function indexAction()
	{
		if (!$this->request->isPost()) {
			$this->flash->notice(':)');
		}
	}


	protected function forward($uri)
	{
		$uriParts = explode('/', $uri);
		$params = array_slice($uriParts, 2);
		return $this->dispatcher->forward(
			array(
				'controller' => $uriParts[0],
				'action' => $uriParts[1],
				'params' => $params
				)
			);
	}
}



?>