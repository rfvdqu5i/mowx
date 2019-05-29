<?php
    
    class auth {
        function check_login() {
            if(!isset($_SESSION['isLogin'])) {
                header('Location: ?mod=login&act=formlogin');
            }
        }
    }
?>