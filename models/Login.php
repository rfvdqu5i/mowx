<?php
    require_once('models/Model.php');
    class Login extends Model {
        var $table = 'bills';
        var $primary_key = 'bill_code';   
    }
?>