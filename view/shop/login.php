<!DOCTYPE html>
<html lang="en">

<head>
    <title>Đăng nhập</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="public/images/logo.jpg">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
            <form method="POST" action="?mod=user&act=login">
                <input type="email" id="login" class="fadeIn second inputform" name="customer_email" placeholder="Nhập email của bạn">
                <input type="password" id="password" class="fadeIn third inputform" name="customer_password" placeholder="Nhập mật khẩu của bạn">
                <input type="submit" class="fadeIn fourth" value="Đăng nhập">
            </form>
                <?php if(isset($_COOKIE['dnktc'])) {
                    echo('<center><span style="color: red">Sai tài khoản hoặc mật khẩu.!</span></center>');
                } ?> 
            <br>
            <a class="underlineHover" href="?mod=user&act=formsignup">Đăng ký tài khoản</a>
            

        </div>
    </div>

</body>

</html>
