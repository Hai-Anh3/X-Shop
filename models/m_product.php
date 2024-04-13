<?php
    include "libraryPDO.php";

    function show_loai(){
        $sql = "SELECT * FROM loai";
        return pdo_query_all($sql);
    }

    function show_sp_loai($id_loai){
        
        $sql = "SELECT * FROM san_pham WHERE id_loai = ?";
        return pdo_query_all($sql, $id_loai);
    }

    
?>