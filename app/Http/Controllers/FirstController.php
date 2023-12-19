<?php
namespace App\Http\Controllers;
use App\Connection\Database;

class FirstController
{
    public function index()
    {
       $db = Database::getInstance();
       $users = $db->query("SELECT * FROM users")->fetchAll();
      return $users;
    }
}