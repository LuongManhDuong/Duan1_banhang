<div class="row mb">
    <div class="boxtrai mr">
        <form action="index.php?act=billconfirm" method="post">
            <!-- Thông tin đặt hàng -->
            <div class="row mb">
                <div class="boxtitle">THÔNG TIN ĐẶT HÀNG</div>
                <div class="row boxcontent billform">
                    <table>
                        <?php if (isset($_SESSION['user'])) {
                            $user = $_SESSION['user']['user'];
                            $address = $_SESSION['user']['address'];
                            $email = $_SESSION['user']['email'];
                            $tel = $_SESSION['user']['tel'];
                        } else {
                            $name = '';
                            $address = '';
                            $email = '';
                            $tel = '';
                        } ?>
                        <tr>
                            <td>Người đặt hàng</td>
                            <td><input type="text" name="name" value="<?= $user ?>"></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ</td>
                            <td><input type="text" name="address" value="<?= $address ?>"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" name="email" value="<?= $email ?>"></td>
                        </tr>
                        <tr>
                            <td>Điện thoại</td>
                            <td><input type="text" name="tel" value="<?= $tel ?>"></td>
                        </tr>
                    </table>
                </div>
            </div>

            <!-- Phương thức thanh toán -->
            <div class="row mb">
                <div class="boxtitle">PHƯƠNG THỨC THANH TOÁN</div>
                <div class="row boxcontent">
                    <table>
                        <tr>
                            <td><input type="radio" name="pttt" value="online">Thanh toán Online</td>
                            <td><input type="radio" name="pttt" value="paypal">Thanh toán khi nhận hàng</td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- Thông tin giỏ hàng -->
            <div class="row mb">
                <div class="boxtitle">THÔNG TIN GIỎ HÀNG</div>
                <div class="row boxcontent cart">
                    <table style="text-align: center;" class="row boxcontent cart">
                        <?php viewcart(0); ?>
                    </table>
                </div>
            </div>
            <!-- Button đặt hàng -->
            <div class="row mb bill">
                <input type="submit" value="ĐỒNG Ý ĐẶT HÀNG" name="dathang">
            </div>
        </form>
    </div>
    <div class="boxphai">
        <?php include 'view/boxright.php'; ?>
    </div>
</div>