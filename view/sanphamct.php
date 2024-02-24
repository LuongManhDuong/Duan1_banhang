<div class="row mb ">
	<div class="boxtrai mr ">
		<div class="row mb ">
			<?php extract($onesp); ?>
			<div class="boxtitle"><?= $name ?></div>
			<div class="boxconten mb row">
				<?php
				$imgs = $img_path . $img;
				echo '<div class="row mb spct"><img src="' . $imgs . '"></div>';
				echo '<h4>Mô tả: </h4>';
				echo '<p style="font-size: 13px; color: red;">' .$mota .'</p>';
				// echo '<h4>Thông tin chi tiết:</h4>';
				// echo '<ul>';
				echo '<h4>Giá:</h4>';
				echo '<p style="font-size: 13px;color: red;"> $' .$price .'</p>';
				echo '<h4>Lượt xem:' .$luotxem .'</h4>';
				echo '<h4><strong>Đánh giá từ khách hàng:</strong> Tốt</h4>';
				echo '                                       <form action="index.php?act=addtocart" method="post">
								<input type="hidden" name="id" value="' .
					$id .
					'">
								<input type="hidden" name="name" value="' .
					$name .
					'">
								<input type="hidden" name="img" value="' .
					$img .
					'">
								<input type="hidden" name="price" value="' .
					$price .
					'">
								<input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
						</form>';
				// Thêm các thông tin khác tương tự tại đây
				echo '</ul>';
				?>
			</div>

			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
			<script>
				$(document).ready(function() {
					$("#binhluan").load("view/binhluan/binhluanform.php", {
						idpro: <?= $id ?>
					});
				});
			</script>
			<div class="row" id="binhluan">

			</div>
			<div class="row mb ">
				<div class="boxtitle">SẢN PHẨM CÙNG LOẠI</div>
				<div class="boxconten row">
					<?php foreach ($sp_cung_loai as $sp_cung_loai) {
						extract($sp_cung_loai);
						$linksp = 'index.php?act=sanphamct&sp=' . $id;
						echo '<li><a href="' .
							$linksp .
							'">' .
							$name .
							'</a></li>';
					} ?>

				</div>
			</div>
		</div>
	</div>

	<!-- end trai -->

	<div class="boxphai ">
		<?php include 'boxright.php'; ?>
	</div>
</div>