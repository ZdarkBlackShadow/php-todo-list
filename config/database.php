<?php

class Database {
    protected $db;

    public function __construct() {
        $this->db = new PDO("mysql:host=127.0.0.1;dbname=todo_list","user","password");
    }

    public function GetConnection() {
        return $this->db;
    }
}
