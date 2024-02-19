<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
            <div class="boxtitle">GIỎ HÀNG</div>
            <div class="row boxcontent cart">
                <table style="text-align: center;" class="row2">
                    <?php viewcart(1); ?>
                </table>
            </div>
        </div>

        <div class="row mb bill">
            <a href="index.php?act=bill"><input type="button" value="TIẾP TỤC ĐẶT HÀNG"></a>
            <a href="index.php?act=delcart"><input type="button" value="XOÁ GIỎ HÀNG"></a>
        </div>
    </div>
    <div class="boxphai">
        <?php include 'view/boxright.php'; ?>
    </div>
</div>