<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Admin</title>
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/css/datepicker3.css" rel="stylesheet">
    <link href="public/css/styles.css" rel="stylesheet">
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
   <div class="container-fluid">
    <div class="row container-fluid">
        <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">Log in</div>
                <div class="panel-body">
                    <form role="form" method="POST" action="?mod=login&act=login">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="employee_email" type="email" autofocus="" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="employee_password" type="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->
    </div>


    <script src="public/js/jquery-1.11.1.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
</body>

</html>
