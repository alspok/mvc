<?php 

include_once('libs/Controller.php');

class PostsController extends Controller{

	// public function index(){
	// 	echo 'visi irasai';
	// }

	// public function show($id){
	// 	echo $id;
	// }

	public function index()
	{
		$this->view->title = '8484746';
		$this->view->headline = "headlaine";
		$this->view->render('header');
		$this->view->render('posts');
	}

	public function show($id)
	{
		echo 'LOL';
		echo $id;
	}
}