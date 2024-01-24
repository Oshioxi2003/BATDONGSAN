<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Tin Tức</title>
    <style>
    body {
        font-family: Arial, sans-serif;
    }

    .news-article {
        border: 1px solid #ccc;
        margin-bottom: 20px;
        padding: 10px;
        display: flex;
    }

    .news-article img {
        width: 150px;
        height: 100px;
        margin-right: 10px;
    }

    .news-article div {
        flex-grow: 1;
    }

    .news-article h2 {
        margin: 0;
        font-size: 18px;
    }

    .news-article p {
        font-size: 14px;
        line-height: 1.6;
        color: #666;
    }
    </style>
</head>

<body>

    <section class="news-section">
        <div class="container ">
            <div class="row clearfix">
                <div class="col-8 col-left ">
                    <!-- Bài Tin Tức 1 -->
                    <div class="news-article">
                        <img src="../assets/images/location_hn.jpg" alt="Thumbnail for news 1">
                        <div>
                            <h2>Thủ tục thuế kho chính xác dành cho người nước ngoài</h2>
                            <p>Thuế kho chính xác dành cho người nước ngoài. Theo quy định tại Điều 119 Luật Nhà
                                ở...</p>
                        </div>
                    </div>

                    <!-- Bài Tin Tức 2 -->
                    <div class="news-article">
                        <img src="../assets/images/location_hn.jpg" alt="Thumbnail for news 2">
                        <div>
                            <h2>Cho thuê kho có cần đăng ký giấy phép kinh doanh hay không?</h2>
                            <p>Cho thuê kho cần đăng ký giấy phép kinh doanh không? Đăng ký giấy phép kinh doanh
                                là gì? Giấy
                                phép kinh doanh là một loại giấy tờ pháp lý do cơ quan...</p>
                        </div>
                    </div>
                    <!-- Bài Tin Tức 3 -->
                    <div class="news-article">
                        <img src="../assets/images/location_hn.jpg" alt="Thumbnail for news 3">
                        <div>
                            <h2>Kinh doanh cho thuê kho cần đóng những loại thuế nào?</h2>
                            <p>Cho thuê kho cần nộp những loại phí nào? Mô hình kinh doanh cho thuê kho Kinh
                                doanh cho
                                thuê kho là hoạt động thương mại, trong đó chủ...</p>
                        </div>
                    </div>
                </div>
                <?php include dirname(__DIR__) . '/home/clearfix-right.php';?>          
              </div>
        </div>
    </section>
</body>

</html>