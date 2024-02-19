<div class="row mb  ">
    <div class="boxtrai mr  ">
        <div class="row">
            <div class="banner">
                <!-- Slideshow container -->
                <div class="slideshow-container">

                    <!-- Full-width images with number and caption text -->
                    <div class="mySlides fade">
                        <div class="numbertext">1 / 3</div>
                        <img src="view/anh/300.jpg" style="width:100%">
                        <!-- <div class="text">Caption Text</div> -->
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">2 / 3</div>
                        <img src="view/anh/200.jpg" style="width:100%">
                        <!-- <div class="text">Caption Two</div> -->
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">3 / 3</div>
                        <img src="view/anh/100.jpg" style="width:100%">
                        <!-- <div class="text">Caption Three</div> -->
                    </div>

                    <!-- Next and previous buttons -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <br>

                <!-- The dots/circles -->
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $i = 0;
            foreach ($spnew as $sp) {
                extract($sp);
                $linksp = 'index.php?act=sanphamct&idsp=' . $id;
                $hinh = $img_path . $img;
                if ($i == 2 || $i == 5 || $i == 8) {
                    $mr = '';
                } else {
                    $mr = 'mr';
                }
                echo '<div class="boxsp ' .
                    $mr .
                    ' ">
                                    <div style="margin-left: 15px;" class="row img "><a href="' .
                    $linksp .
                    '"><img src="' .
                    $hinh .
                    '" alt=""></a></div>
                                    <p>$' .
                    $price .
                    '</p>
                                    <a href="' .
                    $linksp .
                    '">' .
                    $name .
                    '</a>
                                    <div class="row mb btnaddtocart">
                                        <form action="index.php?act=addtocart" method="post">
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
                                        </form>
                                    </div>
                                </div>';
                $i += 1;
            }
            ?>
        </div>
    </div>

    <!-- end trai -->
    <div class="boxphai">
        <?php include 'boxright.php'; ?>
    </div>
    <!-- end phai -->
</div>