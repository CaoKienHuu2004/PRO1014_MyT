<?php
require_once(__DIR__ . "/../../model/connect_db.php");
require_once(__DIR__ . "/../../model/helper.php");
require_once(__DIR__ . "/../../model/user_db.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = check_string($_POST['username']);
    $password = check_string($_POST['password']);
    if (empty($username = check_string($_POST['username']))) {
        die(json_encode([
            'status'    => 'error',
            'msg'       => 'Username không được để trống'
        ]));
    }
    if (empty($_POST['password'])) {
        die(json_encode([
            'status'    => 'error',
            'msg'       => 'Mật khẩu không được để trống'
        ]));
    }
    if (admin_login($username, $password) <= 0) {
        die(json_encode([
            'status'    => 'error',
            'msg'       => 'Tài khoản hoặc mật khẩu khônng đúng'
        ]));
    } else {
        $_SESSION['admin'] = $username;
        die(json_encode([
            'status'    => 'success',
            'msg'       => 'Đăng nhập thành công'
        ]));
        // header('Location: index.php');
    }
}
