<?php 
namespace Test\Controllers;

use Test\Forms\ContactForm;
use Test\Models\Contact;
/**
*  Contact controller
*/
class contactController extends indexController
{
	
	public function initialize()
	{
		$this->tag->setTitle('Contact');
		parent::initialize();
	}
	public function indexAction()
	{
		$form 		= new ContactForm();
		$contact    = new Contact() ;

		if ($this->request->isPost()) {

			$name 		= $this->request->getPost('name');
			$mail 		= $this->request->getPost('email');
			$comments	= $this->request->getPost('comments');


			$contact->name 		= $name;
			$contact->mail 	    = $mail;
			$contact->comments  = $comments;


			if ($contact->save() == false) {
				echo ":(";
				foreach ($contact->getMessages() as $message) {
					$this->flash->error((string) $message);
				}
			}else{

				$this->flash->success("Hooray it worked !!!");
				return	$this->forward('index/index');
			}

		}else {
			$this->flash->error("You better write something there !");
		}
		$this->view->form = $form;
	}

	
}

?>