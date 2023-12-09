<?php
session_start();
if (!isset($_SESSION['giohang'])) {
    $_SESSION['giohang'] = [];
}
ob_start();
include_once "model/connect_db.php";
include_once "model/product_db.php";
include_once "model/category_db.php";
include_once "model/user_db.php";
// include_once "model/comment_db.php";
include_once "model/comment_db.php";
include_once "model/order_db.php";
// DATA---------------------------------------------------------------------------------------------------------------------
$product_select_all = product_select_all();
$product_select_sale = product_select_sale(10);
$product_select_bestsaler = product_select_bestsaler(12);
$category_select_all = category_select_all(6);
$product_select_view = product_select_view(12);
$product_select_category_0 = product_select_category(6, 10);
$product_select_category_1 = product_select_category(1, 10);
$product_select_category_2 = product_select_category(2, 10);
$product_select_category_3 = product_select_category(3, 10);
$product_select_category_4 = product_select_category(4, 10);
$product_select_category_5 = product_select_category(5, 10);
$categories = Show_Category();
// Control---------------------------------------------------------------------------------------------------------------------
include_once "view/header.php";


// Tạo đường dẫn pg - vd: index.php?pg=product
if (isset($_GET['pg'])) {
    switch ($_GET['pg']) {
        case 'product':
            $_SESSION['link_page'] = $_SERVER['REQUEST_URI'];
            $Price = 0;
            $orderBy = 1;
            if (isset($_POST['submit'])) {
                $Price =    $_POST['Price'];
                $orderBy =  $_POST['orderBy'];
                $category = $_POST['category'];
                $filter=filter_products($category, $Price, $orderBy);
            } else {
                $filter = get_all_products(); // lấy tất cả sản phẩm
            }
            include_once "view/product.php";
            break;
        case 'signmail':
            // $_SESSION['link_page'] = $_SERVER['REQUEST_URI'];    
            if (isset($_POST['btnmail'])) {
                $emailer = $_POST['mail'];
                $mail = new PHPMailer\PHPMailer\PHPMailer();
                $mail->IsSMTP(); // enable SMTP

                $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
                $mail->SMTPAuth = true; // authentication enabled
                $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
                $mail->Host = "smtp.gmail.com";
                $mail->Port = 465; // or 587
                $mail->IsHTML(true);
                $mail->Username = "ckienhuu12a12021@gmail.com";
                $mail->Password = "ajuvqcrvloxcqzox";
                $mail->SetFrom("ckienhuu12a12021@gmail.com");
                $mail->Subject = "[THANKS] MyT - STUDENT RESOURCE EXCHANGE WEBSITE";
                $mail->Body = "Thank you for registering, we will send you special offers as soon as possible";
                $mail->AddAddress($emailer);


                if (!$mail->Send()) {
                    echo "Mailer Error: " . $mail->ErrorInfo;
                } else {
                    echo '<script>alert ("Chúng tôi đã gửi email cho bạn, hãy check mail nhé !");</script>';
                }
                header('location: index.php');
            }
            break;
        case 'create_product':
            $_SESSION['link_page'] = $_SERVER['REQUEST_URI'];
            include_once "view/create_product.php";
            break;

        case "edit_user":
            $_SESSION['link_page'] = $_SERVER['REQUEST_URI'];
            if (isset($_POST['submit'])) {
                $email = $_POST['email'];
                $Pass = $_POST['oldPass'];
                $newpass = $_POST['new-password'];
                $repass = $_POST['re-password'];
                $iduser = $_SESSION["user"]["idUser"];
                $kq1 = check_pass_user($Pass);
                $kq2 = check_email_user($email);
                $update = Update_password($newpass, $iduser);
                if ($kq2) {
                    if ($kq1) {
                        if ($newpass = !$repass) {
                            $_SESSION['loi'] = 'MẬT KHẨU KHÔNG TRÙNG KHỚP';
                        } else {
                            // $update = Update_password($newpass, $iduser);
                            if ($update) {
                                $_SESSION['loi'] = 'ĐÃ XẢY RA LỖI KHI ĐỔI MẬT KHẨU';
                            } else {
                                $_SESSION['thongbao'] = 'ĐÃ ĐỔI THÀNH CÔNG!';
                            }
                        }
                    } else {
                        $_SESSION['loi'] = 'MẬT KHẨU CŨ KHÔNG ĐÚNG';
                    }
                } else {
                    $_SESSION['loi'] = 'EMAIL KHÔNG TRÙNG KHỚP';
                }
            }
            include_once "view/edit-profile.php";
            break;
        case 'signup':
            $_SESSION['link_page'] = $_SERVER['REQUEST_URI'];
            if (isset($_POST['submit'])) {
                $username = $_POST['username'];
                $pass = $_POST['password'];
                $repass = $_POST['re-password'];
                $name_u = $_POST['name_U'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $kq = check_username_user($username);
                $kq2 = check_email_user($email);
                if ($pass != $repass) {
                    $_SESSION['loi'] = 'MẬT KHẨU KHÔNG TRÙNG KHỚP, VUI LÒNG NHẬP LẠI!';
                } else if (isset($_POST['check']) && $_POST['check'] == '0') {
                    if ($kq) {
                        $_SESSION['loi'] = 'TÀI KHOẢN <strong>' . $username . '</strong> ĐÃ TỒN TẠI';
                    } else if ($kq2) {
                        $_SESSION['loi'] = 'Email <strong>' . $email . '</strong> ĐÃ TỒN TẠI';
                    } else {
                        $img = 'newUser/AvatarBase.jpg';
                        // $background = 'view/layout/assets/images/newUser/BackgroundBase.png';
                        $insertResult = Insert_user($username, $pass, $name_u, $email,$phone, $img);
                        if ($insertResult) {
                            $_SESSION['loi'] = 'ĐÃ XẢY RA LỖI KHI TẠO TÀI KHOẢN';
                        } else {
                            $_SESSION['thongbao'] = 'ĐÃ TẠO TÀI KHOẢN THÀNH CÔNG!';
                            header('location: index.php?pg=login');
                        }
                    }
                } else {

                    $_SESSION['loi'] = "Bạn cần phải đồng ý với các điều khoản và điều kiện để tạo tài khoản.";
                }
            } else {
                // echo 'chưa nhận được dữ liệu!';
            }

            include_once "view/signup.php";
            break;
        case 'login':
            $_SESSION['link_page'] = $_SERVER['REQUEST_URI'];
            if (isset($_POST['btnlogin']) && ($_POST['btnlogin'])) {
                // input
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $login = User_Check_Login($user, $pass);
                if ($login) {
                    $_SESSION['user'] = $login;
                    header('Location: index.php');
                } else {
                    $_SESSION['loi'] = '<i style="color: red;">Tên đăng nhập hoặc mật khẩu không đúng, vui lòng thử lại !</i>';
                }
            }
            include_once "view/login.php";
            break;

        case 'logout':
            $_SESSION['link_page'] = $_SERVER['REQUEST_URI'];
            if (isset($_SESSION['user'])) {
                unset($_SESSION['user']);
                header('Location: index.php?pg=login');
            }
            break;

        case 'product_detail':
            if (isset($_GET['idProduct'])&&($_GET['idProduct']>=0)) {
                $idProduct = $_GET['idProduct'];
                $idUser = $_SESSION['user']['idUser'];
                if(isset($_POST['btnCmt'])){
                    $content = $_POST['content'];
                    comment_insert($idUser, $idProduct, $content);
                    header("Location: index.php?pg=product_detail&idProduct=".$idProduct);
                }
                    
                $product_select_id = product_select_id($idProduct);
                $all_cmt = comment_select_by_product($idProduct);
                $count_comment = count($all_cmt);
                include_once "view/product_detail.php";
            }else{
                include_once "view/home.php";
            }

            break;

        case "search":
            $_SESSION['link_page'] = $_SERVER['REQUEST_URI'];
            if (isset($_POST['btnSearch'])) {
                $search = $_POST['search'];
                $pro_search = product_select_keyword($search);
            }
            include_once "view/search.php";
            break;
        case "user":
            $_SESSION['link_page'] = $_SERVER['REQUEST_URI'];
            // if (isset($_SESSION['user'])) {
            //     include_once "view/user.php";
            // } else {
            //     header('Location: index.php');
            // }
            if (isset($_GET['idUser']) && ($_GET['idUser'] >= 0)) {
                $user_select_by_id = user_select_by_id($_GET['idUser']);
                include_once "view/user.php";
            } else {
                include_once "view/home.php";
            }

            break;
        case "shopping_cart":
            $_SESSION['link_page'] = $_SERVER['REQUEST_URI'];
            //Lấy dữ liệu từ form
            if (isset($_POST['addcart'])) {
                $hinh = $_POST['hinh'];
                $user = $_POST['iduser'];
                $cate = $_POST['idcate'];
                $test = $_POST['test'];
                $masp = $_POST['masp'];
                $tensp = $_POST['tensp'];
                $gia = $_POST['gia'];
                $gia2 = $_POST['gia2'];
                $productExists = false;
                foreach ($_SESSION['giohang'] as $product) {
                    if ($product['idproduct'] == $masp) {
                        $productExists = true;
                        break;
                    }
                }
                if (!$productExists) {
                    $sp = array("img" => $hinh, "iduser" => $user, "idcate" => $cate, "test" => $test, "idproduct" => $masp, "name" => $tensp, "price" => $gia, "price_2" => $gia2);
                    array_push($_SESSION['giohang'], $sp);
                    header('Location: index.php?pg=view_cart');
                } else {
                    // Hiển thị thông báo nếu sản phẩm đã tồn tại trong giỏ hàng
                    // echo "<h6 align='center' style='color: red;'>Sản phẩm đã tồn tại trong giỏ hàng !</h6>";
                    header('Location: index.php?pg=view_cart');
                }
            }
            break;
        case "view_cart":
            $_SESSION['link_page'] = $_SERVER['REQUEST_URI'];
            include_once "view/shopping_cart.php";
            break;
        case 'action_cart':
            $_SESSION['link_page'] = $_SERVER['REQUEST_URI'];
            if (isset($_SESSION['giohang'])) {
                if (isset($_GET['delid']) && ($_GET['delid'] >= 0)) {
                    array_splice($_SESSION['giohang'], $_GET['delid'], 1);
                } else {
                    unset($_SESSION['giohang']);
                }
                header('Location: index.php?pg=view_cart');
            }

            break;
        case 'check_out':
            // var_dump(product_select_id($_SESSION['giohang'][1]['idproduct'])['idUser']);
            $_SESSION['link_page'] = $_SERVER['REQUEST_URI'];

            if (isset($_SESSION['user']) && ($_SESSION['user'])) {
                if (isset($_SESSION['giohang']) && ($_SESSION['giohang'])) {
                    include_once "view/checkout.php";
                } else {
                    echo "<h6 align='center' style='color: red; margin-top: 50px;'>Vui lòng thêm sản phẩm bất kì vào giỏ hàng !</h6>
                    <a href='index.php?pg=product' style='display: flex; justify-content: center;'><button align='center' class='btn btn-primary add-community' style='margin-top: 25px;'' >VÀO XEM CÁC SẢN PHẨM<i class='feather-arrow-right'></i></button></a>
                            
                    ";
                }
            } else {
                echo "
                    <h6 align='center' style='color: red; margin-top: 50px;'>Vui lòng đăng nhập để có thể thanh toán  !</h6>
                    <a href='index.php?pg=login' style='display: flex; justify-content: center;'><button align='center' class='btn btn-primary add-community' style='margin-top: 25px;'' >ĐĂNG NHẬP<i class='feather-arrow-right'></i></button></a>
                ";
            }

            break;
        case 'order':
            if (isset($_POST['btnorder'])) {
                $idUser = $_POST['idUser'];
                // $idproduct = $_POST['idproduct'];
                $Name_seller = $_POST['Name_seller'];
                $Phone_seller = $_POST['Phone_seller'];
                $Email_seller = $_POST['Email_seller'];
                $Name_buyer = $_POST['Name_buyer'];
                $Phone_buyer = $_POST['Phone_buyer'];
                $Email_buyer = $_POST['Email_buyer'];
                $Total_Pcoin = $_POST['Total_Pcoin'];
                if (isset($_SESSION['user'])&&($_SESSION['user']['Total_Pcoin']>=$Total_Pcoin)) {
                    $lastInsert = order_insert($idUser, $Name_seller, $Phone_seller, $Email_seller, $Name_buyer, $Phone_buyer, $Email_buyer, $Total_Pcoin);
                    tru_tien($idUser, $Total_Pcoin);
                    foreach ($_SESSION['giohang'] as $index => $value) {
                        $idProduct = $_SESSION['giohang'][$index]['idproduct'];
                        $idSeller = product_select_id($idProduct)['idUser'];
                        ($_SESSION['giohang'][$index]['price_2'] > 0) ? $sotien = $_SESSION['giohang'][$index]['price_2'] :  $sotien = $_SESSION['giohang'][$index]['price'];
                        cong_tien($idSeller, $sotien);
                        cart_insert($idProduct, $lastInsert);
                        
                    }
                    unset($_SESSION['giohang']);
                    header ('location: index.php?pg=user&idUser='.$_SESSION['user']['idUser']);
                }else{
                    echo "<h6 align='center' style='color: red;'>Bạn đang không đủ xu trong tài khoản !</h6>
                    <a href='index.php?pg=nap_rut' style='display: flex; justify-content: center;'><button align='center' class='btn btn-primary add-community' style='margin-top: 25px;'' >NẠP NGAY <i class='feather-arrow-right'></i></button></a>";
                }
                
            }
            break;
        default:
            $_SESSION['link_page'] = $_SERVER['REQUEST_URI'];
            include_once "view/home.php";
            break;
    }
} else {
    $_SESSION['link_page'] = $_SERVER['REQUEST_URI'];
    include_once "view/home.php";
}
include_once "view/footer.php";
