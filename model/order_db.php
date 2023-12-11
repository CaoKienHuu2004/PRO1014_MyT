<?php
require_once 'connect_db.php';

function order_insert($iU,$Ns,$Ps,$Es,$Nb,$Pb,$Eb,$TP){
    $sql = "INSERT INTO `order` (idUser,Name_seller,Phone_seller,Email_seller,
    Name_buyer,Phone_buyer,Email_buyer,Date_oder,Total_Pcoin) VALUES (?,?,?,?,?,?,?,now(),?)";
    return pdo_execute_lastInsertId($sql,$iU,$Ns,$Ps,$Es,$Nb,$Pb,$Eb,$TP);
    
}
function cart_insert($idProducts,$idOrder){
    $sql = "INSERT INTO cart(idProducts,idOrder) VALUES (?,?)";
    pdo_execute($sql,$idProducts,$idOrder);
}

// function trade_insert(){
//     $sql = "INSERT INTO trade(idUser,idOrder,Type) VALUES (?,?,?)";
//     pdo_execute($sql);
// }

function select_order_product_by_idUser($idUs){
    $sql = "SELECT * FROM cart JOIN `order` ON `order`.idOrder = cart.idOrder WHERE `order`.idUser = ".$idUs;
    return pdo_query($sql);
}
function order_product_idUser_all($idUs, $idPro){
    $sql = "SELECT * FROM cart JOIN `order` ON `order`.idOrder = cart.idOrder WHERE `order`.idUser = ".$idUs." AND cart.idProducts = ".$idPro;
    return pdo_query($sql);
}
function get_count_order(){
    $sql = "SELECT count(*) FROM `order` WHERE 1";
    return pdo_query_value($sql);
}
?>