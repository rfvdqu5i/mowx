<?php
    
    $product_cart = $_SESSION['cart'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Thanh toán</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!--    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="public/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="public/css/animate.css">

    <link rel="stylesheet" href="public/css/owl.carousel.min.css">
    <link rel="stylesheet" href="public/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="public/css/magnific-popup.css">

    <link rel="stylesheet" href="public/css/aos.css">

    <link rel="stylesheet" href="public/css/ionicons.min.css">

    <link rel="stylesheet" href="public/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="public/css/jquery.timepicker.css">


    <link rel="stylesheet" href="public/css/flaticon.css">
    <link rel="stylesheet" href="public/css/icomoon.css">
    <link rel="stylesheet" href="public/css/style_shop.css">
</head>

<body>

    <?php
        include_once('view/shop/headerShop.php');
    ?>
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('public/images/bg_6.jpg');">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-0 bread">Thanh toán</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="?mod=shop&act=list">Trang chủ</a></span> <span>Thanh toán</span></p>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 ftco-animate">
                    <form action="?mod=shop&act=confirm" method="POST" class="billing-form bg-light p-3 p-md-5">
                        <h3 class="mb-4 billing-heading">Phiếu thanh toán</h3>
                        <div class="row align-items-end">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Họ và tên</label>
                                    <input type="text" class="form-control" placeholder="Nhập vào họ và tên" value="<?= isset($_SESSION['customer']) ? $_SESSION['customer']['customer_name'] : '' ?>" name="customer_name" required>
                                </div>
                            </div>
                            
                            <div class="w-100"></div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="birthday">Sinh nhật</label>
                                    <input type="date" class="form-control" placeholder="" value="<?= isset($_SESSION['customer']) ? $_SESSION['customer']['customer_birthday'] : '' ?>" name="customer_birthday" required>
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" placeholder="Nhập vào email" value="<?= isset($_SESSION['customer']) ? $_SESSION['customer']['customer_email'] : '' ?>" name="customer_email" required>
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="mobile">Số điện thoại</label>
                                    <input type="text" class="form-control" placeholder="Nhập vào số điện thoại" value="<?= isset($_SESSION['customer']) ? $_SESSION['customer']['customer_mobile'] : '' ?>" name="customer_mobile" required>
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="address">Địa chỉ</label>
                                    <input type="text" class="form-control" placeholder="Nhập vào địa chỉ" name="customer_address" value="<?= isset($_SESSION['customer']) ? $_SESSION['customer']['customer_address'] : '' ?>"required>
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-md-12 d-flex">
                                <div class="cart-detail cart-total bg-light p-3 p-md-4">
                                    <h3 class="billing-heading mb-4">Hóa đơn</h3>
                                    <p class="d-flex">
                                        <span>Tạm tính</span>
                                        <span><?= number_format($_SESSION['bill']['total_money']) ?> đ</span>
                                    </p>
                                    <p class="d-flex">
                                        <span>Vận chuyển</span>
                                        <span>30,000 đ</span>
                                    </p>
                                    <hr>
                                    <p class="d-flex total-price">
                                        <span>Tổng cộng</span>
                                        <span><?= number_format($_SESSION['bill']['total_money'] + 30000) ?> đ</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary py-3 px-4 align-center">Đặt hàng</button>
                    </form><!-- END -->
                </div> <!-- .col-md-8 -->
            </div>
        </div>
    </section> <!-- .section -->

    <?php
        include_once('view/shop/footerShop.php');
    ?>

    <script>
        $(document).ready(function() {

            var quantitiy = 0;
            $('.quantity-right-plus').click(function(e) {

                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                var quantity = parseInt($('#quantity').val());

                // If is not undefined

                $('#quantity').val(quantity + 1);


                // Increment

            });

            $('.quantity-left-minus').click(function(e) {
                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                var quantity = parseInt($('#quantity').val());

                // If is not undefined

                // Increment
                if (quantity > 0) {
                    $('#quantity').val(quantity - 1);
                }
            });

        });

    </script>

</body>

</html>
