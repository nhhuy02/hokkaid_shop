<?php require('layout/header.php') ?>
<style>
    main {
        font-family: "Encode Sans SC", sans-serif;
    }

    .row img {
        max-width: 100%;
    }
</style>
<main>
    <div class="container">
        <div id="ant-layout">
            <section class="search-quan">
                <i class="fas fa-search"></i>
                <form action="thucdon.php" method="GET">
                    <input name="search" type="text" placeholder="Tìm món hoặc thức ăn">
                </form>
            </section>
            <section class="main">
                <div class="row">
                    <h3>Hokkaid có mấy chi nhánh?</h3>
                    <p>Hokkaid hiện tạo có 4 chi nhánh, chi nhánh 1 ở Hà Nội: 33, Bạch Mai, Hà Nội, chi nhash 2 ở Thành Phố Hồ Chí Minh: 19, Quận 1, Thành Phố Hồ Chí Minh, Chi nhánh 3 ở Đà Nẵng: 80, Tôn Thất Thuyết, Đà Nẵng, Chi nhánh 4 ở Bắc Ninh: 01, Nguyễn Trãi, Bắc Ninh.</p>
                </div>
                <div class="row">
                    <h3>Hokkaid hoạt động như thế nào?</h3>
                    <p>Hokkaid hoạt động từ 7h đến 22h hằng ngày, tuỳ theo khu vực của bạn và thời gian mở cửa cụ thể của từng nhà hàng, quán ăn.</p>
                </div>
                <div class="row">
                    <img src="images/bg/GrabFood.jpg" alt="">

                    <h3>Hokkaid có hỗ trợ ship toàn quốc không</h3>
                    <p>Chúng tôi không hỗ trợ ship toàn quốc mà chỉ hỗ trợ ship quanh thành phố của chi nhánh quán, nhằm đảm bảo chất lượng dịch vụ.</p>
                </div>
                <div class="row">
                    <h3>Có thể thanh toán bằng hình thức nào?</h3>
                    <p>Hokkaid hỗ trợ hầu hết mọi hình thức thanh toán!</p>
                </div>
                <div class="row">
                    <h3>Chi phí được tính như thế nào?</h3>
                    <p>Chi phí hiển thị trên ứng dụng bao gồm chi phí của phần ăn theo đơn giá của nhà hàng và phí vận chuyển.</p>
                </div>
                <div class="row">
                    <h3>Tôi có thể tìm thấy những nhà hàng, quán ăn nào trong khu vực của mình?</h3>
                    <p>Danh sách nhà hàng, quán ăn được sắp xếp dựa theo khoảng cách và thời gian giao hàng dự kiến từ Địa chỉ giao thức ăn đến vị trí của bạn.</p>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3820.280539447332!2d107.29400661486774!3d16.762712588455788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x80f122cab2275a42!2zTmd1eeG7hW4gxJDEg25nIFRow6BuaA!5e0!3m2!1svi!2s!4v1629007864673!5m2!1svi!2s" width="550" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/jJoFCFcJHsI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </section>
        </div>
    </div>
</main>
<?php require('layout/footer.php') ?>