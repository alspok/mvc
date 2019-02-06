<?php

namespace App\Models;
use App\Libs\Database;

class Db
{
	public $queryString;
	public $result;

	public function __construct($queryString)
	{
		$this->queryString = $queryString;
	}

	public function connect()
    {
        $this->conn = mysqli_connect('localhost', 'root', '', 'alspok_mvc_php');
        if(!$this->conn) echo 'Connection error';
        return $this;
    }

	public function putData()
    {
        if($this->conn->query($this->queryString)){
        	echo 'Reg data saved in DB';
        	return $this;
        }
        else{
        	echo 'Error writing to DB';
        }
    }

	public function getData()
    {
		$dbData = [];
		$q = $this->connect();
        $this->result = $q->query($this->query);

        while($row = $this->result->fetch_array(MYSQLI_ASSOC)){
            foreach($row as $item){
                array_push($dbData, $item);
            }
        }
        return $dbData;
    }

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