<?php
namespace App\Helpers;

use App\Models\Db;

class DbCompare
{
	public $tblName;
	public $userItem;

	public function __construct($tblName, $userItem)
	{
		$this->tblName = $tblName;
		$this->userItem = $userItem;
	}

	public function getDbTable()
	{

		$dbString = 'select->from(' . $this->tblName . ')->connect()->get()';
		$DB = new Db($dbString);
		var_dump($DB->dbHandler());
	}
}