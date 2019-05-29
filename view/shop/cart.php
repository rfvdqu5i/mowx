<!DOCTYPE html>
<html lang="en">

<head>
    <title>Giỏ hàng</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="public/images/logo.jpg">

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

    <section class="ftco-section ftco-cart">
        <div class="container">
            <?php 
                if (isset($_SESSION['cart'])) {
                    $product_cart = $_SESSION['cart'];
            ?>
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    
                    <div class="cart-list">
                        <table class="table">
                            <thead class="thead-primary">
                                <tr class="text-center">
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                    <th>Sản phẩm</th>
                                    <th>Giá bán</th>
                                    <th>Số lượng</th>
                                    <th>#</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $i = 0;
                                    $total = 0;
                                    foreach ($product_cart as $key => $product) {
                                        
                                        $i++;
                                        $total += $product['product_price'] * $product['product_quantity'];
                                ?>
                                <tr class="text-center">
                                    <td class="product-remove"><a href="?mod=shop&act=delete&code=<?= $product['product_code'] ?>"><span class="ion-ios-close"></span></a></td>

                                    <td class="image-prod">
                                        <div class="img" style="background-image:url(public/images/<?= $product['product_image'] ?>);"></div>
                                    </td>

                                    <td class="product-name">
                                        <h3><?= $product['product_name'] ?></h3>
                                    </td>

                                    <td class="price"><?= number_format($product['product_price']) ?> đ</td>

                                    <td class="quantity" onchange="">
                                        <span class="input-group-btn mr-2">
                                            <a href="?mod=shop&act=minus&code=<?= $product['product_code'] ?>" class="btn-minus">
                                                <button type="button" class="quantity-left-minus btn" data-type="minus" data-field="">
                                                    <i class="ion-ios-remove"></i>
                                                </button>
                                            </a>
                                        </span>
                                        
                                        <input type="text" id="quantity" name="quantity" class="input-number mr-2 text-center" value="<?= $product['product_quantity'] ?>" onchange="e()" style="width: 50px; height: 50px" readonly>

                                        <span class="input-group-btn ml-2">
                                            <a href="?mod=shop&act=add2cart&code=<?= $product['product_code'] ?>" class="btn-plus">
                                                <button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                                                    <i class="ion-ios-add"></i>
                                                </button>
                                            </a>

                                        </span>
                                    </td>

                                    <td class="total"><?= number_format($product['product_price'] * $product['product_quantity']) ?> đ</td>
                                </tr><!-- END TR-->

                                <?php        
                                    } 
                                    $_SESSION['bill']['total_money'] = $total;
                                ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate">
                    <div class="cart-total mb-3">
                        <h3>Giỏ hàng</h3>
                        <p class="d-flex">
                            <span>Tạm tính</span>
                            <span><?= number_format($total) ?> đ</span>
                        </p>
                        <p class="d-flex">
                            <span>Vận chuyển</span>
                            <span>30,000 đ</span>
                        </p>
                        <hr>
                        <p class="d-flex total-price">
                            <span>Thành tiền</span>
                            <span><?= number_format($total + 30000) ?> đ</span>
                        </p>
                        <p class="d-flex">
                            <span></span>
                            <span>( Đã bao gồm thuế VAT )</span>
                        </p>
                    </div>
                    <p class="text-center"><a href="?mod=shop&act=checkout" class="btn btn-primary py-3 px-4">Thanh toán</a></p>
                </div>
            </div>
            <?php
                } else {
                    echo('<h5 align="center">KHÔNG CÓ SẢN PHẨM NÀO TRONG GIỎ HÀNG</h5>');
                }
            ?>
        </div>
    </section>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
        </svg>
    </div>


    <script src="public/js/jquery.min.js"></script>
    <script src="public/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="public/js/popper.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/jquery.easing.1.3.js"></script>
    <script src="public/js/jquery.waypoints.min.js"></script>
    <script src="public/js/jquery.stellar.min.js"></script>
    <script src="public/js/owl.carousel.min.js"></script>
    <script src="public/js/jquery.magnific-popup.min.js"></script>
    <script src="public/js/aos.js"></script>
    <script src="public/js/jquery.animateNumber.min.js"></script>
    <script src="public/js/bootstrap-datepicker.js"></script>
    <script src="public/js/scrollax.min.js"></script>
    <script src="public/js/main.js"></script>
    
    <script type="text/javascript">
        
        //code js
        
    </script>

</body>

</html>
