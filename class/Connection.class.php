<?php

class Connection {

    private $host = 'localhost';
    private $dbName = 'artKomad';
    private $user = 'root';
    private $password = '';

    private $conn;

    public function getConnection() {
        $this->conn = NULL;

        try {
            $this->conn = new PDO('mysql:host='.$this->host.'; dbname='.$this->dbName, $this->user, $this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
            return $this->conn;
        } catch(PDOException $e) {
            die('Error: ' . $e->getMessage());
        }
    }
}