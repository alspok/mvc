<?php
namespace App\Controlers;

use Libs\Controller;
use Helpers\FormHelper;

// include_once('libs/Controller.php');
// include_once('helpers/FormHelper.php');

class ViewsController extends Controller
{
	// $this->view->render('header');
	// $this->view->render('content');
	// $this->view->render('posts');


	public function registration()
	{
		$this->view->render('header');
		$this->view->render('content');
		$this->view->render('posts');		
		$this->view->render('footer');

		var_dump($_POST);
	}
}