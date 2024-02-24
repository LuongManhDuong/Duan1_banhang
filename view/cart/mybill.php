<div class="row">
	<div class="boxtrai mr">
		<div class="row">
			<div class="boxtitle">ĐƠN HÀNG CỦA BẠN</div>
			<div class="row boxcontent cart">
				<table style="text-align: center;" class="row">
					<tr>
						<th>Mã đơn hàng</th>
						<th>Ngày đặt</th>
						<th>Giá tiền</th>
						<th>Trạng thái</th>
						<th>Hành động</th>
						<?php  ?>
					</tr>
					<?php if (is_array($listbill)) {
						foreach ($listbill as $bill) {
							extract($bill);
							$ttdh = get_ttdh($bill['bill_status']);
							$countsp = loadall_cart_count($bill['id']);
							echo '<tr>
                                <td>DAM - ' .$bill['id'] .'</td>
                                <td>' .$bill['ngaydathang'] .'</td>
                                 <td>' .$bill['total'] .'</td>
                                <td>' .$ttdh .'</td> 
								<td style="text-align:center">';
							if ($ttdh != 'Đã hủy') {
								echo '<a href="index.php?act=delbill&id=' . $bill['id'] . '"><input type="button" value="Hủy đơn"></a>
								<a href="index.php?act=detailbill&id=' . $bill['id'] . '"><input type="button" value="Xem"></a>
								</td> </tr>
								</td>';
							} else {
								echo '<a  href="index.php?act=detailbill&id=' . $bill['id'] . '"><input type="button" value="Xem"></a>
								</td> </tr>';
							}
						}
					} ?>
				</table>
			</div>
		</div>
	</div>
	<div class="boxphai">
		<?php include 'view/boxright.php'; ?>
	</div>
</div>