<?php 

include_once('libs/Controller.php');
include_once('libs/Database.php');
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
		// $posts = new Posts();
		// $this->view->posts = $posts->getAllPosts();

		// $this->view->title = '8484746';
		// $this->view->headline = "headlaine";
		$this->view->render('header');
		$this->view->render('content');
		
		$DB = new Database();
		$DB->select()->from('tbl_mvc')->connect()->getData();

		$DB = new Database();
		$DB->select('id, slug')->from('tbl_mvc')->where('id', '1', '=')->connect()->getData();

		$DB = new Database();
		$DB->insert('tbl_mvc')->column('slug, title, content')->values("'some', 'title', 'something'")->connect()->putData();
		$DB->select()->from('tbl_mvc')->connect()->getData();

		$DB = new Database();
		$DB->update('tbl_mvc')->set('slug', "'newslug'", '=')->where('id', '10', '=')->connect()->putData();
		$DB->select()->from('tbl_mvc')->connect()->getData();

		$DB = new Database();
		$DB->delete('tbl_mvc')->where('id', '5', '=')->connect()->putData();
		$DB->select()->from('tbl_mvc')->connect()->getData();

		$this->view->render('footer');
	}

	public function show($id)
	{
		echo 'LOL';
		echo $id;
	}
}