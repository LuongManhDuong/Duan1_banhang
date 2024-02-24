<div class="row mb">
	<div style="text-align: center;" class="row" class="boxtrai mr">
		<div  class="row mb">
			<div class="boxtitle">DANH SÁCH ĐƠN HÀNG</div>
			<!-- <form action="index.php?act=listbill" method="post">
				<input type="text" name="kyw" placeholder="Nhập thêm mã đơn hàng">
				<input type="submit" name="listok" value="GO">
			</form> -->
			<div class="row formconten">
				<div class="row mb10 formdslh">
					<table>
						<tr>
							<th>Mã đơn</th>
							<th>Khách hàng</th>
							<th>Địa chỉ</th>
							<th>Số lượng</th>
							<th>Giá trị</th>
							<th>Trạng thái</th>
							<th>Thời gian</th>
							<th>Hành động</th>
						</tr>
						<?php
						foreach ($listbill as $bill) {
							extract($bill);
							$kh = $bill['bill_name'] . '
                            <br>' . $bill["bill_email"] . '
                            <br>' . $bill["bill_address"] . '
                            <br>' . $bill["bill_tel"] . '';
							$countsp = loadall_cart_count($bill["id"]);
							$ttdh = get_ttdh($bill["bill_status"]);
							echo '<tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>DAM-' . $bill['id'] . '</td>
                                <td>' . $kh . '</td>
                                <td>' . $countsp . '</td>
                                <td>' . $bill["total"] . '</td>
                                <td>' . $ttdh . '</td>
                                <td>' . $bill["ngaydathang"] . '</td>
                                <td>
									<a href="index.php?act=editbill&id=' . $bill['id'] . '"><input type="button" value="Sửa" id=""></a>
                                    <input type="button" value="Xoá" id="">
									<a  href="index.php?act=billct&id=' . $bill['id'] . '"><input type="button" value="Xem chi tiết" id="" ></a>
                                </td>
                            </tr>';
						}
						?>


					</table>
				</div>
			</div>
		</div>

		<!-- <div class="row mb10">
			<input type="button" value="Chọn tất cả">
			<input type="button" value="Bỏ chọn tất cả">
			<input type="button" value="Xoá các mục đã chọn">
			<input type="text" value="Nhập thêm mã đơn hàng"><a href="index.php?act=addsp"><button>GO</button></a>
		</div> -->
	</div>