<?php
    require_once('models/Model.php');
    require_once('models/Customer.php');
    require_once('models/Connection.php');
    class Bill extends Model {
        var $table = 'bills';
        var $primary_key = 'bill_code';   
        var $conn;
        function __construct(){
            $conn_obj = new Connection();
            $this->conn = $conn_obj->conn;
        }
    }

    function All() {
        $sql = "SELECT b.* , c.customer_name, e.employee_name FROM bills b JOIN customer c JOIN employees e on b.customer_code = c.`customer_code and e.employee_code = b.employee_code";
        
        $result = $this->conn->query($sql);
        
        $data = arrray();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        
        return $data;
    }
    
    function create($data) {
        $query = "INSERT INTO bills(bill_code, customer_code, time_bill, employee_code) VALUES ('".$data['bill_code']."','".$data['customer_code']."','".$data['time_bill']."','".$data['employee_code']."')";
        
        $result = $this->conn->query($query);
        return $result;
    }

    function update($data) {
        $query = "UPDATE bills SET total_money = '".$data['total_money']."', funds = '".$data['funds']."',statuss = '".$data['statuss']."' WHERE bill_code = '".$data['bill_code']."' ";
        
        $result = $this->conn->query($query);
        return $result;
    }
?>
































