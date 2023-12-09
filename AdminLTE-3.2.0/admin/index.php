<?php
require_once('../model/pdo.php');
require_once('../model/function.php');
require_once('../model/global.php');
require_once('../model/categories.php');
require_once('../model/products.php');
require_once('../model/users.php');
require_once('../model/thong-ke.php');
require_once('../model/coupons.php');
if (!$_SESSION['admin']) {
    header('Location: login.php');
} else {
    require_once('../model/pdo.php');
    require_once('view/header.php');
    if (isset($_GET['page'])) {
        $pg = check_string($_GET['page']);
        switch ($pg) {
            case 'categories':
                $all_cate = cate_select_all();

                require_once('view/categories.php');
                break; 
            case 'query_add_cate':
                if (isset($_POST['addCate'])) {
                    $name = check_string($_POST['name']);
                    if ($name == "" || empty($_FILES['image']['name'])) {
                        echo '<script type="text/javascript">swal("Lỗi", " Không được để trống tên danh mục hoặc ảnh", "error");
                            setTimeout(function(){ location.href = "index.php?page=categories" },1000);</script>';
                        exit();
                    } else {
                        $file_extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
                        $file_name = uniqid() . '.' . $file_extension;
                        $dir_upload = '../' . PATH_IMG_CATE . $file_name;
                        move_uploaded_file($_FILES['image']['tmp_name'], $dir_upload);
                        categories_insert($name, $file_name);
                        echo '<script type="text/javascript">swal("Thành công", "Đã thêm thành công", "success");
                            setTimeout(function(){ location.href = "index.php?page=categories" },1000);</script>';
                    }
                }
                break;
            case 'query_update_cate':
                if (isset($_POST['updateCate'])) {
                    $id = check_string($_POST['id']);
                    $name = check_string($_POST['name']);
                    $old_img = $_POST['old_img'];
                    $new_img = $_FILES['image']['name'];
                    $img = '';
                    if (!empty($new_img)) {
                        $old_img_path = '../' . PATH_IMG_CATE . $old_img;
                        if (file_exists($old_img_path)) {
                            unlink($old_img_path);
                        }
                        $file_extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
                        $file_name = uniqid() . '.' . $file_extension;
                        $dir_upload = '../' . PATH_IMG_CATE . $file_name;
                        move_uploaded_file($_FILES['image']['tmp_name'], $dir_upload);
                        $img = $file_name;
                    } else {
                        $img = $old_img;
                    }
                    cate_update($id, $name, $img);
                    echo '<script type="text/javascript">swal("Thành công", "Đã sửa thành công", "success");
                            setTimeout(function(){ location.href = "index.php?page=categories" },1000);</script>';
                }
                break;
            case 'deleteCate':
                if ((isset($_GET['id'])) && ($_GET['id'] > 0)) {
                    $id = check_string($_GET['id']);
                    $img = get_img_cate_name($id);
                    $image_path = "../" . PATH_IMG_CATE . $img;
                    if (file_exists($image_path)) {
                        unlink($image_path);
                    }
                    cate_delete($id);
                    echo '<script type="text/javascript">swal("Thành công", "Đã xóa thành công", "success");
                    setTimeout(function(){ location.href = "index.php?page=categories" },1000);</script>';
                }
                break;
            case 'products':
                $list_product = product_select_all();
                require_once('view/products.php');
                break;
            case 'add-product':
                $listCate = cate_select_all();
                require_once('view/add-product.php');
                break;
            case 'query_add_product':
                if (isset($_POST['submit'])) {
                    $name = check_string($_POST['name']);
                    $price = check_string($_POST['price']);
                    $price_sale = check_string($_POST['price_sale']);
                    $discount = check_string($_POST['discount']);
                    $description = $_POST['description'];
                    $id_cate = $_POST['id_cate'];
                    $detail = $_POST['detail'];
                    $image = $_FILES['image']['name'];
                    $iddm = $_POST['id_cate'];
                    if ($name == "" || $price == "" || $price_sale == "" || $discount == "" || $image == "") {
                        echo '<script type="text/javascript">swal("Lỗi", "Không được bỏ trống bất kì trường nào", "error");
                        setTimeout(function(){ location.href = "index.php?page=add-product" },2000);</script>';
                    } else {
                        $file_extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
                        $file_name = uniqid() . '.' . $file_extension;
                        $dir_upload = '../' . PATH_IMG_PRO . $file_name;
                        move_uploaded_file($_FILES['image']['tmp_name'], $dir_upload);
                        product_insert($file_name, $name, $price, $discount, $price_sale, $detail, $description, $iddm);
                        echo '<script type="text/javascript">swal("Thành công", "Thêm sản phẩm thành công", "success");
                        setTimeout(function(){ location.href = "index.php?page=products" },2000);</script>';
                    }
                }
                break;
            case 'query_update_product':
                if (isset($_POST['submit'])) {
                    $id = check_string($_POST['id']);
                    $name = check_string($_POST['name']);
                    $price = check_string($_POST['price']);
                    $price_sale = check_string($_POST['price_sale']);
                    $discount = check_string($_POST['discount']);
                    $description = $_POST['description'];
                    $detail = $_POST['detail'];
                    $iddm = $_POST['id_cate'];
                    $old_img = $_POST['old_img'];
                    $new_img = $_FILES['image']['name'];
                    if (!empty($new_img)) {
                        $old_img_path = '../' . PATH_IMG_PRO . $old_img;
                        if (file_exists($old_img_path)) {
                            unlink($old_img_path);
                        }
                        $file_extension = pathinfo($new_img, PATHINFO_EXTENSION);
                        $file_name = uniqid() . '.' . $file_extension;
                        $dir_upload = '../' . PATH_IMG_PRO . $file_name;
                        move_uploaded_file($_FILES['image']['tmp_name'], $dir_upload);
                        $img = $file_name;
                    } else {
                        $img = $old_img;
                    }
                    product_update($id, $img, $name, $price, $discount, $price_sale, $detail, $description, $iddm);
                    echo '<script type="text/javascript">swal("Thành công", "Đã sửa thành công", "success");
                                setTimeout(function(){ location.href = "index.php?page=products" },1000);</script>';
                }
                break;
            case 'update_product':
                if (isset($_GET['id']) && $_GET['id'] > 0) {
                    $id = check_string($_GET['id']);
                    $listCate = cate_select_all();
                    $detail_pro = product_select_by_id($id);

                    require_once('view/update-product.php');
                } else {
                    require_once('view/404.php');
                }
                break;
            // case 'deletePro':
            //     if ((isset($_GET['id'])) && ($_GET['id'] > 0)) {
            //         $id = check_string($_GET['id']);
            //         $img = get_img_pro_name($id);
            //         $image_path = "../" . PATH_IMG_PRO . $img;
            //         if (file_exists($image_path)) {
            //             unlink($image_path);
            //         }
            //         product_delete($id);
            //         echo '<script type="text/javascript">swal("Thành công", "Đã xóa thành công", "success");
            //             setTimeout(function(){ location.href = "index.php?page=products" },1000);</script>';
            //     }
            //     break;
            case "users":
                $all_user = get_all_user();
                require_once('view/users.php');
                break;
            case "editUser":
                if(isset($_GET['id']) && $_GET['id'] > 0) $id = check_string($_GET['id']);
                $user_info = user_select_by_id($id);
                require_once('view/editUser.php');
                break;
            case 'coupon-list':
                $list_coupon = get_all_coupon();
                require_once("view/coupon-list.php");
                break;
            case 'coupon-add':
                require_once("view/coupon-add.php");
                break;
            default:
                require_once('view/404.php');
                break;
        }
    } else {
        $userDaily = (string) getDailyStats(date("Y-m-d"));
        $userWeekly = (string) getCountWeekly(date("W"));
        $userMonthly = (string) getCountMonthly(date("m"));
        require_once('view/home.php');
    }
    
}
