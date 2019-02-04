<?php

// namespace App\Controllers;
namespace App;
use App\Libs\Database;

class Posts
{
    public function getAllPosts()
    {
        $db = new Database;
        $db->select()->from('tbl_mvc');
        return $db->get();
    }

    public function getPostById()
    {
        $db = new Database();
        $db->select()->from('tbl_mvs')->where('id', $id);
    }
}