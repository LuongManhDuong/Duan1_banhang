<?php
function insert_binhluan($noidung,$iduser,$idpro,$ngaydang){
    $sql = "insert into binhluan(noidung,iduser,idpro,ngaydang) values('$noidung','$iduser','$idpro','$ngaydang')";
    pdo_execute($sql);
}
function loadall_binhluan($idpro){
    $sql = "select * from binhluan where 1";
    if($idpro > 0)
    $sql.=" AND idpro='".$idpro."'"; 
    $sql.=" order by id desc";
    $listbl=pdo_query($sql);
    return $listbl;
}
function delete_binhluan($id){
    $sql = "delete from binhluan where id=".$id;
    pdo_execute($sql);
}
?>