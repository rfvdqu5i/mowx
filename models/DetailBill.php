<?php
    require_once('models/Model.php');
    require_once('models/Customer.php');
    require_once('models/Connection.php');
    class DetailBill extends Model {
        var $table = 'detail_bill';
        var $primary_key = 'bill_code';   
        var $conn;
        function __construct(){
            $conn_obj = new Connection();
            $this->conn = $conn_obj->conn;
        }
    }
    function create_detail($data) {
        $query = "INSERT INTO detail_bill(bill_code, product_code, qunatity_buy, into_money) VALUES ('".$prod['bill_code']."','".$prod['product_code']."','".$prod['quantity_buy']."','".$prod['into_money']."')";
        
        $result = $this->conn->query($query);
        return $result;
    }
?>