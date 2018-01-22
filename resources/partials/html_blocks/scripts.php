<script src="assets/js/jquery-1.11.1.min.js"></script>
<script src="assets/js/jquery-migrate-1.2.1.js"></script>
<script src="assets/js/bootstrap.js"></script>
<?php
    $page = explode('/', $_GET['url'])[0];


    Route::asset($page, $function = new App());
?>