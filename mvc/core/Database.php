<?php
    class Database {
        public $connection;
        protected $severname = "localhost";
        protected $username = "root";
        protected $password = "";
        protected $dbname = "qlsv";

        function __construct() {
            $this->connection = mysqli_connect($this->severname, $this->username, $this->password);
            mysqli_select_db($this->connection, $this->dbname);
            mysqli_query($this->connection, "SET NAMES 'utf8'");
        }
    }
?>