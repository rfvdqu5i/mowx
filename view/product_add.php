<?php
        if(isset($_COOKIE['add_failed'])) {
    ?>
<script type="text/javascript">
    toastr["error"]("Thêm mới thất bại", "Thông báo: ");

</script>
<?php 
        } else if(isset($_COOKIE['edit_failed'])) {
    ?>
<script type="text/javascript">
    toastr["error"]("Sửa thất bại", "Thông báo: ");

</script>
<?php
        } 
    ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thêm mới sản phẩm</title>
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/css/font-awesome.min.css" rel="stylesheet">
    <link href="public/css/datepicker3.css" rel="stylesheet">
    <link href="public/css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!--Custom Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
</head>

<body>
    <?php include_once('view/layout/headerAdmin.php'); ?>

    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <div class="profile-sidebar">
            <div class="profile-userpic">
                <img src="public/images/mong.jpg" class="img-responsive" alt="">
            </div>
            <div class="profile-usertitle">
                <div class="profile-usertitle-name"><?= $_SESSION['employee']['employee_name'] ?></div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="divider"></div>
        <ul class="nav menu">
            <li><a href="?mod=admin&act=overview"><em class="fa fa-calendar">&nbsp;</em> Tổng quan</a></li>
            <li class="active"><a href="?mod=product&act=list"><em class="fa fa-calendar">&nbsp;</em> Sản phẩm</a></li>
            <li><a href="?mod=customer&act=list"><em class="fa fa-bar-chart">&nbsp;</em> Khách hàng</a></li>
            <li><a href="?mod=employee&act=list"><em class="fa fa-clone">&nbsp;</em> Nhân viên</a></li>
            <li><a href="?mod=bill&act=list"><em class="fa fa-toggle-off">&nbsp;</em> Hóa đơn</a></li>
        </ul>
    </div>

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

        <h3 align="center">THÊM MỚI SẢN PHẨM</h3>
        <hr>
        <a href="?mod=product&act=list" class="btn btn-primary">Danh sách</a>
        <hr>

        <form action="?mod=product&act=insert_product" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">#</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào sản phẩm" name="product_code" required>
            </div>
            <div class="form-group">
                <label for="">Tên sản phẩm</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào tên sản phẩm" name="product_name">
            </div>
            <div class="form-group">
                <label for="">Ảnh sản phẩm</label>
                <input type="file" accept="image/*" onchange="loadFile(event)" id="product_image" name="product_image">
                <br>
                <img id="output" width="50px" />
            </div>
            <div class="form-group">
                <label for="">Loại sản phẩm</label>
                <br>
                <select name="category_code" style="height: 30px">
                    <option value="Áo kaki">Áo kaki</option>
                    <option value="Áo thun">Áo thun</option>
                </select>
                <!--                <input type="text" class="form-control" id="" placeholder="Nhập vào mật khẩu" name="category_code">-->
            </div>
            <div class="form-group">
                <label for="">Số lượng</label>
                <input type="number" class="form-control" id="" placeholder="Nhập vào số lượng" name="product_quantity">
            </div>
            <div class="form-group">
                <label for="">Giá bán</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào giá bán" name="product_price">
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Lưu thông tin</button>
            <br> <br>
        </form>
    </div>

    <script>
        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
        };

    </script>
</body>

</html>
