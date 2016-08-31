<?php  

/**
* 
*/
class loginController extends indexController
{
	
	public function initialize()
	{
		$this->tag->setTitle('Sign Up/Sign In');
		parent::initialize();
	}



	public function startAction()
	{

		if ($this->request->isPost()) {
			
			$username = $this->request->getPost('username');
			$password = $this->request->getPost('password');

			$exists = 	Users::findFirst( array('username =:username: AND password=:password: ',
				'bind' => array('username' => $username, 'password' => sha1($password))
				));

			if ($exists == false) {

				 $this->flash->error('Wrong email/password');
				 return $this->forward('index/index');
			}else{
				 $this->flash->success('Welcome  '.$username  . '!!!!');
			}



		}


	}
}

?>