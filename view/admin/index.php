<?php
    
    $mod = isset($_GET['mod']) ? $_GET['mod'] : '';

    $act = isset($_GET['act']) ? $_GET['act'] : '';
    
    switch ($mod) {
        case 'customer':
            require_once('controllers/CustomerController.php');
            $customer_controller = new CustomerController();
            switch ($act) {
                case 'list':
                    $customer_controller->list();
                    break;
                case 'detail':
                    $customer_controller->detail();
                    break;
                case 'detail_ajax':
                    $customer_controller->detail_ajax();
                    break;
                case 'add':
                    $customer_controller->add();
                    break;  
                case 'insert':
                    $customer_controller->insert();
                    break;
                case 'edit':
                    $customer_controller->edit();
                    break;
                case 'update':
                    $customer_controller->update();
                    break;
                case 'delete':
                    $customer_controller->delete();
                    break;
                default:
                    echo "Không có action";
                    break;
            }
            break;
            
        case 'employee':
            require_once('controllers/EmployeeController.php');
            $employee_controller = new EmployeeController();
            switch ($act) {
                case 'list':
                    $employee_controller->list();
                    break;
                case 'detail':
                    $employee_controller->detail();
                    break;
                case 'detail_ajax':
                    $employee_controller->detail_ajax();
                    break;
                case 'add':
                    $employee_controller->add();
                    break;  
                case 'insert':
                    $employee_controller->insert();
                    break;
                case 'edit':
                    $employee_controller->edit();
                    break;
                case 'update':
                    $employee_controller->update();
                    break;
                case 'delete':
                    $employee_controller->delete();
                    break;
                default:
                    echo "Không có action";
                    break;
            }
            break;
            
        case 'product':
            require_once('controllers/ProductController.php');
            $product_controller = new ProductController();
            switch ($act) {
                case 'list':
                    $product_controller->list();
                    break;
                case 'detail':
                    $product_controller->detail();
                    break;
                case 'detail_ajax':
                    $product_controller->detail_ajax();
                    break;
                case 'add':
                    $product_controller->add();
                    break;  
                case 'insert_product':
                    $product_controller->insert_product();
                    break;
                case 'edit':
                    $product_controller->edit();
                    break;
                case 'update':
                    $product_controller->update();
                    break;
                case 'delete':
                    $product_controller->delete();
                    break;
                default:
                    echo "Không có action";
                    break;
            }
            break;
            
        case 'bill':
            require_once('controllers/BillController.php');
            $bill_controller = new BillController();
            switch ($act) {
                case 'list':
                    $bill_controller->list();
                    break;
                case 'detail':
                    $bill_controller->detail();
                    break;
                case 'detail_ajax':
                    $bill_controller->detail_ajax();
                    break;
                case 'add':
                    $bill_controller->add();
                    break;  
                case 'insert':
                    $bill_controller->insert();
                    break;
                case 'edit':
                    $bill_controller->edit();
                    break;
                case 'update':
                    $bill_controller->update();
                    break;
                case 'delete':
                    $bill_controller->delete();
                    break;
                default:
                    echo "Không có action";
                    break;
            }
            break;
        
        case 'login':
        require_once('controllers/LoginController.php');
        $login_controller = new LoginController();
            switch ($act) {
                case 'formlogin':
                    $login_controller->formlogin();
                    break;
                case 'login':
                    $login_controller->login();
                    break;
                case 'logout':
                    $login_controller->logout();
                    break;
                default:
                    echo "Không có action";
                    break;
            }
            break;
            
        default:
            header('Location: ?mod=customer&act=list');
            break;
    }
?>