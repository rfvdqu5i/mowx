<?php
    require_once('models/Customer.php');

    class CustomerController{
        
        var $model; // Thuộc tính
        function __construct() {
            $this->model = new Customer();
        }
        
        public function list() {
            $data = $this->model->getAll();
            include_once('view/customer_list.php');
        }
        
        public function detail() {
            $code = $_GET['code'];
            $customer = $this->model->find($code);
            
            include_once('view/customer_detail.php');
        }
        
        public function add() {
            include_once('view/customer_add.php');
        }
        
        public function insert() {
            $data = $_POST;
            
            $p_model = new Customer();
            
            $status = $this->model->insert($data);

            if($status == true){
                 setcookie('add_success','1',time() + 2); 
                 header('Location: ?mod=customer&act=list');
            }else{
                 setcookie('add_failed','Thêm mới không thành công',time()+2);
                 header('Location: ?mod=customer&act=add');
            }
        }
        
        public function edit() {
            
            $p_model = new Customer();
            
            $code = $_GET['code'];
            
            $customer = $this->model->find($code);
            include_once('view/customer_edit.php');
        }
        
        public function detail_ajax() {
            
            $p_model = new Customer();
            
            $code = $_GET['code'];
            
            $customer = $this->model->find($code);

            echo json_encode($customer);
        }
        
        public function update() {
            $data = $_POST;
            
            $p_model = new Customer();
            
            $status = $this->model->update_customer($data);
            if($status == true){
                setcookie('edit_success','1',time()+5); 
                header('Location: ?mod=customer&act=list');
            }else{
                setcookie('edit_failed','1',time()+5);
                header('Location: ?mod=customer&act=edit&code='.$data['CODE']);
            }
        }
        
        public function delete() {
        
            $p_model = new Customer();
            
            $code = $_GET['code'];
            
            $customer = $this->model->delete($code);
            
            setcookie('delete_success','1',time() + 2); 
            header('Location: ?mod=customer&act=list');
        }
        
    }

?>
