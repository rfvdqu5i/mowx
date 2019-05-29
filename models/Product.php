<?php
    require_once('models/Model.php');
    class Product extends Model {
        var $table = 'products';
        var $primary_key = 'product_code';   
    }

    
?>