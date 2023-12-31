<?php
require_once 'connect_db.php';

// function khach_hang_insert($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro){
//     $sql = "INSERT INTO khach_hang(ma_kh, mat_khau, ho_ten, email, hinh, kich_hoat, vai_tro) VALUES (?, ?, ?, ?, ?, ?, ?)";
//     pdo_execute($sql, $ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat==1, $vai_tro==1);
// }

// function khach_hang_update($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro){
//     $sql = "UPDATE khach_hang SET mat_khau=?,ho_ten=?,email=?,hinh=?,kich_hoat=?,vai_tro=? WHERE ma_kh=?";
//     pdo_execute($sql, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat==1, $vai_tro==1, $ma_kh);
// }

// function khach_hang_delete($ma_kh){
//     $sql = "DELETE FROM khach_hang  WHERE ma_kh=?";
//     if(is_array($ma_kh)){
//         foreach ($ma_kh as $ma) {
//             pdo_execute($sql, $ma);
//         }
//     }
//     else{
//         pdo_execute($sql, $ma_kh);
//     }
// }

function user_select_all()
{
    $sql = "SELECT * FROM khach_hang";
    return pdo_query($sql);
}

function user_select_by_id($idus)
{
    $sql = "SELECT * FROM user WHERE idUser=?";
    return pdo_query_one($sql, $idus);
}
// function img_select_by_id($idpr){
//     $sql = "SELECT * FROM img WHERE idProducts=".$idpr;
//     return pdo_query($sql);
// }

function User_Check_Login($user, $pass)
{
    $sql = "SELECT * FROM user WHERE Username=? AND Pass=?";
    return pdo_query_one($sql, $user, $pass);
}

function img_select_by_id($idpr)
{
    $sql = "SELECT * FROM img WHERE idProducts=" . $idpr;
    return pdo_query($sql);
}
function check_name_user($idU)
{
    $sql = "SELECT Name_U FROM user WHERE idUser=?";
    return pdo_query_value($sql, $idU);
}
function check_uname_user($idU)
{
    $sql = "SELECT Username FROM user WHERE idUser=?";
    return pdo_query_value($sql, $idU);
}
function check_username_user($username)
{
    $sql = "SELECT Username FROM user WHERE Username=?";
    return pdo_query_one($sql, $username);
}
function check_email_user($email)
{
    $sql = "SELECT Email FROM user WHERE Email=?";
    return pdo_query_one($sql, $email);
}
function check_pass_user($Pass)
{
    $sql = "SELECT Pass FROM user WHERE Pass=?";
    return pdo_query_one($sql, $Pass);
}

// function khach_hang_select_by_role($vai_tro){
//     $sql = "SELECT * FROM khach_hang WHERE vai_tro=?";
//     return pdo_query($sql, $vai_tro);
// }

// function khach_hang_change_password($ma_kh, $mat_khau_moi){
//     $sql = "UPDATE khach_hang SET mat_khau=? WHERE ma_kh=?";
//     pdo_execute($sql, $mat_khau_moi, $ma_kh);
// }
function check_coin($id){
    $sql = "SELECT Total_Pcoin FROM user WHERE idUser=?";
    return pdo_query_value($sql, $id);
}
function Insert_user($username, $pass, $name_u, $email, $phone,$img)
{
    $sql = "INSERT INTO user(`Username`, `Pass`,  `Name_U`, `Email`, `Phone`, `Avata_img`) VALUES (?,?,?,?,?,?)";
    return pdo_execute($sql,$username, $pass, $name_u, $email,$phone,$img);
}

function Update_password($newpass,$iduser)
{
    $sql= "UPDATE user SET Pass=? WHERE idUser=?";
    return pdo_execute($sql,$newpass,$iduser);
}
function cong_tien($id, $sotien){
    $Toltal_Pcoin = check_coin($id);
    $sql = "UPDATE user SET Total_Pcoin=? WHERE idUser=?";
    $Toltal_Pcoin = $Toltal_Pcoin + $sotien;
    return pdo_execute($sql, $Toltal_Pcoin, $id);
}
function tru_tien($id, $sotien){
    $Toltal_Pcoin = check_coin($id);
    $sql = "UPDATE user SET Total_Pcoin=? WHERE idUser=?";
    $Toltal_Pcoin = $Toltal_Pcoin - $sotien;
    return pdo_execute($sql, $Toltal_Pcoin, $id);
}
function get_count_user(){
    $sql = "SELECT count(*) FROM user WHERE 1";
    return pdo_query_value($sql);
}
function get_total_coin(){
    $sql = "SELECT SUM(Total_Pcoin) FROM user WHERE 1";
    return pdo_query_value($sql);
}
function admin_login($username, $password){
    $sql = "SELECT count(*) FROM user WHERE (Username=? OR Email=?) AND Pass=? AND Role=1";
    return pdo_query_value($sql, $username, $username, $password) > 0;
}   