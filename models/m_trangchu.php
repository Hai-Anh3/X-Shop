<?php
    include "libraryPDO.php";
    pdo_connection();
    function show_sp_home($dac_biet){
        $sql = "SELECT * FROM san_pham WHERE dac_biet = ?";
        
        return pdo_query_all($sql, $dac_biet);
    }

    function show_lh_home(){
        $sql = "SELECT * FROM loai";
        return pdo_query_all($sql);
    }

    function search_product($search){

      //  $sql = "SELECT san_pham.ten_sp FROM san_pham WHERE ten_sp like %$search%";

        $sql = "SELECT * FROM san_pham WHERE ten_sp like '%$search%';";
        return pdo_query_all($sql);
    }
    function get_hanghoa_by_page() {
        $pageNum = $_GET['pageNum'];
        $limit = 36;
        $start = ($pageNum - 1) * $limit;
        $sql = "select * from san_pham limit $start,  $limit";
        return pdo_query_all($sql);
    }
    function get_total_hanghoa() {
        $sql = "select count(id_sp) as total_hh from san_pham";
        $result = pdo_query_one($sql);
        $total_hh = $result['total_hh'];
        return $total_hh;
    }
    function get_18_hanghoa_top() {
        for($i=0; $i<238; $i++) {
            $sql = "insert into san_pham(ten_sp, don_gia, giam_gia, anh_sp, id_loai, dac_biet, luot_ban, ngay_nhap, mo_ta) values('Gấu bông mèo xám dễ thương 50cm ( ko kèm áo )', 50000, 45000, 'sp4.jpg
            ', 36, 'Bình thường', 0, now(), '- Được may bằng chất liệu vải nhung co dãn 4 chiều êm ái tạo cảm giác dễ chịu cho người dùng
            - Không bị rụng lông trong quá trình sử dụng - có thể giặt sạch trong quá trình sử dụng
            - Chất Liệu: 100% Bông gòn cao cấp
            - Chất liệu vải co giãn 4 chiều siêu mềm mịn
            lưu ý : size 50cm mèo ko kèm áo nhé khách
            size 1m1 và m5 kèm áo nhé khác')";
            // pdo_execute($sql);
        }
        $sql = "select * from san_pham limit 18";
        return pdo_query_all($sql);
    }
    
?>