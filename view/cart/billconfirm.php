<div class="row">
    <div class="row mb ">
        <div class="boxtrai mr">
            <div class="row mb">
                <div class="boxtitle">CẢM ƠN</div>
                <div class="boxconten row" style="text-align: center;">
                    <h2>Cảm ơn bạn đã tin tưởng và ủng hộ shop !</h2>
                </div>
            </div>
            <?php if (isset($bill) && is_array($bill)) {
                extract($bill);
            } ?>
            <div class="row mb boxconten3 lmd ">
                <div class="boxtitle">THÔNG TIN ĐƠN HÀNG</div>
                <li>- Mã đơn hàng: DAM- <?= $bill['id'] ?></li>
                <li>- Ngày đặt hàng: <?= $bill['ngaydathang'] ?></li>
                <li>- Tổng đơn hàng: <?= $bill['total'] ?></li>
                <li>- Phương thức thanh toán: <?= $bill['bill_pttt'] ?></li>
            </div>
            <div class="row mb">
                <div class="boxtitle">THÔNG TIN ĐẶT HÀNG</div>
                <div class="boxconten row">
                    <table>
                        <tr>
                            <td>Người đặt hang: </td>
                            <td><?= $bill['bill_name'] ?></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ: </td>
                            <td><?= $bill['bill_address'] ?></td>
                        </tr>
                        <tr>
                            <td>Email: </td>
                            <td><?= $bill['bill_email'] ?></td>
                        </tr>
                        <tr>
                            <td>Điện thoại: </td>
                            <td><?= $bill['bill_tel'] ?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row mb">
                <div class="boxtitle">THÔNG TIN GIỎ HÀNG</div>
                <div style="text-align: center;" class="row boxcontent cart">
                    <table class="row">
                        <?php viewcart(0); ?>
                    </table>
                </div>
            </div>

            <div class="row mb ">
                <div class="boxtitle ">CHI TIẾT ĐƠN HÀNG</div>
                <div style="text-align: center;" class="row2 boxcontent cart">
                    <table class="row2">
                        <?php bill_chi_tiet($billct); ?>
                    </table>
                </div>
            </div>


        </div>
        <div class="boxphai">
            <?php include 'view/boxright.php'; ?>
        </div>


    </div>
</div>