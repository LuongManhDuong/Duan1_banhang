<div class="row ">
    <div class="boxtitle">LIÊN HỆ</div>
    <div class="boxconten row mb10">

        <section class="faq">
            <h2>Câu hỏi thường gặp</h2>
            <div class="question">
                <h3>1. Làm thế nào để chăm sóc hoa để chúng sống lâu?</h3>
                <p>Để chăm sóc hoa và giữ chúng sống lâu, bạn cần: <br>
                    Tưới nước đều đặn nhưng không quá nhiều, tránh làm đọng nước ở đáy chậu.
                    <br>-- Đặt hoa ở nơi có ánh sáng mặt trời nhẹ, tránh ánh nắng trực tiếp vào buổi trưa.
                    <br>-- Loại bỏ các lá hoa và hoa héo úa để kích thích sự phát triển của hoa mới.
                    <br>-- Thay đổi nước và làm sạch chậu định kỳ để tránh vi khuẩn và nấm mốc.
                    <br>-- Sử dụng phân hoa cần thiết để cung cấp dưỡng chất cho cây.
                </p>
            </div>
            <div class="question">
                <h3>2. Tôi có thể đặt hàng hoa như thế nào?</h3>
                <p> Để đặt hàng hoa, bạn có thể thực hiện các bước sau:
                    <br>-- Truy cập vào trang web của chúng tôi và chọn sản phẩm mà bạn muốn mua.
                    <br>-- Thêm sản phẩm vào giỏ hàng và tiến hành thanh toán thông qua các phương thức thanh toán được
                    hỗ trợ.
                    <br>-- Nhập thông tin giao hàng và thanh toán, sau đó hoàn tất đơn hàng.
                    <br>-- Sau khi đơn hàng được xác nhận, chúng tôi sẽ tiến hành giao hàng đến địa chỉ mà bạn đã cung
                    cấp.
                </p>
            </div>
            <!-- Thêm các câu hỏi và câu trả lời khác -->
        </section>
        <section class="ask-question">
            <h2>Gửi câu hỏi của bạn</h2>
            <form action="submit_question.php" method="POST" id="questionForm" onsubmit="submitForm(event)">
                <label for="name">Họ và tên:</label><br>
                <input type="text" id="name" name="name" required><br>
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" required><br>
                <label for="question">Câu hỏi:</label><br>
                <textarea id="question" name="question" rows="4" required></textarea><br>
                <button type="submit">Gửi câu hỏi</button>
            </form>

            <script>
            function submitForm(event) {
                event.preventDefault(); // ngăn chặn hành vi mặc định của trình duyệt khi gửi form
            }
            </script>
        </section>
    </div>
</div>