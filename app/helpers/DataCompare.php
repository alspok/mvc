<?php
namespace App\Helpers;

use App\Libs\Database;
use App\Models\Db;

class DataCompare
{
	public $tblName;
	public $userData;
	public $resultData;

	public function __construct($tblName, $userData)
	{
		$this->tblName = $tblName;
		$this->userData = $userData;
	}

	public function getDbTable()
	{
		$DB = new Database();
		$dbObject = $DB->select()->from($this->tblName);
		$query = $dbObject->getQuery();

		$getData = new Db($query);
		$resultData = $getData->getData();
		var_dump($resultData);

		return $this->resultData;
	}

	
}