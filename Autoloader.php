<?php
    spl_autoload_register(function ($class_name){
        if (file_exists('config/Classes/'.$class_name.'.Class.php')) {
            require_once 'config/Classes/'.$class_name.'.Class.php';
        }else if (file_exists('config/Controllers/'.$class_name.'.php')) {
            require_once 'config/Controllers/'.$class_name.'.php';
        }
    });

    
?>