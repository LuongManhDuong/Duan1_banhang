<?php
include '../model/pdo.php';
include '../model/taikhoan.php';
include '../model/sanpham.php';
include '../model/bill.php';
include 'header.php';

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        /* controller sản phẩm */

        case 'addsp':
            // ktra xem nguoi dung co click add chua
            if (isset($_POST['themmoi']) && $_POST['themmoi']) {
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = '../upload/';
                $target_file = $target_dir . basename($_FILES['hinh']['name']);

                if (
                    move_uploaded_file(
                        $_FILES['hinh']['tmp_name'],
                        $target_file
                    )
                ) {
                    //
                } else {
                    //
                }

                insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm);
                $thongbao = 'Them thanh cong';
            }
            $listdanhmuc = loadall_danhmuc();
            include 'sanpham/add.php';
            break;

        case 'listsp':
            if (isset($_POST['listok']) && $_POST['listok']) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = '';
                $iddm = 0;
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham($kyw, $iddm);
            include 'sanpham/list.php';
            break;

        case 'xoasp':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                delete_sanpham($_GET['id']);
            }
            $listsanpham = loadall_sanpham('', 0);
            include 'sanpham/list.php';
            break;
        case 'suasp':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $sanpham = loadone_sanpham($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include 'sanpham/update.php';
            break;
        case 'updatesp':
            if (isset($_POST['capnhap']) && $_POST['capnhap']) {
                $id = $_POST['id'];
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = '../upload/';
                $target_file = $target_dir . basename($_FILES['hinh']['name']);

                if (
                    move_uploaded_file(
                        $_FILES['hinh']['tmp_name'],
                        $target_file
                    )
                ) {
                    //
                } else {
                    //
                }
                update_sanpham($id, $iddm, $tensp, $giasp, $mota, $hinh);
                $thongbao = 'Cap nhap thanh cong';
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham('', 0);
            include 'sanpham/list.php';
            break;
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
