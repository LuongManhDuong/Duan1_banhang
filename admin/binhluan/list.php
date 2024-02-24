<div class="row">
	<div class="row formtilte">
		<h1>DANH SÁCH BÌNH LUẬN</h1>
	</div>
	<div class="row formconten">
		<div class="row mb10 formdslh">
			<table>
				<tr>
					<th></th>
					<th>ID</th>
					<th>NỘI DUNG BÌNH LUẬN</th>
					<th>SẢN PHẨM</th>
					<th>TÀI KHOẢN</th>
					<th>NGÀY BÌNH LUẬN</th>
					<th></th>
				</tr>

				<?php
				function getProductName($productId, $conn) {
					$sql = "SELECT name FROM sanpham WHERE id = ?";
					$stmt = $conn->prepare($sql);
					$stmt->execute([$productId]);
					$row = $stmt->fetch(PDO::FETCH_ASSOC);
					
					if ($row) {
						return $row['name']; 
					} else {
						return "Không có tên sản phẩm";
					}
				}

				foreach ($listbinhluan as $binhluan) {
					extract($binhluan);
					$xoabl = "index.php?act=xoabl&id=" . $id;
					$productName = getProductName($idpro, pdo_get_connection());
					echo '<tr>
						<td><input type="checkbox" name="" id=""></td>
						<td>' . $id . '</td>
						<td>' . $noidung . '</td>
						<td>' . $productName . '</td> <!-- Hiển thị tên sản phẩm -->
						<td>' . $user . '</td>
						<td>' . $ngaydang . '</td>
						<td>
							<a href="' . $xoabl . '"><input type="button" value="Xoá"></a>
						</td>
						</tr>';
				}

?>
			</table>
		</div>
		<!-- <div class="row mb10">
			<input type="submit" value="Chọn tất cả">
			<input type="reset" value="Bỏ chọn tất cả">
			<input type="button" value="Xoá các mục đã chọn">
		</div> -->
	</div>
</div>