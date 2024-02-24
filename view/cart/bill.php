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
					<!-- <h1 class="title-clickpt">Chọn Phương Thức Thanh Toán</h1> -->
                    <label>
                        <input type="checkbox" name="payment_method" value="online" id="onlineCheckbox"> Thanh toán Online
                    </label>
                    <br>
                    <label>
                        <input type="checkbox" name="payment_method" value="direct" id="directCheckbox"> Thanh toán khi nhận hàng
                    </label>
					<div id="paypal-form" style="display: none;">
                    <h1>
                        <?php if (isset($selectBox) && $selectBox != "") echo $selectBox; ?>
                    </h1>
                    <div id="paypal-button-container"></div>
                </div>
				</div>
			</div>
			<!-- Thông tin giỏ hàng -->
			<div class="row mb">
				<div class="boxtitle">THÔNG TIN GIỎ HÀNG</div>
				<div class="row boxcontent cart">
					<table style="text-align: center;" class="row boxcontent cart">
						<?php viewcart2(0); ?>
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
<script src="https://www.paypal.com/sdk/js?client-id=AcsHobYlloCKHiAaC05umlZGMWsOOIIXx3VxHjnp7ABcDDXRvbuj-g3IoALDloki_pcF1S-DYBy5pmn5">
</script>

<script>
    const onlineCheckbox = document.getElementById('onlineCheckbox');
    const directCheckbox = document.getElementById('directCheckbox');
    const paypalForm = document.getElementById('paypal-form');

    onlineCheckbox.addEventListener('change', function() {
        if (onlineCheckbox.checked) {
            // If online payment is selected, display the PayPal form
            paypalForm.style.display = 'block';
            // Uncheck the direct payment checkbox
            directCheckbox.checked = false;
        } else {
            // If online payment is not selected, hide the PayPal form
            paypalForm.style.display = 'none';
        }
    });

    directCheckbox.addEventListener('change', function() {
        if (directCheckbox.checked) {
            // If direct payment is selected, hide the PayPal form
            paypalForm.style.display = 'none';
            // Uncheck the online payment checkbox
            onlineCheckbox.checked = false;
        }
    });


    paypal.Buttons({
        createOrder: function(data, actions) {
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: '20.00'
                    }
                }]
            });
        },
        onApprove: function(data, actions) {
            return actions.order.capture().then(function(details) {
                alert('Thanh toán thành công!\nID đơn hàng: ' + details.id);
            });
        }
    }).render('#paypal-button-container');
</script>