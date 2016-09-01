<?php 
namespace Test\Controllers;


/**
* Register Class 
*/
class registerController extends indexController
{
	public function initialize()
	{
		$this->tag->setTitle('Sign Up/Sign In');
		parent::initialize();
	}


	public function indexAction(){

		$form = new RegisterForm;
		if ($this->request->isPost()) {

			$username 	= $this->request->getPost('username','alphanum');
			$email 	 	 = $this->request->getPost('email');
			$pass 	  	= $this->request->getPost('password');
			$repeatPass = $this->request->getPost('repeatPassword');

			if ($pass<>$repeatPass) {
				$this->flash->error('Passwords are different');
				return false;
			}


			$userRegister        = new Users();
			$userRegister->username  = $username;
			$userRegister->password  = sha1($pass);
			$userRegister->mail = $email;
			
			if ($userRegister->save() == false ) {
				echo ":(";
				foreach ($userRegister->getMessages() as $message) {
					$this->flash->error((string) $message);
				}

			} else {
				return $this->forward('index/index');

			}

		}

		$this->view->form = $form;
	}

}

