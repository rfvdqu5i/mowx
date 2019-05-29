<!DOCTYPE html>
<html lang="en">

<head>
    <title>Đăng ký</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <link rel="icon" href="public/images/logo.jpg">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <link rel="stylesheet" href="public/css/login_user.css">
</head>

<body>

    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first">
                <br>
            </div>

            <!-- Login Form -->
            <form method="POST" action="?mod=user&act=signup">
                <input type="text" id="login" class="fadeIn second inputform" name="customer_name" placeholder="Nhập họ và tên của bạn">
                <input type="date" id="login" class="fadeIn second inputform" name="customer_birthday" placeholder="Nhập ngày sinh của bạn">
                <input type="email" id="login" class="fadeIn second inputform" name="customer_email" placeholder="Nhập email của bạn">
                <input type="text" id="login" class="fadeIn second inputform" name="customer_mobile" placeholder="Nhập số điện thoại của bạn">
                <input type="text" id="login" class="fadeIn second inputform" name="customer_address" placeholder="Nhập địa chỉ của bạn">
                <input type="password" id="password" class="fadeIn third inputform" name="customer_password" placeholder="Nhập mật khẩu của bạn">
                <input type="password" id="password" class="fadeIn third inputform" name="password_re" placeholder="Xác nhận mật khẩu">
                <input type="submit" class="fadeIn fourth" value="Đăng ký">
                <a href="?mod=user&act=login">Đăng nhập</a>
                <br>
                <span style="red">
                    <?php 
                    if(isset($_COOKIE['dkktc'])) {
                        echo('Đã có email đăng ký trước đó');
                    } 
                    if(isset($_COOKIE['mkktn'])) {
                        echo('Mật khẩu phải trùng nhau.!');
                    }
                    ?>
                </span>
            </form>

        </div>
    </div>

</body>

</html>
