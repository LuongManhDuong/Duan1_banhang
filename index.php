<?php
session_start();
include 'model/pdo.php';
include 'model/sanpham.php';
include 'model/danhmuc.php';
include 'view/header.php';
include 'model/taikhoan.php';
include 'model/cart.php';
include 'global.php';

if (!isset($_SESSION['mycart'])) {
    $_SESSION['mycart'] = [];
}

$spnew = loadall_sanpham_home();
$dsdm = loadall_danhmuc();
$dstop10 = loadall_sanpham_top10();

if (isset($_GET['act']) && $_GET['act'] != '') {
    $act = $_GET['act'];
    switch ($act) {
        case 'gioithieu':
            include 'view/gioithieu.php';
            break;

        case 'lienhe':
            include 'view/lienhe.php';
            break;

        case 'gopy':
            include 'view/gopy.php';
            break;

        case 'hoidap':
            include 'view/hoidap.php';
            break;
        // đơn hàng
        case 'mybill':
            $listbill = loadall_bill($_SESSION['user']['id']);
            include 'view/cart/mybill.php';
            break;
        // thanh toán đơn hàng
        case 'billconfirm':
            // tao bill
            if (isset($_POST['dathang']) && $_POST['dathang']) {
                if (isset($_SESSION['user'])) {
                    $iduser = $_SESSION['user']['id'];
                } else {
                    $id = 0;
                }
                $name = $_POST['name'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $pttt = $_POST['pttt'];
                $ngaydathang = date('h:i:sa d/m/Y');
                $tongdonhang = tongdonhang();

                $idbill = insert_bill(
                    $iduser,
                    $name,
                    $email,
                    $address,
                    $tel,
                    $pttt,
                    $ngaydathang,
                    $tongdonhang
                );

                // insert into cart : session['mycart']
                foreach ($_SESSION['mycart'] as $cart) {
                    insert_cart(
                        $_SESSION['user']['id'],
                        $cart[0],
                        $cart[2],
                        $cart[1],
                        $cart[3],
                        $cart[4],
                        $cart[5],
                        $idbill
                    );
                }
                $_SESSION['cart'] = [];
            }
            $bill = loadone_bill($idbill);
            $billct = loadall_cart($idbill);

            include 'view/cart/billconfirm.php';
            break;
        default:
            include 'view/home.php';
            break;
    }
} else {
    include 'view/home.php';
}

include 'view/footer.php';

?>
