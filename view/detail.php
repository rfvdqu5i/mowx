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
        <h2 align="center">CHI TIẾT KHÁCH HÀNG</h2>
        <a href="?mod=customer&act=list" class="btn btn-primary">Trang chủ</a>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tên khách hàng</th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $customer['CODE'] ?></td>
                    <td><?= $customer['NAME'] ?></td>
                    <td><?= $customer['EMAIL'] ?></td>
                    <td><?= $customer['MOBILE'] ?></td>
                    <td><?= $customer['ADDRESS'] ?></td>
                </tr>

            </tbody>
        </table>
    </div>
</body>

</html>
