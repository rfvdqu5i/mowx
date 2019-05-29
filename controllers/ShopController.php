<?php
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    require_once('models/Shop.php');
    require_once('models/Customer.php');
    require_once('models/Bill.php');
    require_once('models/Product.php');
    require_once('models/DetailBill.php');
    require_once('models/Employee.php');

    class ShopController{
        
        var $model; // Thuộc tính
        var $cus; // Thuộc tính
        var $bill; // Thuộc tính
        var $product;
        var $detail;
        function __construct() {
            $this->model = new Shop();
            $this->cus = new Customer();
            $this->bill = new Bill();
            $this->product = new Product();
            $this->employee = new Employee();   
            $this->detail = new DetailBill();
        }
        
        public function list() {
            $data = $this->model->getAll();
            include_once('view/shop/shop.php');
        }
        
        public function product() {
            $data = $this->model->getAll();
            include_once('view/shop/product.php');
        }
        
        public function detail() {
            $code = $_GET['code'];
            $product = $this->model->find($code);
            
            include_once('view/shop/detail.php');
        }
        
        public function add2cart() {
            $row = array();
            $code = $_GET['code'];
            $product = $this->model->find($code);
            
            if (isset($_SESSION['cart'][$code])) {
                $_SESSION['cart'][$code]['product_quantity']++;
            } else {
                $row = $product;
                $row['product_quantity'] = 1;
                $_SESSION['cart'][$code] = $row;    
            }
            
            include_once('view/shop/cart.php');

        }
        
        public function delete() {
            $code = $_GET['code'];
            
            unset($_SESSION['cart'][$code]);
            include_once('view/shop/cart.php');
//            header('Location: view/shop/cart.php');
        }
        
        public function minus() {
            $code = $_GET['code'];
            if (($_SESSION['cart'][$code]['product_quantity']) > 1) {
                $_SESSION['cart'][$code]['product_quantity'] -= 1;
            }
            include_once('view/shop/cart.php');
        }
        
        public function cart() {            
            include_once('view/shop/cart.php');
        }
        
        public function checkout() {            
            
            include_once('view/shop/checkout.php');
        }
        public function about() {
            include_once('view/shop/about.php');
        }
        public function contact() {
            include_once('view/shop/contact.php');
        }
        
        function confirm(){
            if(isset($_SESSION['cart'])){
                $bill= array();
                if(!isset($_SESSION['customer'])) {
                    $data= array();
                    $data['customer_code'] = 'KH'.time();
                    $data['customer_name'] = $_POST['customer_name'];
                    $data['customer_birthday'] = $_POST['customer_birthday'];
                    $data['customer_email'] = $_POST['customer_email'];
                    $data['customer_mobile'] = $_POST['customer_mobile'];
                    $data['customer_address'] = $_POST['customer_address'];
                    
                    $status= $this->cus->insert_cus($data);
                    $bill['customer_code'] = $data['customer_code'];
                } else {
                    $bill['customer_code'] = $_SESSION['customer']['customer_code'];
                }
                   
                $bill['bill_code']= 'HD'.time();  
                $bill['time_bill'] = date('Y-m-d H:i:s');  
                $bill['employee_code'] = 'ONLINE';	
                $bill['total_money'] = $_SESSION['bill']['total_money'];	

                $tong_tien = 0;
                $tien_goc = 0;
               
                $status1= $this->bill->insert_bill($bill);
				foreach ($_SESSION['cart'] as $product) {
                        $prod['bill_code'] = $bill['bill_code'];
                        $prod['product_code'] = $product['product_code'];
                        $prod['quantity_buy'] = $product['product_quantity'];
                        $prod['into_money'] = $product['product_quantity'] * $product['product_price'];
                        $tong_tien += $prod['into_money'];
                        $tien_goc = $product['product_price'] * $product['product_quantity'];

                        $status2 = $this->detail->create_detail($prod);
                        $status3 = $this->product->reduceQuantity($prod['product_code'], $prod['quantity_buy']);
				}
                unset($_SESSION['cart']);
                header('Location: ?mod=shop&act=list');
             }
        }
        
        function pay() {
//            $employee_code = $_SESSION['employee']['employee_code'];
//            $customer = $_SESSION['customer'];
            $cart = $_SESSION['cart'];
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $bill = array();
            
            $bill['bill_code'] = $customer['customer_code'].'_'.$employee_code.'_'.time();
            $bill['customer_code'] = $customer['customer_code'];
            $bill['employee_code'] = $employee_code;
            $bill['time_bill'] = date('Y-m-d H:i:s');
            
            // bill
            $dt_bill = new Bill();
            $status1 = $dt_bill->create($bill);
            
            $tong_tien = 0;
            $tien_goc = 0;
            
            foreach ($cart as $product) {
                $prod['bill_code'] = $bill['bill_code'];
                $prod['product_code'] = $product['product_code'];
                $prod['quantity_buy'] = $product['bill_code'];
                $prod['into_money'] = $product['product_quantity'] * $product['product_price'];
                $tong_tien += $prod['into_money'];
                $tien_goc = $product['product_price_enter'] * $product['product_quantity'];
                
                $bill_detail = new DetailBill();
                $status2 = $bill_detail->create($prod);
                $status3 = $this->product->reduceQuantity($prod['product_code'], $prod['quantity_buy']);
            }
            
            $ubill['bill_code'] = $bill['bill_code'];
            $ubill['total_money'] = $tong_tien;
            $ubill['funds'] = $tien_goc;
            $ubill['statuss'] = '1';
            $bill_detail = new DetailBill();
            $detail_bill = $bill_detail->find($bill['bill_code']);
            $employee_name = $this->employee->find($bill['employee_code'])['employee_name'];
            $customer_name = $this->customer->find($bill['customer_code'])['customer_name'];
            
            $info = "";
            $status4 = $dt_bill->update($ubill);
            
            unset($_SESSION['cart']);
            unset($_SESSION['customer']);            
        }

    }

?>
