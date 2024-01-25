
<div class="row">
            <div class="row formtilte">
                <h1>DANH SÁCH TÀI KHOẢN</h1>
            </div>
            <div class="row formconten">
                <div class="row mb10 formdslh">
                   <table>
                        <tr>
                            <th></th>
                            <th>ID</th>
                            <th>NỘI DUNG BÌNH LUẬN</th>
                            <th>ID USER</th>
                            <th>ID PRO</th>
                            <th>NGÀY BÌNH LUẬN</th>
                            <th></th>
                        </tr>

                        <?php
                            foreach ($listbinhluan as $binhluan) {
                                extract($binhluan);
                                $suabl = "index.php?act=suabl&id=".$id;
                                $xoabl = "index.php?act=xoabl&id=".$id;
                                echo '<tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>'.$id.'</td>
                                    <td>'.$noidung.'</td>
                                    <td>'.$iduser.'</td>
                                    <td>'.$idpro.'</td>
                                    <td>'.$ngaydang.'</td>
            
                                    <td>
                                        <a href="'.$suabl.'"><input type="button" value="Sửa"></a> 
                                        <a href="'.$xoabl.'"><input type="button" value="Xoá"></a>
                                    </td>
                                    </tr>';
                            }
                        ?>

                         
                   </table>
                </div>
                <div class="row mb10">
                    <input type="submit" value="Chọn tất cả">   
                    <input type="reset" value="Bỏ chọn tất cả" >   
                    <input type="button" value="Xoá các mục đã chọn" >   
                </div>
            </div>
        </div>