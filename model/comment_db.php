<?php
require_once 'connect_db.php';

function comment_insert($idUser, $idProduct, $Content){
    $sql = "INSERT INTO comment(idUser, idProducts, Content, Date) VALUES (?,?,?, now())";
    pdo_execute($sql, $idUser, $idProduct, $Content);
}

function comment_update($idComment, $idUser, $idProduct, $Content, $Date){
    $sql = "UPDATE comment SET idUser=?,idProduct=?,Content=?,Date=? WHERE idComment=?";
    pdo_execute($sql, $idUser, $idProduct, $Content, $Date, $idComment);
}

function comment_delete($idComment){
    $sql = "DELETE FROM comment WHERE idComment=?";
    if(is_array($idComment)){
        foreach ($idComment as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $idComment);
    }
}

function comment_select_all(){
    $sql = "SELECT * FROM comment bl ORDER BY Date DESC";
    return pdo_query($sql);
}

function comment_select_by_id($idComment){
    $sql = "SELECT * FROM comment WHERE idComment=?";
    return pdo_query_one($sql, $idComment);
}

function comment_exist($idComment){
    $sql = "SELECT count(*) FROM comment WHERE idComment=?";
    return pdo_query_value($sql, $idComment) > 0;
}
//-------------------------------//
function comment_select_by_product($idProduct){
    $sql = "SELECT bl.*, h.Name FROM comment bl JOIN product h ON h.idProduct=b.idProduct WHERE b.idProduct=? ORDER BY Date DESC";
    return pdo_query($sql, $idProduct);
}
function 