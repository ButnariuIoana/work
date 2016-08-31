<?php 
use Phalcon\Mvc\Controller;

class indexController extends Controller
{


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