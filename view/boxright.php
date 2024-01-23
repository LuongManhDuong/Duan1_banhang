
                <div class="row mb ">
                    <div style="border-top-left-radius: 10px;
                    border-top-right-radius: 10px;" class="boxtitle">TÀI KHOẢN</div>
                    <div class="boxconten formtaikhoan">
                        <?php 
                            if(isset($_SESSION['user'])){
                                extract($_SESSION['user']);
                        ?>
                         <div class="row mb10 ">
                                Xin chào <br>
                                <?=$user?>
                            </div>
                            <div class="row mb10">
                            <li>
                                <a href="index.php?act=mybill">Đơn hàng của tôi</a>
                            </li>
                            <li>
                                <a href="index.php?act=quenmk">Quên mật khẩu</a>
                            </li>
                            <li>
                                <a href="index.php?act=edit_taikhoan">Cập nhập tài khoản</a>
                            </li>

                 <?php 
                    if($role == 1) {
                   ?>
                            <li>
                                <a href="admin/index.php">Đăng nhập Admin</a>
                            </li>
                <?php } ?>
                            <li>
                                <a href="index.php?act=thoat">Thoát</a>
                            </li>
                            </div>
                        <?php
                            }else{

                        ?>
                        <form action="index.php?act=dangnhap" method="post">
                            <div class="row mb10 ">
                                Tên đăng nhập <br>
                            <input type="text" name="user" >
                            </div>
                           <div class="row mb10">
                                Mật khẩu <br>
                            <input type="password" name="pass" >
                           </div>
                           <div class="row mb10">
                            <input type="checkbox" name="" >Ghi nhớ tài khoản?
                           </div>
                            <div class="row mb10">
                                <input type="submit" value="Đăng nhập" name="dangnhap">
                            </div>
                        </form>
                        <li>
                            <a href="#">Quên mật khẩu</a>
                        </li>
                        <li>
                            <a href="index.php?act=dangky">Đăng ký thành viên</a>
                        </li>
                        <?php } ?>
                    </div>
                    </div>
                    <div class="row mb ">
                    <div style="border-top-left-radius: 10px;
                    border-top-right-radius: 10px;" class="boxtitle">DANH MỤC</div>
                    <div class="boxconten2 menudoc ">
                        <ul>
                            <?php 
                                foreach ($dsdm as $dm) {
                                    extract($dm);
                                    $linkdm="index.php?act=sanpham&iddm=".$id;
                                    echo '<li>
                                            <a href="'.$linkdm.'">'.$name.'</a>
                                        </li>';
                                }
                            ?>
                            <!-- <li><a href="#">Bó Hoa</a></li>
                            <li><a href="#">Kệ Hoa</a></li>
                            <li><a href="#">Bình Hoa</a></li>
                            <li><a href="#">Giỏ Hoa</a></li>
    
                            <li><a href="#">Bó Hoa</a></li>
                            <li><a href="#">Kệ Hoa</a></li>
                            <li><a href="#">Bình Hoa</a></li>
                            <li><a href="#">Giỏ Hoa</a></li> -->
                        </ul>
                    </div>
                    <div class="boxfooter searchbox">
                        <form action="index.php?act=sanpham" method="post">
                            <input type="text" name="kyw" >
                            <input type="submit" name="timkiem" value="Tìm kiếm">
                        </form>
                    </div>
                    </div>
                    <div  class="row ">
                    <div style="border-top-left-radius: 10px;
                    border-top-right-radius: 10px;" class="boxtitle">TOP 10 YÊU THÍCH</div>
                    <div class="boxconten row">
                        <?php 
                            foreach ($dstop10 as $sp) {
                                extract($sp);
                                $img = $img_path.$img;
                                $linksp="index.php?act=sanphamct&idsp=".$id;
                                echo '<div class="row mb10 top10">
                                <a href="'.$linksp.'"><img src="'.$img.'" alt=""></a>
                                    <a href="'.$linksp.'">'.$name.'</a>
                                 </div>';
                            }
                        ?>
                        <!-- <div class="row mb10 top10">
                            <img src="view/anh/2.jpg" alt="">
                            <a href="">Hoa sieu dep</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/anh/3.jpg" alt="">
                            <a href="">Hoa khai truong</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/anh/4.jpg" alt="">
                            <a href="">Hoa baby</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/anh/5.jpg" alt="">
                            <a href="">Hoa nho xinh</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/anh/6.jpg" alt="">
                            <a href="">Hoa de ban</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/anh/2.jpg" alt="">
                            <a href="">Hoa sieu dep</a>
                        </div> -->
                      
                    </div>
                </div>