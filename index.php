<?php 
    require_once 'Autoloader.php';
?>
<?php App::ViewPartial('header','html_blocks')?>

<body>

    <!--begin container -->
    <div id="container">
        <?php App::ViewPartial('navbar','html_blocks')?>
        
        <?php
            require_once 'config/Routes/Routes.php';
        ?>
        
        <?php App::ViewPartial('footer','html_blocks')?> 
    </div>
    <!--! end of #container -->
    
   
   <?php App::ViewPartial('scripts','html_blocks')?>
</body>
</html>