<div class="row">
	<div class="boxtrai mr">
		<div  class="row boxcontent">
			<div class="boxtitle">Chi tiết đơn hàng</div>
			<div  class="row boxcontent cart " style="margin-top: 10px;">
				<div class="row formconten">
					<div class="row mb10 formdslh">
						<table >
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
									$hinhpath = "../upload/" . $bill['img'];
									$hinh = "";
									if (is_file($hinhpath)) {
										$hinh = "<img src='" . $hinhpath . "' height= '80'>";
									} else {
										$hinh = "no photo";
									}
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
										'' . $hinh . '' .
										'</td>
                                        </tr>';
								}
							} ?>
						</table>
						<p>Tổng tiền: <?= $tongtien ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>