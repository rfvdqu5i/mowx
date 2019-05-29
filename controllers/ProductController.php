<?php
    require_once('models/Product.php');

    class ProductController{
        
        var $model; // Thuộc tính
        function __construct() {
            $this->model = new Product();
        }
        
        public function list() {
            $data = $this->model->getAll();
            include_once('view/product_list.php');
        }
        
        public function detail() {
            $code = $_GET['code'];
            $product = $this->model->find($code);
            
            include_once('view/product_detail.php');
        }
        
        public function add() {
            include_once('view/product_add.php');
        }
        
        public function insert_product() {
            
            function file_upload($target_dir,$input_name,$max_size, $formats_allowed_array){
		      $target_file = $target_dir."/" . basename($_FILES[$input_name]["name"]);
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                $error_arr =array();

                // Check if file already exists
                if (file_exists($target_file)) {
                    $error_arr[] = "Sorry, file already exists.";
                    $uploadOk = 0;
                }

                // Check file size
                if ($_FILES[$input_name]["size"] > $max_size) {
                    $error_arr[] = "Sorry, your file is too large.";
                    $uploadOk = 0;
                }
                // Allow certain file formats
                if(!in_array($imageFileType, $formats_allowed_array)) {
                    $error_arr[] = "Sorry, only ".implode(array_values($formats_allowed_array),',')." files are allowed.";
                    $uploadOk = 0;
                }

                // Check if $uploadOk is set to 0 by an error
                if ($uploadOk == 0) {
                    $error_arr[] = "Sorry, your file was not uploaded.";
                // if everything is ok, try to upload file
                } else {
                    if (move_uploaded_file($_FILES[$input_name]["tmp_name"], $target_file)) {
                        return $_FILES[$input_name]["name"];
                    } else {
                        $error_arr[] = "Sorry, there was an error uploading your file.";
                    }
                }
                return $error_arr;
            }
            
            if(isset($_POST['submit'])){ // kiểm tra xem button Submit đã được click hay chưa ? 
                $uploads = file_upload("public/images","product_image",500000,array('JPG', 'png', 'jpg', 'PNG'));
            }
            
            $data = $_POST;

            $p_model = new Product();
            
            $status = $this->model->insert_product($data);
            
            if($status == true){
                 setcookie('add_success','1',time() + 2); 
                 header('Location: ?mod=product&act=list');
            }else{
                 setcookie('add_failed','Thêm mới không thành công',time()+2);
                 header('Location: ?mod=product&act=add');
            }
        }
        
        public function edit() {
            
            $p_model = new Product();
            
            $code = $_GET['code'];
            
            $product = $this->model->find($code);
            include_once('view/product_edit.php');
        }
        
        public function detail_ajax() {
            
            $p_model = new Product();
            
            $code = $_GET['code'];
            
            $product = $this->model->find($code);

            echo json_encode($product);
        }
        
        public function update() {
            
            function file_upload($target_dir,$input_name,$max_size, $formats_allowed_array){
		      $target_file = $target_dir."/" . basename($_FILES[$input_name]["name"]);
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                $error_arr =array();

                // Check if file already exists
                if (file_exists($target_file)) {
                    $error_arr[] = "Sorry, file already exists.";
                    $uploadOk = 0;
                }

                // Check file size
                if ($_FILES[$input_name]["size"] > $max_size) {
                    $error_arr[] = "Sorry, your file is too large.";
                    $uploadOk = 0;
                }
                // Allow certain file formats
                if(!in_array($imageFileType, $formats_allowed_array)) {
                    $error_arr[] = "Sorry, only ".implode(array_values($formats_allowed_array),',')." files are allowed.";
                    $uploadOk = 0;
                }

                // Check if $uploadOk is set to 0 by an error
                if ($uploadOk == 0) {
                    $error_arr[] = "Sorry, your file was not uploaded.";
                // if everything is ok, try to upload file
                } else {
                    if (move_uploaded_file($_FILES[$input_name]["tmp_name"], $target_file)) {
                        return $_FILES[$input_name]["name"];
                    } else {
                        $error_arr[] = "Sorry, there was an error uploading your file.";
                    }
                }
                return $error_arr;
            }
            
            if(isset($_POST['submit'])){ // kiểm tra xem button Submit đã được click hay chưa ? 
                
                $uploads = file_upload("public/images","product_image",500000,array('JPG', 'png', 'jpg', 'PNG'));
            }
            unset($_POST['submit']);
            $data = $_POST;
            echo('data controller<br>');
            print_r($data);
            echo('<br>');
            echo('<br>');
            $p_model = new Product();
            
            $status = $this->model->update_product($data);
            if($status == true){
                setcookie('edit_success','1',time()+5); 
                header('Location: ?mod=product&act=list');
            }else{
                setcookie('edit_failed','1',time()+5);
                header('Location: ?mod=product&act=edit&code='.$data['product_code']);
            }
        }
        
        public function delete() {
        
            $p_model = new Product();
            
            $code = $_GET['code'];
            
            $product = $this->model->delete($code);
            
            setcookie('delete_success','1',time() + 2); 
            header('Location: ?mod=product&act=list');
        }
        
        function reduceQuantity($product_code, $quantity_buy) {
            $quantity_con = $this->getQuantity($product_code) - $quantity_buy;
            $query = "UPDATE ".$this->table_name." SET product_quantity = ".$quantity_con." WHERE ".$this->primary_key."= '".$product_code."'";
            $result = $this->conn->query($query);
            return $result;       
        }
        
        function getQuantity($code) {
            $query = "SELECT product_quantity FROM ".$this->table_name." WHERE ".$this->primary_key." = '".$code."' ";
            $result = $this->conn->query($query)->fetch_assoc()['product_quantity'];
            return $result;
        }
        
        function search_name($name) {
            $sql = "SELECT * FROM products WHERE product_name LIKE '%".$name['search']."%'";
            $result = $this->conn->query($sql);
            $data = array();
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }
    }

?>
