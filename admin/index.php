<?php
include '../model/pdo.php';
include '../model/taikhoan.php';
include '../model/bill.php';
include 'header.php';

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        // quản lý tài khoan
        case 'dskh':
            $listtaikhoan = loadall_taikhoan();
            include 'taikhoan/list.php';
            break;

        // quản lý đơn hàng
        case 'listbill':
            if (isset($_POST['kyw']) && $_POST['kyw'] != '') {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = '';
            }
            $listbill = loadall_bill($kyw, 0);
            include 'bill/listbill.php';
            break;

        default:
            include 'home.php';
            break;
    }
} else {
    include 'home.php';
}
include 'footer.php';
?>
