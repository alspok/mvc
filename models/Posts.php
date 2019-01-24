<?php

include_once('C:/wamp/www/alspok/mvc/libs/Database.php');

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