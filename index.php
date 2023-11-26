<?php
    session_start();
    ob_start();
    include_once "model/connect_db.php";
    include_once "model/product_db.php";
    include_once "model/category_db.php";
    include_once "model/user_db.php";
// DATA---------------------------------------------------------------------------------------------------------------------
    $product_select_all = product_select_all();
    $product_select_sale = product_select_sale(10);
    $product_select_bestsaler = product_select_bestsaler(12);
    $category_select_all = category_select_all(6);
    $product_select_view = product_select_view(12);
    $product_select_category_0 = product_select_category(0,10);
    $product_select_category_1 = product_select_category(1,10);
    $product_select_category_2 = product_select_category(2,10);
    $product_select_category_3 = product_select_category(3,10);
    $product_select_category_4 = product_select_category(4,10);
    $product_select_category_5 = product_select_category(5,10);
// Control---------------------------------------------------------------------------------------------------------------------
    include_once "view/header.php";
    

    // Tạo đường dẫn pg - vd: index.php?pg=product
    if (isset($_GET['pg'])) {
        switch ($_GET['pg']) {
            case 'product':
                include_once "view/product.php";
                break;
                
            case 'login':
                if(isset($_POST['btnlogin'])&&($_POST['btnlogin'])){
                    // input
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $login = User_Check_Login($user,$pass);
                    if ($login) {
                        $_SESSION['user']=$login;
                        header('Location: index.php');
                    }
                    else{
                        $_SESSION['loi']='<i style="color: red;">Tên đăng nhập hoặc mật khẩu không đúng, vui lòng thử lại !</i>';
                    }
                    
                }
                include_once "view/login.php";
                break;

            case 'logout':
                if(isset($_SESSION['user'])){
                    unset($_SESSION['user']);
                    header('Location: index.php?pg=login');
                }
                break;

            case 'product_detail':
                if (isset($_GET['idProduct'])&&($_GET['idProduct']>=0)) {
                    $idProduct = $_GET['idProduct'];
                    $product_select_id = product_select_id($idProduct);
                    include_once "view/product_detail.php";
                }else{
                    include_once "view/home.php";
                }
                break;

            case "search":
                if(isset($_POST['btnSearch'])){
                    $search = $_POST['search'];
                    $pro_search = product_select_keyword($search);
                }
                include_once "view/search.php"; 
                break;

            default:
                include_once "view/home.php";
                break;
        }
    }else {
        include_once "view/home.php";
    }
    include_once "view/footer.php";
    // PHP Mailer---------------------------------------------------------------------------------------------------------------
    // require("view/PHPMailer/src/PHPMailer.php");
    // require("view/PHPMailer/src/SMTP.php");
    // require("view/PHPMailer/src/Exception.php");

    //     $mail = new PHPMailer\PHPMailer\PHPMailer();
    //     $mail->IsSMTP(); // enable SMTP

    //     $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    //     $mail->SMTPAuth = true; // authentication enabled
    //     $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    //     $mail->Host = "smtp.gmail.com";
    //     $mail->Port = 465; // or 587
    //     $mail->IsHTML(true);
    //     $mail->Username = "ckienhuu12a12021@gmail.com";
    //     $mail->Password = "ajuvqcrvloxcqzox";
    //     $mail->SetFrom("ckienhuu12a12021@gmail.com");
    //     $mail->Subject = "[THANKS] THÔNG BÁO ĐĂNG KÝ ƯU ĐÃI THÀNH CÔNG !";
    //     $mail->Body = "Cảm ơn bạn đã đăng ký, chúng tôi sẽ gửi những ưu đãi sớm nhất cho bạn";
    //     $mail->AddAddress("huuckps27362@fpt.edu.vn");

    //     if(!$mail->Send()) {
    //         echo "Mailer Error: " . $mail->ErrorInfo;
    //     } else {
    //         echo "Message has been sent";
    //     }

?>