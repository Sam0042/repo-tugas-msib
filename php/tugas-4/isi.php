<div style="height:500px;">
        <!-- Halaman Depan -->
        <?php
        $hal = $_GET["halaman"];
        if(!empty($hal)){
            include_once $menu_bawah[$hal];
        }
        else{
            include_once "home.php";
        }
        ?>
</div>