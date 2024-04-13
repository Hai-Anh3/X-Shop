<?php 
    function index(){
        include "models/m_product.php";
        $id_loai = $_GET['id_loai'];
        $show_lh_product = show_loai();
        $sp_loai = show_sp_loai($id_loai);

        
        $view = "views/product/v_hanghoa.php";
        include "templates/front-end/layout.php";
    }
?>