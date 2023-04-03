<?php

class Database {
    private $host;
    private $username;
    private $password;
    private $database;

    public function __construct() {
        global $config;
        require_once('../config/database.php');
        $this->host = $config['host'];
        $this->username = $config['username'];
        $this->password = $config['password'];
        $this->database = $config['database'];
    }

    public function connect() {
        $conn = mysqli_connect($this->host, $this->username, $this->password, $this->database);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        return $conn;
    }
}