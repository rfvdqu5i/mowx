<?php
    require_once('models/Customer.php');
    class UserController{
        function formlogin(){
            if(isset($_SESSION['customer'])) {
                header("Location: ?mod=shop&act=list");
            } else {
                require_once('view/shop/login.php');
            }
        }
        
        function login(){
            $data = $_POST;

            $customer = new Customer();
            $result = $customer->check($data);
            
            if($result != null) {
                $_SESSION['customer'] = $result;
                $_SESSION['isLogin'] = 1;
                setcookie('dntc','Đăng nhập thành công',time()+10);
                header("Location: ?mod=shop&act=list");
            } else {
                setcookie('dnktc','Đăng nhập không thành công',time()+10);
                header("Location: ?mod=user&act=formlogin");
            }
        }
        
        function formsignup() {
            require_once('view/shop/signup.php');
        }
        
        function signup() {
            $data = $_POST;

            
            if($data['customer_password'] == $data['password_re']) {
                unset($data['password_re']);

                $customer = new Customer();
                $result = $customer->check_email($data);

                if($result == null) {
                    $data['customer_code'] = 'KH'.time();
                    $result3 = $customer->insert_customer($data);

                    $_SESSION['customer'] = $data;
                    $_SESSION['isLogin'] = 1;
                    header("Location: ?mod=shop&act=list");
                } else {
                    if(($result['customer_email'] != null) && ($result['customer_password'] != null)) {
                        header("Location: ?mod=user&act=formsignup");
                        setcookie('dktc','Đăng ký không thành công',time()+10);
                    }
                    if($result['customer_password'] == null) {
                        $result1 = $customer->update_customer($data);
                        $_SESSION['customer'] = $data;
                        $_SESSION['isLogin'] = 1;
                        header("Location: ?mod=shop&act=list");
                    }

                }
            } else {
                header("Location: ?mod=user&act=formsignup");
                setcookie('mkktn','Mật khẩu phải trùng nhau.!',time()+10);
            }
            
            
        }
        
        function logout(){
            session_destroy();
            setcookie('logout','Đăng xuất thành công',time()+10);
            header("Location: ?mod=shop&act=list");
        }
    }
?>