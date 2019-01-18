<?php

class Database
{
    private $conn;
    private $query = '';
    private $result;

    public function connect()
    {
        $this->conn = mysqli_connect('localhost', 'root', '', 'alspok_mvc_php');
        if(!$this->conn) echo 'Connection error';
        return $this;
    }

    public function select($target = '*')
    {
        $this->query = 'SELECT ' . $target . ' ';
        return $this;
    }

    public function from($tableName)
    {
        $this->query .= 'FROM ' . $tableName . ' ';
        return $this;
    }

    public function where($field, $value, $operator = '=')
    {
        $this->query .= 'WHERE ' . $field . ' ' . $operator . ' ' . $value;
        return $this;
    }

    public function whereAnd($field, $value, $operator = '=')
    {
        $this->query .= 'AND ' . $field . ' ' . $operator . ' ';
        return $this;
    }

    public function whereOr($field, $value, $operator = '=')
    {
        $this->query .= 'OR ' . $field . ' ' . $operator . ' ';
        return $this;
    }

    public function insert($tableName)
    {
        $this->query .= 'INSERT INTO ' . $tableName . ' ';
        return $this;
    }

    public function column($columns)
    {

        $this->query .= '(' . $columns . ')';
        return $this;
    }

    public function values($values)
    {
        $this->query .= ' VALUES (' . $values . ')';
        return $this;
    }

    public function delete($tableName)
    {
        $this->query .= 'DELETE FROM ' . $tableName . ' ';
        return $this;
    }

    public function putData()
    {
        $this->conn->query($this->query);
    }

    public function getData()
    {
        $this->result = $this->conn->query($this->query)->fetch_array(MYSQLI_NUM);
        echo '<pre>';
        print_r($this->result);
    }

    public function getModData()
    {
        $this->result = $this->conn->query($this-select()->$this->from())->fetch_array(MYSQLI_NUM);
        echo '<pre>';
        print_r($this-result);
    }
}