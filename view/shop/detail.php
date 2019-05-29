<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $product['product_name'] ?></title>
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
                    <h1 class="mb-0 bread">Product</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="?mod=shop&act=list">Trang chủ</a></span> <span class="mr-2"><a href="?mod=shop&act=list">Sản phẩm</a></span> <span>Chi tiết sản phẩm</span></p>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 ftco-animate">
                    <a href="public/images/<?= $product['product_image'] ?>" class="image-popup"><img src="public/images/<?= $product['product_image'] ?>" class="img-fluid" alt="<?= $product['product_name'] ?>"></a>
                </div>
                <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                    <h3><?= $product['product_name'] ?></h3>
                    <p class="price"><span><?= number_format($product['product_price']) ?> đ</span></p>
                    <h4>Size : Oversize</h4>
                    <br>
                    <p><a href="?mod=shop&act=add2cart&code=<?= $product['product_code'] ?>" class="btn btn-primary py-3 px-5">Thêm vào giỏ hàng</a></p>
                </div>
            </div>
        </div>
    </section>

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
