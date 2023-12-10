<?php
ob_start();
require_once('../model/connect_db.php');
require_once('../model/helper.php');
require_once('../model/order_db.php');
require_once('../model/category_db.php');
require_once('../model/product_db.php');
require_once('../model/user_db.php');

require_once('view/header.php');

if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
        case 'categories':
            $all_cate = get_all_cate();
            require_once('view/categories.php');
            break;
        case 'categories-add':
            require_once('view/categories-add.php');
            break;
        case 'categories-edit':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $row = pdo_query_value("SELECT count(*) FROM categories WHERE idCategories = ?", $_GET['id']);
                $id = check_string($_GET['id']);
                if ($row > 0) {
                    $info_cate = category_select_by_id($id);
                    require_once('view/categories-edit.php');
                } else {
                    header("Location: index.php?page=categories");
                }
            } else {
                require_once('view/404.php');
            }

            break;
        case 'products':
            $all_pro = product_select_all_admin();
            require_once('view/products.php');
            break;
        case 'product-edit':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = check_string($_GET['id']);
                $row = pdo_query_value("SELECT count(*) FROM product WHERE idProduct = ?", $id);
                if ($row > 0) {
                    $info_pro = product_select_id($id);
                    require_once('view/product-edit.php');
                } else {
                    header("Location: index.php?page=products");
                }
            } else {
                require_once('view/404.php');
            }

            break;
        default:
            require_once('view/404.php');
            break;
    }
} else {
    $tong_giaodich = get_count_order();
    $tong_tainguyen = get_count_pro();
    $tong_thanhvien = get_count_user();
    $tong_sodu_user = get_total_coin();
    require_once('view/home.php');
}
