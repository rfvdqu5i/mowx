<?php
    require_once('models/Connection.php');
    class AdminController{
        var $model; // Thuộc tính
        function __construct() {
            $conn_obj = new Connection();
            $this->conn = $conn_obj->conn;
        }
        
        function overview(){
            $query = "SELECT COUNT(*) AS slsp FROM products";
            $sp = $this->conn->query($query)->fetch_assoc()['slsp'];
            
            $query = "SELECT COUNT(*) AS sldh FROM bills";
            $dh = $this->conn->query($query)->fetch_assoc()['sldh'];
            
            $query = "SELECT COUNT(*) AS slkh FROM customers";
            $kh = $this->conn->query($query)->fetch_assoc()['slkh'];
            
            $query = "SELECT COUNT(*) AS slnv FROM employees";
            $nv = $this->conn->query($query)->fetch_assoc()['slnv'];
            
            $query = "SELECT COUNT(*) AS spsh FROM products WHERE product_quantity <= 5";
            $spsh = $this->conn->query($query)->fetch_assoc()['spsh'];
            
            $query = "SELECT SUM(total_money) AS ttdb FROM bills";
            $ttdb = $this->conn->query($query)->fetch_assoc()['ttdb'];
            
            $query = "SELECT SUM(quantity_buy) AS spdb FROM detail_bill";
            $spdb = $this->conn->query($query)->fetch_assoc()['spdb'];
            
            $query = "SELECT SUM(product_quantity) AS sptk FROM products";
            $sptk = $this->conn->query($query)->fetch_assoc()['sptk'];
            
            include_once('view/overview.php');
        }
    }

?>