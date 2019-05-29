<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mowx</title>
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

    <div class="hero-wrap js-fullheight" style="background-image: url('public/images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                <h3 class="v">Mowx - Sinh ra để khác biệt</h3>
                <h3 class="vr">Mowx - Sinh ra để khác biệt</h3>
                <div class="col-md-11 ftco-animate text-center">
                    <h1>KRYSTAL Stylist</h1>
                    <h2><span>Mặc những gì bạn thích</span></h2>
                </div>
                <div class="mouse">
                    <a href="#" class="mouse-icon">
                        <div class="mouse-wheel"><span class="ion-ios-arrow-down"></span></div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="goto-here"></div>

    <section class="ftco-section ftco-product">
        <div class="container">
            <div class="row justify-content-center mb-3 pb-3">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h1 class="big">Trendy</h1>
                    <h2 class="mb-4">Xu hướng</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="product-slider owl-carousel ftco-animate">

                        <?php
                             $i = 0;
                             foreach($data as $row) { 
                                 $i++;
                        ?>
                        <div class="item">
                            <div class="product">
                                <a href="?mod=shop&act=detail&code=<?= $row['product_code'] ?>" class="img-prod"><img src="public/images/<?= $row['product_image'] ?>" alt="<?= $row['product_name'] ?>"></a>
                                <div class="text pt-3 px-3">
                                    <h3><a href="?mod=shop&act=detail&code=<?= $row['product_code'] ?>"><?= $row['product_name'] ?></a></h3>
                                    <div class="d-flex">
                                        <div class="pricing">
                                            <p class="price"><span><?= number_format($row['product_price']) ?> đ</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                            if( $i == 6) {
                                break;
                            }
                             }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(public/images/bg_2.jpg);">
                </div>
                <div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
                    <div class="heading-section-bold mb-5 mt-md-5">
                        <div class="ml-md-0">
                            <h2 class="mb-4">Mowx <br>Online <br> <span>Fashion Shop</span></h2>
                        </div>
                    </div>
                    <div class="pb-md-5">
                        <p>Mowx ra đời vào tháng 4/2019 với sứ mệnh mang đến cho người dùng Việt những bộ quần áo và phụ kiện cao cấp nhưng giá mềm phục vụ cho đông đảo mọi lứa tuổi</p>
                        <p>Với 3 năm làm trong lĩnh vực kinh doanh trực tuyến nên Mowx biết cách chăm sóc KH tận tình 100%</p>
                        <p>Đã đăng ký kinh doanh với Bộ Công thương</p>
                        <p>Đối với khách hàng khi đặt hàng online</p>
                        <p>Hàng sẽ được đóng gói và vận chuyển ngay sau khi chốt đơn hàng</p>
                        <p>Thời gian vận chuyển ở TPHCM là từ 1-2 ngày còn ở tỉnh thành khác từ 3-7 ngày.</p>
                        <p>Shop giao hàng và thu tiền tận nơi, thanh toán khi nhận hàng, hoàn tiền ngay nếu khách không hài lòng sau khi nhận hàng.</p>
                        <p>Khách có thể inbox Fanpage : MOWX - clothes and more để được hỗ trợ trực tuyến</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-3 pb-3">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h1 class="big">Product</h1>
                    <h2 class="mb-4">Sản phẩm</h2>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <?php
                    $i = 0;
                    foreach($data as $row) { 
                        $i++;
                ?>

                <div class="col-sm-6 col-md-6 col-lg ftco-animate">
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
                    if ($i == 4) {
                        break;
                    }
                    }
                ?>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-section-more img" style="background-image: url(public/images/bg_5.jpg);">
        <div class="container">
            <div class="row justify-content-center mb-3 pb-3">
                <div class="col-md-12 heading-section ftco-animate">
                    <h2>Summer Sale</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(public/images/bg_4.jpg);">
        <div class="container">
            <div class="row justify-content-center py-5">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="10000">0</strong>
                                    <span>Khách hàng</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="100">0</strong>
                                    <span>Chi nhánh</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="1000">0</strong>
                                    <span>Đối tác</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="100">0</strong>
                                    <span>Giải thưởng</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light ftco-services">
        <div class="container">
            <div class="row justify-content-center mb-3 pb-3">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h1 class="big">Service</h1>
                    <h2>Chúng tôi muốn bạn thể hiện chính mình</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 text-center d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services">
                        <div class="icon d-flex justify-content-center align-items-center mb-4">
                            <span class="flaticon-002-recommended"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Chính sách hoàn tiền</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services">
                        <div class="icon d-flex justify-content-center align-items-center mb-4">
                            <span class="flaticon-001-box"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Bao bì cao cấp</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services">
                        <div class="icon d-flex justify-content-center align-items-center mb-4">
                            <span class="flaticon-003-medal"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Chất lượng cao</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
        include_once('view/shop/footerShop.php');
    ?>

</body>

</html>
