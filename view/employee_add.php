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
        <title>Thêm mới nhân viên</title>
        <link href="public/css/bootstrap.min.css" rel="stylesheet">
        <link href="public/css/font-awesome.min.css" rel="stylesheet">
        <link href="public/css/datepicker3.css" rel="stylesheet">
        <link href="public/css/styles.css" rel="stylesheet">

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
                <li><a href="?mod=product&act=list"><em class="fa fa-calendar">&nbsp;</em> Sản phẩm</a></li>
                <li><a href="?mod=customer&act=list"><em class="fa fa-bar-chart">&nbsp;</em> Khách hàng</a></li>
                <li class="active"><a href="?mod=employee&act=list"><em class="fa fa-clone">&nbsp;</em> Nhân viên</a></li>
                <li><a href="?mod=bill&act=list"><em class="fa fa-toggle-off">&nbsp;</em> Hóa đơn</a></li>
            </ul>
        </div>

        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
            <h3 align="center">THÊM MỚI NHÂN VIÊN</h3>
            <hr>
            <a href="?mod=employee&act=list" class="btn btn-primary">Danh sách</a>
            <hr>

            <form action="?mod=employee&act=insert" method="POST" role="form" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Mã nhân viên</label>
                    <input type="text" class="form-control" id="" placeholder="Nhập vào mã nhân viên" name="employee_code" required>
                </div>
                <div class="form-group">
                    <label for="">Tên nhân viên</label>
                    <input type="text" class="form-control" id="" placeholder="Nhập vào tên nhân viên" name="employee_name">
                </div>
                <div class="form-group">
                    <label for="">Sinh nhật</label>
                    <input type="date" class="form-control" id="" name="employee_birthday">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" id="" placeholder="Nhập vào email" name="employee_email">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" id="" placeholder="Nhập vào mật khẩu" name="employee_password">
                </div>
                <div class="form-group">
                    <label for="">Số điện thoại</label>
                    <input type="text" class="form-control" id="" placeholder="Nhập vào số điện thoại" name="employee_mobile">
                </div>
                <div class="form-group">
                    <label for="">Địa chỉ</label>
                    <input type="text" class="form-control" id="" placeholder="Nhập vào địa chỉ" name="employee_address">
                </div>

                <button type="submit" class="btn btn-primary">Lưu thông tin</button>
            </form>
            <br>
        </div>
        
    </body>

    </html>
