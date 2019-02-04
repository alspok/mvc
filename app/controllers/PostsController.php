<?php 

namespace App\Controllers;

use App\Libs\Database;
use App\Helpers\FormHelper;
use App\Helpers\DbCompare;
use App\Libs\Controller;

class PostsController extends Controller
{

	public function index()
	{
		$this->view->render('header');
		$this->view->render('posts');
		
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

		$form = new FormHelper('POST', '/alspok/mvc/index.php/posts/add/store');

		$form->input([
			'name' => 'name',
			'type' => 'text',
			'placeholder' => 'something'
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

		// echo $form->get();

		$this->view->render('footer');
	}

	public function store()
	{	
		echo 'in postcontroller store function';
		$addData = $_POST;
		var_dump($addData);

		$DB = new Database();
		$DB->insert('tbl_mvc')->column('slug, title, content')->values('"' . $addData['title'] . '","' . $addData['image'] . '","' . $addData['textarea'] . '"')->connect()->putData();
		$DB->select()->from('tbl_mvc')->connect()->getData();
	}

	public function log()
	{
		echo 'in log';
		$dbInspect = new DbCompare('tbl_users', $_POST);
		$dbInspect->getDbTable();
	}

	public function reg()
	{
		echo 'in reg';
		$regData = $_POST;
		var_dump($regData);
		$DB = new Database();
		$DB->insert('tbl_users')->column('name, password, email, active')->values('"' . $regData['regname'] . '","' . $regData['regpass'] . '","' . $regData['regemail'] . '","' . TRUE . '"')->connect()->putData();
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

	public function show($id)
	{
		echo 'LOL';
		echo $id;
	}

	public function logreg()
	{
		
		$this->view->render('header');
		$this->view->render('content');
		$this->view->render('logreg');
		$this->view->render('footer');
	}
}

