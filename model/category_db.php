<?php
require_once 'connect_db.php';

/**
 * Thêm loại mới
 * @param String $name_category là tên loại
 * @throws PDOException lỗi thêm mới
 */
function category_insert($name_category){
    $sql = "INSERT INTO category(name_category) VALUES(?)";
    pdo_execute($sql, $name_category);
}
/**
 * Cập nhật tên loại
 * @param int $id_category là mã loại cần cập nhật
 * @param String $name_category là tên loại mới
 * @throws PDOException lỗi cập nhật
 */
function category_update($id_category, $name_category){
    $sql = "UPDATE category SET name_category=? WHERE id_category=?";
    pdo_execute($sql, $name_category, $id_category);
}
/**
 * Xóa một hoặc nhiều loại
 * @param mix $id_category là mã loại hoặc mảng mã loại
 * @throws PDOException lỗi xóa
 */
function category_delete($id_category){
    $sql = "DELETE FROM category WHERE id_category=?";
    if(is_array($id_category)){
        foreach ($id_category as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $id_category);
    }
}
// --------------------------------------------------------------------------------------------------------------------
/**
 * Truy vấn tất cả các loại
 * @return array mảng loại truy vấn được
 * @throws PDOException lỗi truy vấn
 */
function category_select_all($limi){
    $sql = "SELECT * FROM categories LIMIT ".$limi;
    return pdo_query($sql);
}
/**
 * Truy vấn một loại theo mã
 * @param int $id_category là mã loại cần truy vấn
 * @return array mảng chứa thông tin của một loại
 * @throws PDOException lỗi truy vấn
 */
function category_select_by_id($idcata){
    $sql = "SELECT * FROM categories WHERE idCategories=?";
    return pdo_query_one($sql, $idcata);
}
/**
 * Kiểm tra sự tồn tại của một loại
 * @param int $id_category là mã loại cần kiểm tra
 * @return boolean có tồn tại hay không
 * @throws PDOException lỗi truy vấn
 */
function category_exist($id_category){
    $sql = "SELECT count(*) FROM category WHERE id_category=?";
    return pdo_query_value($sql, $id_category) > 0;
}

function Show_Category()
{
    $sql = "SELECT * FROM category";
    return pdo_query($sql);
}