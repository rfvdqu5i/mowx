
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zent Group</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <h3 align="center">UPDATE THÔNG TIN KHÁCH HÀNG</h3>
    <br>
    <a href="?mod=customer&act=list" class="btn btn-primary">Trang chủ</a>
    <hr>
        <form action="?mod=customer&act=update" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Mã khách hàng</label>
                <input type="text" class="form-control" id="" placeholder="Mã khách hàng" name="CODE" value="<?= $customer['CODE'] ?>">
            </div>
            <div class="form-group">
                <label for="">Tên khách hàng</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào tên khách hàng" name="NAME" value="<?= $customer['NAME'] ?>">
            </div>  
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào email" name="EMAIL" value="<?= $customer['EMAIL'] ?>">
            </div>
            <div class="form-group">
                <label for="">Số điện thoại</label>
                <input type="number" class="form-control" id="" placeholder="Nhập vào số điện thoại" name="MOBILE" value="<?= $customer['MOBILE'] ?>">
            </div> 
            <div class="form-group">
                <label for="">Địa chỉ</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào địa chỉ" name="ADDRESS" value="<?= $customer['ADDRESS'] ?>">
            </div> 
            <button type="submit" class="btn btn-primary">Lưu thông tin</button>
            
        </form>
    </div>
</body>
</html>