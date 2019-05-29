<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="?mod=shop&act=list">Mowx</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span>
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="?mod=shop&act=list" class="nav-link">Trang chủ</a></li>
                <li class="nav-item"><a href="?mod=shop&act=product" class="nav-link">Sản phẩm</a></li>
                <li class="nav-item"><a href="?mod=shop&act=about" class="nav-link">Giới thiệu</a></li>
                <li class="nav-item"><a href="?mod=shop&act=contact" class="nav-link">Liên hệ</a></li>
                <li class="nav-item cta cta-colored"><a href="?mod=shop&act=cart" class="nav-link"><span class="icon-shopping_cart"></span>[<?php if(isset($_SESSION['cart'])) {
                    echo(count($_SESSION['cart']));
                } else {
                    echo('0');
                } 
                ?>]</a></li>
                
                <li class="nav-item"><?php if(isset($_SESSION['customer'])) {
                    echo('<a href="#" class="nav-link">'.$_SESSION['customer']['customer_name'].'</a></li><li class="nav-item"><a href="?mod=user&act=logout" class="nav-link"><span class="icon-power-off"></span></a></li>');
                } else {
                    echo('<a href="?mod=user&act=formlogin" class="nav-link"><span class="icon-user"></span></a></li>');
                } ?>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->



