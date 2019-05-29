<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bộ sưu tập</title>
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
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-0 bread">Collection</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="?mod=shop&act=list">Trang chủ</a></span> <span>Sản phẩm</span></p>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section bg-light">
        <div class="container-fluid">
            <div class="row">
                <?php
                    
                    foreach($data as $row) { 
                ?>

                <div class="col-sm-6 col-md-6 col-lg-4 ftco-animate">
                    <div class="product">
                        <a href="?mod=shop&act=detail&code=<?= $row['product_code'] ?>" class="img-prod"><img class="img-fluid" src="public/images/<?= $row['product_image'] ?>" alt="<?= $row['product_name'] ?>"></a>
                        <div class="text py-3 px-3">
                            <h3><a href="?mod=shop&act=detail&code=<?= $row['product_code'] ?>"><?= $row['product_name'] ?></a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price"><span><?= number_format($row['product_price']) ?> đ</span></p>
                                </div>
                            </div>
                            <hr>
                            <p class="bottom-area d-flex">
                                <a href="?mod=shop&act=add2cart&code=<?= $row['product_code'] ?>" class="add-to-cart"><span>Thêm vào giỏ hàng</span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <?php
                    }
                ?>

            </div>
        </div>
    </section>

    <?php
        include_once('view/shop/footerShop.php');
    ?>

</body>

</html>
