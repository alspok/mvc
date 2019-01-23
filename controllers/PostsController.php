<?php 

include_once('libs/Controller.php');
include_once('controllers/PostsController.php');
include_once('libs/Database.php');
include_once('helpers/FormHelper.php');
include_once('helpers/Helper.php');

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

	public function add()
	{
		$this->view->render('header');
		$this->view->render('content');

		$form = new FormHelper('POST', '/alspok/oop/mvc/index.php/posts/add/store');

		$form->input([
			'name' => 'title',
			'type' => 'text',
			'placeholder' => 'Title'
		])->input([
			'name' => 'image',
			'type' => 'text',
			'placeholder' => 'Image Url'
		])->input([
			'name' => 'public',
			'type' => 'checkbox',
			'value' => '1'
		]);

		$form->selection([
			'name' => 'selection',
			'id' => 'sel',
			'class' => 'selection'
		]);

		$form->selectionOption([
			'option1' => 'opt',
			'option2' => 'opt',
			'option3' => 'opt',
			'option4' => 'opt'
		]);

		$form->textArea([
			'name' => 'textarea',
			'rows' => 20,
			'cols' => 30,
			'text' => 'Some text in text area.'
		]);

		$form->input([
			'name' => 'submit',
			'type' => 'submit',
			'value' => 'Add'
		]);

		echo $form->get();

		$this->view->render('footer');
	}

	public function store()
	{
		$addData = $_POST;
		var_dump(gettype($addData));

		$DB = new Database();
		$DB->insert('tbl_mvc')->column('slug, title, content')->values('"' . $addData['title'] . '","' . $addData['image'] . '","' . $addData['textarea'] . '"')->connect()->putData();
		$DB->select()->from('tbl_mvc')->connect()->getData();

	}

	public function edit()
	{

	}

	public function update()
	{

	}

	public function delete()
	{

	}

	public function test()
    {
		$slug = Helper::getSlug('Post pavadinimas');
		echo $slug;
    }

	public function show($id)
	{
		echo 'LOL';
		echo $id;
	}
}

