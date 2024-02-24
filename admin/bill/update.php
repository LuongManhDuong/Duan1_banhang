<?php
if (is_array($bill)) {
	extract($bill);
}
?>
<div class="row">
	<div class="row formtilte">
		<h1>Cập nhật trạng thái đơn hàng</h1>
	</div>
	<div class="row formconten">
		<form action="index.php?act=updatebill" method="post">
			<div class="row mb10">
				Trạng thái: <br>
				<select name="trangthai" id="">
					<option value="0" <?php if (isset($trangthai) && $trangthai == 0) echo "selected"; ?>>Đơn hàng mới </option>
					<option value="1" <?php if (isset($trangthai) && $trangthai == 1) echo "selected"; ?>>Đăng xử lý </option>
					<option value="2" <?php if (isset($trangthai) && $trangthai == 2) echo "selected"; ?>>Đăng giao hàng </option>
					<option value="3" <?php if (isset($trangthai) && $trangthai == 3) echo "selected"; ?>>Đơn hoàn thành </option>
					<option value="4" <?php if (isset($trangthai) && $trangthai == 4) echo "selected"; ?>>Đơn hủy </option>
				</select>
			</div>
			<div class="row mb10">
				<input type="hidden" name="id" value="<?php if (isset($id) && $id > 0) echo $id; ?>">
				<input type="submit" name="capnhap" value="CẬP NHẬP">
				<input type="reset" value="NHẬP LẠI">
				<a href="index.php?act=listbill"><input type="button" value="DANH SÁCH"></a>
			</div>
			<?php
			if (isset($thongbao) && ($thongbao != ""))
				echo $thongbao;
			?>
		</form>
	</div>
</div>
</div>