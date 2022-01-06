<?php

class Database
{

    // specify your own database credentials
    private $host = "localhost";
    private $db_name = "vcs"; //virtualcaresolution
    private $username ="root";// "vcsdb";
    private $password = "ALPHa251611";//"ALPHa251611";//"Rehab@2021";
    const AppId = "59d107639dca474c9ac93fc22d9301c3";
    const KEY = "34c06e4669304ce98e30e73ce761bb08";

    // private $host ="160.153.133.208";//"160.153.133.208";$dbhost; //
    // private $db_name = "virtualcaresolution";    //virtualcaresolution
    // private $username ="vcsdb";// "vcsdb";$dbusername; //
    // private $password ="Rehab@2021";//"Rehab@2021"; $dbpwd; //
    // const AppId = "59d107639dca474c9ac93fc22d9301c3";
    // const KEY = "34c06e4669304ce98e30e73ce761bb08";

    public $conn;

    // get the database connection
    public function getConnection()
    {
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}


/* a:3:{i:0;s:23:"elementor/elementor.php";i:1;s:27:"ocean-extra/ocean-extra.php";i:2;s:24:"wpforms-lite/wpforms.php";} */