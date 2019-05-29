<?php
    require_once('models/Bill.php');

    class BillController{
        
        var $model; // Thuộc tính
        function __construct() {
            $this->model = new Bill();
        }
        
        public function list() {
            $data = $this->model->getAll();
            include_once('view/bill_list.php');
        }
        
        public function detail() {
            $code = $_GET['code'];
            $bill = $this->model->find($code);
            
            include_once('view/bill_detail.php');
        }
        
        public function add() {
            include_once('view/bill_add.php');
        }
        
        public function insert() {
            $data = $_POST;
            
            $p_model = new Bill();
            
            $status = $this->model->insert($data);

            if($status == true){
                 setcookie('add_success','1',time() + 2); 
                 header('Location: ?mod=bill&act=list');
            }else{
                 setcookie('add_failed','Thêm mới không thành công',time()+2);
                 header('Location: ?mod=bill&act=add');
            }
        }
        
        public function edit() {
            
            $p_model = new Bill();
            
            $code = $_GET['code'];
            
            $bill = $this->model->find($code);
            include_once('view/bill_edit.php');
        }
        
        public function detail_ajax() {
            
            $p_model = new Bill();
            
            $code = $_GET['code'];
            
            $bill = $this->model->find($code);

            echo json_encode($bill);
        }
        
        public function update() {
            $data = $_POST;

            $p_model = new Bill();
            
            $status = $this->model->update_bill($data);
            if($status == true){
                setcookie('edit_success','1',time()+5); 
                header('Location: ?mod=bill&act=list');
            }else{
                setcookie('edit_failed','1',time()+5);
                header('Location: ?mod=bill&act=edit&code='.$data['bill_code']);
            }
        }
        
        public function delete() {
        
            $p_model = new Bill();
            
            $code = $_GET['code'];
            
            $bill = $this->model->delete($code);
            
            setcookie('delete_success','1',time() + 2); 
            header('Location: ?mod=bill&act=list');
        }
        
    }

?>
