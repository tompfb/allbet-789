<?php
class connectDB
{
    public $conn;
    private $hostName = "localhost"; 
    private $userName = "igoalplu_allbet-789_com";
    private $password = "allbet-789-com";
    private $dbName = "igoalplu_allbet_789_com";

    function __construct()
    {
        $this->conn = new mysqli($this->hostName, $this->userName, $this->password, $this->dbName);
        $this->conn->set_charset("utf8");
        if (!$this->conn) {
            die("Connection failed" . mysqli_connect_error());
        }
    }
}
