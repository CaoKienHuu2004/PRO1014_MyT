<?php
require_once(__DIR__ . "/../../model/connect_db.php");
require_once(__DIR__ . "/../../model/helper.php");
require_once(__DIR__ . "/../../model/category_db.php");

if (isset($_POST['name'])) {
    $name = check_string($_POST['name']);
    if ($name == "") {
        $data = json_encode([
            'status'    => 'error',
            'msg'       => 'Tên danh mục không được trống'
        ]);
        die($data);
    } else {
        $row = pdo_query_value("SELECT count(*) FROM `categories` WHERE `Name_C` LIKE ?", '%'. $name .'%');
        if ($row > 0) {
            $data = json_encode([
                'status'    => 'error',
                'msg'       => 'Danh mục đã tồn tại trên hệ thống'
            ]);
            die($data);
        } else {
            category_insert($name);
            $data = json_encode([
                'status'    => 'success',
                'msg'       => 'Thêm danh mục thành công'
            ]);
            die($data);
        }
    }
} else {
    $data = json_encode([
        'status'    => 'error',
        'msg'       => 'Dữ liệu không hợp lệ'
    ]);
    die($data);
}
