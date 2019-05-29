<?php
    require_once('env.php');
    class Connection{
        
        var $conn;
        
        function __construct() {
                
            // Create connection
            $this->conn = new mysqli(HOST, USER, PASS, DB_NAME);
            $this->conn->set_charset("utf8");
            // Check connection
            if ($this->conn->connect_error) {
                die("Connection failed: " . $this->conn->connect_error);
            } 
        }
    }

?>