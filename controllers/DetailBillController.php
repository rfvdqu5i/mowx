<?php
    require_once('models/DetailBill.php');
    require_once('models/Connection.php');

    class DetailBillController{
        
        var $model; // Thuộc tính
        function __construct() {
            $this->model = new DetailBill();
            $conn_obj = new Connection();
            $this->conn = $conn_obj->conn;
        }
    }



?>
