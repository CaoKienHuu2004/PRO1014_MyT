<?php

require_once(__DIR__ . "/../../model/connect_db.php");
require_once(__DIR__ . "/../../model/helper.php");
require_once(__DIR__ . "/../../model/category_db.php");

if (isset($_POST['id'])) {
    $id = check_string($_POST['id']);
    $row = get_row("SELECT * FROM `categories` WHERE `idCategories` = '$id' ");
    if ($row < 1) {
        $data = json_encode([
            'status'    => 'error',
            'msg'       => 'ID danh mục không tồn tại trong hệ thống'
        ]);
        die($data);
    } else {

        $isRemove = category_delete($id);
        $data = json_encode([
            'status'    => 'success',
            'msg'       => 'Xóa danh mục thành công'
        ]);
        die($data);
    }
} else {
    $data = json_encode([
        'status'    => 'error',
        'msg'       => 'Dữ liệu không hợp lệ'
    ]);
    die($data);
}
