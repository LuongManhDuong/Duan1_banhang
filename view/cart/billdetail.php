<div class="row">
	<div class="boxtrai mr">
		<div class="row">
			<div class="boxtitle">Chi tiết đơn hàng</div>
			<div class="row boxcontent cart " style="margin-top: 10px;">
				<table style="text-align: center;" class="row">
					<tr>
						<th>Tên sản phẩm</th>
						<th>Giá sản phẩm</th>
						<th>Số lượng</th>
						<th>Hình ảnh</th>
					</tr>
					<?php $tongtien = 0; ?>
					<?php if (is_array($listprd)) {
						foreach ($listprd as $bill) {
							extract($bill);
							$tongtien += $bill['price'] * $bill['soluong'];
							echo '<tr>
                                            <td>' .
								$bill['name'] .
								'</td>
                                            <td>' .
								$bill['price'] .
								'</td>
								<td>' .
								$bill['soluong'] .
								'</td>
                                            <td>' .
								'<img src="' . $img_path . $bill['img'] . '" height="80px">' .
								'</td>
                                        </tr>';
						}
					} ?>
				</table>
				<p>Tổng tiền: <?= $tongtien ?></p>
			</div>
		</div>
	</div>
	<div class="boxphai">
		<?php include 'view/boxright.php'; ?>
	</div>
</div>