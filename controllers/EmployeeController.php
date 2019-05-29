<?php
    require_once('models/Employee.php');

    class EmployeeController{
        
        var $model; // Thuộc tính
        function __construct() {
            $this->model = new Employee();
        }
        
        public function list() {
            $data = $this->model->getAll();
            include_once('view/employee_list.php');
        }
        
        public function detail() {
            $code = $_GET['code'];
            $employee = $this->model->find($code);
            
            include_once('view/detail.php');
        }
        
        public function add() {
            include_once('view/employee_add.php');
        }
        
        public function insert() {
            $data = $_POST;
            
            $p_model = new Employee();
            
            $status = $this->model->insert($data);
            
            if($status == true){
                 setcookie('add_success','1',time() + 2); 
                 header('Location: ?mod=employee&act=list');
            }else{
                 setcookie('add_failed','Thêm mới không thành công',time()+2);
                 header('Location: ?mod=employee&act=add');
            }
        }
        
        public function edit() {
            
            $p_model = new Employee();
            
            $code = $_GET['code'];
            
            $employee = $this->model->find($code);
            include_once('view/employee_edit.php');
        }
        
        public function detail_ajax() {
            
            $p_model = new Employee();
            
            $code = $_GET['code'];
            
            $employee = $this->model->find($code);

            echo json_encode($employee);
        }
        
        public function update() {
            $data = $_POST;
            
            $p_model = new Employee();
            
            $status = $this->model->update_employee($data);
            if($status == true){
                setcookie('edit_success','1',time()+5); 
                header('Location: ?mod=employee&act=list');
            }else{
                setcookie('edit_failed','1',time()+5);
                header('Location: ?mod=employee&act=edit&code='.$data['CODE']);
            }
        }
        
        public function delete() {
        
            $p_model = new Employee();
            
            $code = $_GET['code'];
            
            $employee = $this->model->delete($code);
            
            setcookie('delete_success','1',time() + 2); 
            header('Location: ?mod=employee&act=list');
        }
        
    }

?>
