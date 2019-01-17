<?php 

include_once('libs/Controller.php');
// include_once('libs/Database.php');
include_once('models/Posts.php');

class PostsController extends Controller{

	// public function index(){
	// 	echo 'visi irasai';
	// }

	// public function show($id){
	// 	echo $id;
	// }

	public function index()
	{

		$posts = new Posts();
		$this->view->posts = $posts->getAllPosts();
		// $this->view->title = '8484746';
		$this->view->headline = "headlaine";
		$this->view->render('header');
		$this->view->render('posts');

		$DB = new Database();
		$DB->select('id, name')->from('tbl_mvc')->where('id', '1', '=');
		print_r($DB);
		$DB->select()->from('tbl_mvc');
		print_r($DB);
	}

	public function show($id)
	{
		echo 'LOL';
		echo $id;
	}
}