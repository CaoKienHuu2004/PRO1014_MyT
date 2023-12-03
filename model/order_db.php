<?php
require_once 'connect_db.php';

function select_order_product_by_idUser($idUs){
    $sql = "SELECT * FROM cart JOIN `order` ON `order`.idOrder = cart.idOrder WHERE `order`.idUser = ".$idUs;
    return pdo_query($sql);
}
?>