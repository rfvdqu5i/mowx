<?php
    require_once('models/Model.php');
    class Customer extends Model {
        var $conn;
        var $table = 'customers';
        var $primary_key = 'customer_code';   
        
        function check($data){
            $query = "SELECT * FROM customers WHERE customer_email='".$data['customer_email']."' AND  customer_password='".$data['customer_password']."'";

            $result = $this->conn->query($query)->fetch_assoc();
            return $result;
        }
        
        function check_email($data) {
            $query = "SELECT * FROM customers WHERE customer_email='".$data['customer_email']."' ";

            $result = $this->conn->query($query)->fetch_assoc();
            return $result;
        }
        
        function update_customer($data) {
            $query = "UPDATE customers SET customer_name='".$data['customer_name']."', customer_birthday='".$data['customer_birthday']."', customer_mobile='".$data['customer_mobile']."', customer_address='".$data['customer_address']."', customer_password='".$data['customer_password']."' WHERE customer_email='".$data['customer_email']."' ";
            
            $result = $this->conn->query($query);
            
            return $result;
        }
        
        function insert_customer($data) {
            $query = "INSERT INTO customers (customer_code,customer_name,customer_birthday,customer_email,customer_mobile,customer_address,customer_password) VALUES ('".$data['customer_code']."','".$data['customer_name']."','".$data['customer_birthday']."','".$data['customer_email']."','".$data['customer_mobile']."','".$data['customer_address']."','".$data['customer_password']."') ";

            $result = $this->conn->query($query);
            
            return $result;
        }
    }

?>
