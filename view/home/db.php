<?php
class connect {
    private $host = "localhost";
    private $dbname = "bookstore";
    private $username = "root";
    private $password = "";

    public $db = null;
    public function __construct() {

        $this->db = new PDO("mysql:host={$this->host};
        dbname={$this->dbname}", 
        $this->username, 
        $this->password);
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8";);
    }

    //select
    //select many

    public function getlist($sql) {
        return $this->db->query($sql);
    }

    //select one
    public function getInstance($sql) {
        return $this->db->query($sql)->fetch();
    }