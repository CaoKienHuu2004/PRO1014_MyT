<?php
require_once 'connect_db.php';

// function hang_hoa_insert($ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta){
//     $sql = "INSERT INTO hang_hoa(ten_hh, don_gia, giam_gia, hinh, ma_loai, dac_biet, so_luot_xem, ngay_nhap, mo_ta) VALUES (?,?,?,?,?,?,?,?,?)";
//     pdo_execute($sql, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet==1, $so_luot_xem, $ngay_nhap, $mo_ta);
// }

// function hang_hoa_update($ma_hh, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta){
//     $sql = "UPDATE hang_hoa SET ten_hh=?,don_gia=?,giam_gia=?,hinh=?,ma_loai=?,dac_biet=?,so_luot_xem=?,ngay_nhap=?,mo_ta=? WHERE ma_hh=?";
//     pdo_execute($sql, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet==1, $so_luot_xem, $ngay_nhap, $mo_ta, $ma_hh);
// }

// function hang_hoa_delete($ma_hh){
//     $sql = "DELETE FROM hang_hoa WHERE  ma_hh=?";
//     if(is_array($ma_hh)){
//         foreach ($ma_hh as $ma) {
//             pdo_execute($sql, $ma);
//         }
//     }
//     else{
//         pdo_execute($sql, $ma_hh);
//     }
// }

function product_select_all(){
    $sql = "SELECT * FROM product";
    return pdo_query($sql);
}
function product_select_view($limi){
    $sql = "SELECT * FROM product WHERE View ORDER BY View DESC LIMIT ".$limi;
    return pdo_query($sql);
}
function product_select_sale($limi){
    $sql = "SELECT * FROM product WHERE Price_2 LIMIT ".$limi;
    return pdo_query($sql);
}
function product_select_bestsaler($limi){
    $sql = "SELECT * FROM product WHERE best_saler LIMIT ".$limi;
    return pdo_query($sql);
}
function product_select_category($cate,$limi){
    $sql = "SELECT * FROM product WHERE idCategories = ".$cate." ORDER BY view DESC LIMIT ".$limi;
    return pdo_query($sql);
}


function product_select_id($idProduct){
    $sql = "SELECT * FROM product WHERE idProduct=?";
    return pdo_query_one($sql, $idProduct);
}


// function hang_hoa_exist($ma_hh){
//     $sql = "SELECT count(*) FROM hang_hoa WHERE ma_hh=?";
//     return pdo_query_value($sql, $ma_hh) > 0;
// }

function product_view_count($idPr){
    $sql = "UPDATE product SET view = view + 1 WHERE idProduct=?";
    pdo_execute($sql, $idPr);
}

// function hang_hoa_select_top10(){
//     $sql = "SELECT * FROM hang_hoa WHERE so_luot_xem > 0 ORDER BY so_luot_xem DESC LIMIT 0, 10";
//     return pdo_query($sql);
// }

// function hang_hoa_select_dac_biet(){
//     $sql = "SELECT * FROM hang_hoa WHERE dac_biet=1";
//     return pdo_query($sql);
// }

// function hang_hoa_select_by_loai($ma_loai){
//     $sql = "SELECT * FROM hang_hoa WHERE ma_loai=?";
//     return pdo_query($sql, $ma_loai);
// }

function product_select_keyword($keyword){
    $sql = "SELECT * FROM product hh "
            . " JOIN categories lo ON lo.idCategories =hh.idCategories  "
            . " WHERE Name LIKE ? OR Name_C LIKE ?";
    return pdo_query($sql, '%'.$keyword.'%', '%'.$keyword.'%');
}

// function hang_hoa_select_page(){
//     if(!isset($_SESSION['page_no'])){
//         $_SESSION['page_no'] = 0;
//     }
//     if(!isset($_SESSION['page_count'])){
//         $row_count = pdo_query_value("SELECT count(*) FROM hang_hoa");
//         $_SESSION['page_count'] = ceil($row_count/10.0);
//     }
//     if(exist_param("page_no")){
//         $_SESSION['page_no'] = $_REQUEST['page_no'];
//     }
//     if($_SESSION['page_no'] < 0){
//         $_SESSION['page_no'] = $_SESSION['page_count'] - 1;
//     }
//     if($_SESSION['page_no'] >= $_SESSION['page_count']){
//         $_SESSION['page_no'] = 0;
//     }
//     $sql = "SELECT * FROM hang_hoa ORDER BY ma_hh LIMIT ".$_SESSION['page_no'].", 10";
//     return pdo_query($sql);
// }

function filter_products($category, $minPrice, $maxPrice, $orderBy)
{
    $sql = "SELECT * FROM product WHERE category_id = ? AND price BETWEEN ? AND ? ORDER BY ";
    if ($orderBy == 1) {
        $sql .= "popularity DESC";
    } elseif ($orderBy == 2) {
        $sql .= "date_added ASC";
    } elseif ($orderBy == 3) {
        $sql .= "date_added DESC";
    }
    return pdo_query($sql, $category, $minPrice, $maxPrice);
}