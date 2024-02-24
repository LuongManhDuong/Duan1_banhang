<?php
function insert_binhluan($noidung, $iduser, $idpro, $ngaydang)
{
	$sql = "insert into binhluan(noidung,iduser,idpro,ngaydang) values('$noidung','$iduser','$idpro','$ngaydang')";
	pdo_execute($sql);
}
function loadall_binhluan($idpro)
{
	$sql = "SELECT binhluan.*, taikhoan.user
					FROM binhluan 
					LEFT JOIN taikhoan ON binhluan.iduser = taikhoan.id";

	if ($idpro > 0) {
		$sql .= " WHERE idpro = '" . $idpro . "'";
	}

	$sql .= " ORDER BY binhluan.id DESC";

	$listbl = pdo_query($sql);
	return $listbl;
}

function delete_binhluan($id)
{
	$sql = "delete from binhluan where id=" . $id;
	pdo_execute($sql);
}
