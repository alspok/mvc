<?php
namespace App\Helpers;

use App\Libs\Database;
use App\Models\Db;

class DataCompare
{
	public $tblName;
	public $userData;
	public $dbData;
	public $compare;

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
		$this->dbData = $getData->getData();

		return $this->dbData;
	}

	public function dataCompare()
	{
		$this->compare = TRUE;

		foreach($this->dbData as $dbItem){
			if($dbItem['email'] === $this->userData['regemail']){
				$this->compare = FALSE;
				break;
			}
		}

		return $this->compare;
	}
}