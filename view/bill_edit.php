<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chỉnh sửa hóa đơn</title>
    <link href="../public/css/bootstrap.min.css" rel="stylesheet">
    <link href="../public/css/font-awesome.min.css" rel="stylesheet">
    <link href="../public/css/datepicker3.css" rel="stylesheet">
    <link href="../public/css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!--Custom Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
</head>

<body>
    <?php include_once('view/header.php'); ?>

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
            <li><a href="?mod=employee&act=list"><em class="fa fa-clone">&nbsp;</em> Nhân viên</a></li>
            <li class="active"><a href="?mod=bill&act=list"><em class="fa fa-toggle-off">&nbsp;</em> Hóa đơn</a></li>
        </ul>
    </div>

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <h3 align="center">CHỈNH SỬA HÓA ĐƠN</h3>
        <hr>
        <a href="?mod=bill&act=list" class="btn btn-primary">Danh sách</a>
        <hr>

        <form action="?mod=bill&act=update" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Mã hóa đơn</label>
                <input type="text" class="form-control" id="" placeholder="Chỉnh sửa mã hóa đơn" name="bill_code" required value="<?= $bill['bill_code'] ?>">
            </div>
            <div class="form-group">
                <label for="">Mã khách hàng</label>
                <input type="text" class="form-control" id="" placeholder="Chỉnh sửa mã khác hàng" name="customer_code" value="<?= $bill['customer_code'] ?>">
            </div>
            <div class="form-group">
                <label for="">Tổng tiền</label>
                <input type="text" class="form-control" placeholder="Chỉnh sửa mã tổng tiền" id="" name="total_money" value="<?= $bill['total_money'] ?>">
            </div>
            <div class="form-group">
                <label for="">Thời gian</label>
                <input type="date" class="form-control" id="" placeholder="Chỉnh sửa thời gian" name="customer_email" value="<?= $bill['customer_email'] ?>">
            </div>
            <div class="form-group">
                <label for="">Mã nhân viên</label>
                <input type="text" class="form-control" id="" placeholder="Chỉnh sửa mã nhân viên" name="employee_code" value="<?= $bill['employee_code'] ?>">
            </div>
            <div class="form-group">
                <label for="">Funds</label>
                <input type="text" class="form-control" id="" placeholder="Chỉnh sửa funds" name="funds" value="<?= $bill['funds'] ?>">
            </div>
            <div class="form-group">
                <label for="">Trạng thái</label>
                <input type="text" class="form-control" id="" placeholder="Chỉnh sửa trạng thái" name="statuss" value="<?= $bill['statuss'] ?>">
            </div>

            <button type="submit" class="btn btn-primary">Lưu thông tin</button>
        </form>
    </div>
</body>

</html>
