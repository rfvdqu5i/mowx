<?php
    require_once('Connection.php');
    class Model{
        
        var $conn;
        
        var $table = '';
        var $primary_key = 'id';
        
        function __construct(){
            $connection_object = new Connection();
            $this->conn = $connection_object->conn;
        }
        
        public function getAll() {

            $query = "SELECT * FROM ".$this->table;

            $result = $this->conn->query($query);

            $data = array();
            while($row = $result->fetch_assoc()) { 
                $data[] = $row;
            }

            return $data;
        }
        
        public function find($code) {


            $query = "SELECT * FROM ".$this->table." WHERE ".$this->primary_key." = '".$code."' ";

            $result = $this->conn->query($query);

            $data = $result->fetch_assoc();

            return $data;
        }
        
        public function insert($data) {

            $data = $_POST;

            $fields = '';
            $values = '';
            
            foreach ($data as $key => $value) {
                $fields .= $key .',';
                $values .= "'".$value."',";
                
//                echo "<br> $values";
            }
            
            $fields = trim($fields,',');
            $values = trim($values,',');
            
//            echo "<br> $fields";
//            echo "<br> $values";

            $query = "INSERT INTO ".$this->table." (".$fields.") VALUES (".$values.")";

            $result = $this->conn->query($query);
            
            return $result;
        }
        
        public function insert_cus($data) {
            $query = "INSERT INTO customers (customer_code,customer_name,customer_birthday,customer_email,customer_mobile,customer_address) VALUES ('".$data['customer_code']."','".$data['customer_name']."','".$data['customer_birthday']."','".$data['customer_email']."','".$data['customer_mobile']."','".$data['customer_address']."') ";
            
            $result = $this->conn->query($query);
            
            return $result;
        }
        
        public function insert_product($data) {
            unset($_POST['submit']);
            
            $data = $_POST;
            
            $fields = '';
            $values = '';
            
            foreach ($data as $key => $value) {
                $fields .= $key .',';
                $values .= "'".$value."',";
                
//                echo "<br> $values";
            }
            
            $fields = trim($fields,',');
            $values = trim($values,',');
            
//            echo "<br> $fields";
//            echo "<br> $values";

            $query = "INSERT INTO ".$this->table." (".$fields.",product_image) VALUES (".$values.",'".$_FILES['product_image']['name']."')";

            $result = $this->conn->query($query);
            
            return $result;
        }
        
        public function insert_bill($data) {
            $query = "INSERT INTO bills (bill_code,customer_code,total_money,time_bill,employee_code) VALUES ('".$data['bill_code']."','".$data['customer_code']."','".$data['total_money']."','".$data['time_bill']."','".$data['employee_code']."')";

            $result = $this->conn->query($query);
            
            return $result;
        }
        
        function create_detail($data) {
            $query = "INSERT INTO detail_bill(bill_code, product_code, quantity_buy, into_money) VALUES ('".$data['bill_code']."','".$data['product_code']."','".$data['quantity_buy']."','".$data['into_money']."')";

            $result = $this->conn->query($query);
            return $result;
        }
        
        function reduceQuantity($product_code, $quantity_buy) {
            $query = "SELECT product_quantity FROM products WHERE product_code = '".$product_code."' ";
            $num = 0;
            $result = $this->conn->query($query);
            $num = $result->fetch_assoc()['product_quantity'];
            $quantity_con = $num - $quantity_buy;

            $query = "UPDATE products SET product_quantity = ".$quantity_con." WHERE product_code = '".$product_code."' ";

            $result = $this->conn->query($query);
            
            return $result;
        }
        
        
        
        public function detail_ajax($code) {
            require_once('models/Connection.php');
            
            $CODE = $_GET['code'];

            $query = "SELECT * FROM products WHERE product_code='".$CODE."' ";

            $result = $conn->query($query);

            $product = $result->fetch_assoc();

            return $product;
        }
        
        public function update_bill($data) {

            $data = $_POST;

            $query = "UPDATE bills SET customer_code='".$data['customer_code']."', total_money='".$data['total_money']."', time_bill='".$data['time_bill']."', employee_code='".$data['employee_code']."', funds='".$data['funds']."', statuss='".$data['statuss']."' WHERE bill_code='".$data['bill_code']."' ";

            $result = $this->conn->query($query);
            
            return $result;
        }
        
        public function update_product($data) {
            if (strlen($_FILES['product_image']['name']) == 0) {
                $_FILES['product_image']['name'] = $_POST['product_image'];
            } else {
                $_FILES['product_image']['name'] = $_FILES['product_image']['name'];
            }

            
            unset($_POST['product_image']);
            $data = $_POST;
            
            $query = "UPDATE products SET product_name='".$data['product_name']."', product_image='".$_FILES['product_image']['name']."', category_code='".$data['category_code']."', product_quantity='".$data['product_quantity']."', product_price='".$data['product_price']."' WHERE product_code='".$data['product_code']."' ";
            echo($query);
            
            $result = $this->conn->query($query);
            
            return $result;
        }
        
        public function update_customer($data) {

            $data = $_POST;

            $query = "UPDATE customers SET customer_name='".$data['customer_name']."', customer_birthday='".$data['customer_birthday']."', customer_email='".$data['customer_email']."', customer_mobile='".$data['customer_mobile']."', customer_address='".$data['customer_address']."' WHERE customer_code='".$data['customer_code']."' ";
            
            $result = $this->conn->query($query);
            
            return $result;
        }

        public function update_employee($data) {

            $data = $_POST;

            $query = "UPDATE employees SET employee_name='".$data['employee_name']."', employee_birthday='".$data['employee_birthday']."', employee_email='".$data['employee_email']."', employee_mobile='".$data['employee_mobile']."', employee_address='".$data['employee_address']."' WHERE employee_code='".$data['employee_code']."' ";
            
            $result = $this->conn->query($query);
            
            return $result;
        }
        
        public function delete($code) {

            $query = "DELETE FROM ".$this->table." WHERE ".$this->primary_key." ='".$code."' ";

            $result = $this->conn->query($query);

            return $result;
        }
        
    }
    

?>