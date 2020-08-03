<?php
    include_once '../astc.config.php';

    $titlePage = 'Aptech | PHP';

    $metaDescription = '3 sai lầm phổ biến khi học lập trình Web bằng PHP. 3 kinh nghiệm để học lập trình PHP, lập trình Web hiệu quả cho người mới bắt đầu. Học PHP cùng Chuyên gia Công nghệ, nhận bộ tài liệu tự học thiết kế Web PHP miễn phí. Học thiết kế Website doanh nghiệp, bán hàng, tuyển dụng bằng lập trình PHP.';
    $metaKeywords = 'học php, hoc php, lập trình php, lap trinh php, học lập trình php, khóa học php, khoa hoc php, php aptech, aptech, học php cơ bản, học thiết kế website, khóa học thiết kế web, thiết kế web bằng php, thiết kế web php, lập trình web, lập trình web php';

    $feelStd = json_decode(file_get_contents("../assets/data/feel-std.json"));
    $quoteCom = json_decode(file_get_contents("../assets/data/quote-com.json"));
    
    $formSubmitRedirect = BASE_URL.'/php/dang-ky-thanh-cong';
    $formSubmitSubject = 'Đăng ký khóa học lập trình Web PHP';

    $fbComment = BASE_URL.'/php';
?>

<!DOCTYPE html>
<html>
<head>   
    <?php if (MODE == 'PROD') :?>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-20788510-60"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-20788510-60');
        </script>
    <?php endif ?>
    
	<meta charset="utf-8">
    <meta name="description" content="<?php echo $metaDescription ?>">
    <meta name="keywords" content="<?php echo $metaKeywords ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php echo $titlePage ?></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/master<?php echo FILE_EXT ?>.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/style<?php echo FILE_EXT ?>.css">

</head>
<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white pl-4">
        <a class="navbar-brand" href="https://aptechvietnam.com.vn/" target="_blank">
            <img src="../assets/img/logo-min.png" class="mr-2">
            <!-- <img src="../assets/img/logo-second-min.png"> -->
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active px-lg-3">
                    <a class="nav-link text-uppercase font-600 px-0 link-scroll text-center" href="#">Giới thiệu</a>
                </li>
                <li class="nav-item px-lg-3">
                    <a class="nav-link text-uppercase font-600 px-0 link-scroll text-center" href="#section-2">Khóa học này dành cho ai</a>
                </li>
                <li class="nav-item px-lg-3">
                    <a class="nav-link text-uppercase font-600 px-0 link-scroll text-center" href="#regis-form">Tư vấn miễn phí</a>
                </li>
                <li class="nav-item pl-lg-3 pr-lg-0">
                    <div class="d-flex flex-nowrap justify-content-center py-3 py-lg-0">
                        <a class="nav-link p-0 nav-link-social mr-3" target="_blank" href="https://www.facebook.com/aptechvietnam.com.vn/">
                            <img src="../assets/img/icon-fb-min.png">
                        </a>
                        <a class="nav-link p-0 nav-link-social mr-3" target="_blank" href="https://www.youtube.com/user/aprotrainaptechvn">
                            <img src="../assets/img/icon-youtube-min.png">
                        </a>
                        <a class="btn regis-btn text-uppercase px-5 link-scroll font-600" href="#regis-form">Đăng ký</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Header -->

    <!-- Sections -->
    <section class="section-banner"> 
    	<img src="./assets/img/banner-PC_php-min.jpg" alt="" class="w-100">
    </section>

    <section class="section-1 py-5 bg-white">
        <h3 class="text-center text-bold text-main pb-4 px-5">NHỮNG LÍ DO BẠN PHẢI HỌC NGÔN NGỮ LẬP TRÌNH PHP NGAY HÔM NAY</h3>
        <div class="d-flex justify-content-center pt-3 align-items-center">
            <iframe src="https://www.youtube.com/embed/I-VEiZqVohQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <ul>
                <li class="text-bold mb-3">PHP là ngôn ngữ lập trình Web phổ biển nhất thế giới, thân thiện với người mới bắt đầu.</li>
                <li class="text-bold mb-3">Trên thế giới, cứ 10 website ra đời thì có 8 website chạy bằng PHP.</li>
                <li class="text-bold mb-3">Cơ hội việc làm rộng mở cả ở trong và ngoài nước.</li>
                <li class="text-bold mb-3">Mức lương của Lập trình viên PHP từ 800 - 1500$/tháng.</li>
            </ul>
        </div>
    </section>

    <section id="section-2" class="section-2 pt-5 px-5">
        <h3 class="text-uppercase text-white text-center text-bold pb-4">Khóa học này dành cho ai?</h3>
        <div class="d-flex sec-2 justify-content-center">
            <div class="text-center d-flex align-items-end px-3 flex-basis-40">
                <img class="w-100" src="./assets/img/Layer 67-min.png" alt="">
            </div>
            <div class="d-flex flex-column justify-content-center px-3 flex-basis-40 pb-4">
                <div class="box d-flex align-items-center mb-2">
                    <img src="./assets/img/sec2-t1-min.png" alt="">
                    <div class="text-white p-3">
                        <h4>Sinh viên CNTT</h4>
                        <p class="mb-0">Muốn học bài bản, có khả năng thực chiến tốt với PHP.</p>
                    </div>
                </div>
                <div class="box d-flex align-items-center mb-2">
                    <img src="./assets/img/sec2-t2-min.png" alt="">
                    <div class="text-white p-3">
                        <h4>Lập trình viên</h4>
                        <p class="mb-0">Đang làm việc tại các Doanh nghiệp, muốn bổ sung kiến thức và kỹ năng lập trình PHP để phục vụ cho công việc.</p>
                    </div>
                </div>
                <div class="box d-flex align-items-center mb-2">
                    <img src="./assets/img/sec2-t3-min.png" alt="">
                    <div class="text-white p-3">
                        <h4>Học sinh, sinh viên, người đi làm </h4>
                        <p class="mb-0">Mới bắt đầu tìm hiểu về lập trình. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-3 pt-5 bg-white">
        <h3 class="text-center text-main text-uppercase text-bold mb-4 px-5">Những sai lầm phổ biến khi học Lập trình Web PHP</h3>
        <div class="d-flex justify-content-center wrapper">
            <div class="flex-basis-40 d-flex justify-content-end align-items-end px-3">
                <img class="mw-100" src="./assets/img/sec-3img-min.png" alt="">
            </div>
            <div class="flex-basis-40 px-3 pb-5">
                <div class="d-flex align-items-center mb-3">
                    <img src="./assets/img/x-tick-min.png" alt="">
                    <span class="pl-3 text-bold">Không cẩn thận với cú pháp</span>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <img src="./assets/img/x-tick-min.png" alt="">
                    <span class="pl-3 text-bold">Viết code khó đọc, không rành mạch, bỏ qua các tiêu chuẩn viết code.</span>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <img src="./assets/img/x-tick-min.png" alt="">
                    <span class="pl-3 text-bold">Sử dụng bộ nhớ không hiệu quả</span>
                </div>
            </div>
        </div>
    </section>

    <section class="section-4 bg-sub py-5">
        <h3 class="text-center text-bold text-white text-uppercase px-5">03 kinh nghiệm học Lập trình web php</h3>
        <div class="d-flex justify-content-between px-3 flex-wrap">
            <div class="box pt-4 d-flex justify-content-center flex-grow-1">
                <img src="./assets/img/sec-4-1-min.png" alt="">
            </div>
            <div class="box pt-4 d-flex justify-content-center flex-grow-1">
                <img src="./assets/img/sec-4-2-min.png" alt="">
            </div>
            <div class="box pt-4 d-flex justify-content-center flex-grow-1">
                <img src="./assets/img/sec-4-3-min.png" alt="">
            </div>
        </div>
    </section>

    <section class="section-5 py-5 bg-main">
        <h3 class="text-center text-bold text-white px-5">05 LÝ DO CẦN HỌC KHÓA CHUYÊN GIA LẬP TRÌNH WEB PHP TẠI APTECH</h3>
        <div class="d-flex justify-content-center pt-3 flex-wrap">
            <div class="box">
                <div class="img-container"><img src="./assets/img/proffessor-min.png"></div>
                <p class="pt-3">
                    <span class="text-bold">Giảng viên là các Chuyên gia Công nghệ</span>
                    <br>
                    <small>Giúp sinh viên ứng dụng ngay kiến thức mới học vào thực tế</small>
                </p>
            </div>
            <div class="box">
                <div class="img-container"><img class="ml-2" src="./assets/img/time-min.png"></div>
                <p class="pt-3">
                    <span class="text-bold">Tiết kiệm thời gian học</span>
                    <br>
                    <small>Sinh viên ra trường có thể ứng tuyển ngay vào các Doanh nghiệp tuyển dụng.</small>
                </p>
            </div>
            <div class="box">
                <div class="img-container"><img src="./assets/img/reactjs-min.png"></div>
                <p class="pt-3">
                    <span class="text-bold">Áp dụng công nghệ mới nhất</span>
                    <br>
                    <small>Cập nhật chương trình 2020 của Aptech toàn cầu với các công nghệ Web mới nhất.</small>
                </p>
            </div>
            <div class="box">
                <div class="img-container"><img src="./assets/img/coder-min.png"></div>
                <p class="pt-3">
                    <span class="text-bold">Dự án thực tế</span>
                    <br>
                    <small>Học viên được tham gia dự án thực tế vào cuối kỳ dưới sự hướng dẫn trực tiếp của các giảng viên.</small>
                </p>
            </div>
            <div class="box">
                <div class="img-container"><img src="./assets/img/certificate-min.png"></div>
                <p class="pt-3">
                    <span class="text-bold">Chứng chỉ uy tín</span>
                    <br>
                    <small> Kết thúc khóa học học viên được nhận chứng chỉ <span class="text-bold">“Chuyên viên lập trình Web PHP”</span></small>
                </p>
            </div>
        </div>
    </section>

    <section class="section-6">
        <div class="d-flex justify-content-center align-items-center section-container py-3">
            <h5 class="m-0 text-bold text-white text-center">Hoàn thành khóa học, học viên được giới thiệu làm việc tại các Doanh nghiệp CNTT lớn</h5>
            <button class="btn rounded-pill bg-white text-bold px-4 py-0 ml-5" data-toggle="collapse" data-target="#detailCollapse">🡢 Xem chi tiết khóa học</button>
        </div>
        <div class="collapse py-4" id="detailCollapse">
            <div class="d-flex overflow-auto">
                <!-- <img src="./assets/img/course-detail.jpg"> -->
                <table class="table table-bordered m-auto">
                    <thead></thead>
                    <tbody>
                        <tr class="bg-white">
                            <td class="text-focused">HTML, CSS và Javascript</td>
                            <td>
                                <ul>
                                    <li>Các thẻ HTML cơ bản</li>
                                    <li>HTML5, CSS, Javascript</li>
                                    <li>Hệ quản trị cơ sở dữ liệu MySQL</li>
                                    <li>Hướng dẫn sử dụng CMS</li>
                                </ul>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-focused">PHP căn bản</td>
                            <td class="text-focused">Giới thiệu và làm quen với PHP</td>
                            <td></td>
                        </tr>
                        <tr class="bg-white">
                            <td></td>
                            <td>
                                <ul>
                                    <li>Toán tử trong PHP</li>
                                    <li>Biểu thức điều kiện và vòng lặp</li>
                                    <li>Các phương thức truyền dữ liệu</li>
                                    <li>Mảng và các hàm hỗ trợ mảng</li>
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    <li>Hàm trong PHP</li>
                                    <li>Thao tác với File</li>
                                    <li>Session & Cookie</li>
                                    <li>Tương tác PHP và MySQL</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="text-focused">Convert template Admin website Bán điện thoại di động</td>
                            <td></td>
                        </tr>
                        <tr class="bg-white">
                            <td></td>
                            <td>
                                <ul>
                                    <li>Xây dựng chức năng Đăng nhập & Đăng xuất</li>
                                    <li>Xây dựng trang chủ Admin</li>
                                    <li>Xây dựng chức năng Quản lí sản phẩm</li>
                                    <li>Xây dựng chức năng Thêm mới sản phẩm</li>
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    <li>Xây dựng chức năng Sửa thông tin sản phẩm</li>
                                    <li>Xây dựng chức năng Xóa sản phẩm</li>
                                    <li>Xây dựng chức năng Phân trang</li>
                                    <li>Tích hợp bộ công cụ soạn thảo CKEditor</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="text-focused">Convert template website Bán điện thoại di động</td>
                            <td></td>
                        </tr>
                        <tr class="bg-white">
                            <td></td>
                            <td>
                                <ul>
                                    <li>Xây dựng chức năng Hiển thị sản phẩm mới, sản phẩm đặc biệt</li>
                                    <li>Xây dựng chức năng Hiển thị danh mục sản phẩm</li>
                                    <li>Xây dựng Bộ lọc theo danh mục</li>
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    <li>Xây dựng chức năng Phân trang sản phẩm</li>
                                    <li>Xây dựng chức năng Chi tiết sản phẩm</li>
                                    <li>Xây dựng chức năng Giỏ hàng</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-focused">PHP nâng cao</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="bg-white">
                            <td></td>
                            <td>
                                <ul>
                                    <li>Lập trình hướng đối tượng trong PHP (PHP OOP 5)</li>
                                    <li>Lớp, Phương thức, Thuộc tính</li>
                                    <li>Magic method</li>
                                    <li>Xây dựng hệ thống theo mô hình MVC</li>
                                    <li>Tổng quan về Biểu thức chính quy (Regular Expression)</li>
                                    <li>Cache</li>
                                    <li>Cơ bản về htaccess</li>
                                    <li>Friendly URL</li>
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    <li>Giới thiệu về Yii (PHP Framework)</li>
                                    <li>Kiến trúc tổng quan của Yii</li>
                                    <li>Model trong Yii</li>
                                    <li>Controller trong Yii</li>
                                    <li>View trong Yii</li>
                                    <li>Các thành phần quan trọng khác</li>
                                    <li>Tập xây dựng trang tin tức, blog bằng Yii</li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="section-7 py-5 bg-white">
        <h3 class="text-bold text-center text-main px-5">BẠN SẼ LÀM ĐƯỢC GÌ SAU KHÓA HỌC "CHUYÊN GIA LẬP TRÌNH WEB PHP"</h3>
        <h6 class="text-center px-5">Hoàn thành khóa học Học viên có khả năng xây dựng các website Thương mại điện tử, website tin tức, tuyển dụng, website doanh nghiệp… tự tin ứng tuyển vào các Doanh nghiệp CNTT.</h6>

        <div class="d-flex justify-content-center pt-3 flex-wrap">
            <!-- List -->
            <div class="box m-2 d-flex flex-column">
                <div class="position-relative">
                    <img class="w-100" src="./assets/img/c1808g1-min.png">
                    <div class="detail-layer">
                        <a href="https://aptechvietnam.com.vn/thiet-ke-website-ban-hang-bagbag" class="px-4 btn text-white text-bold border-light rounded-pill" target="_blank">Xem thêm ></a>
                    </div>
                </div>
                <div class="p-3 text-center">
                    <h6 class="text-bold p-0 text-main">Đề tài: Thiết kế Website bán hàng BAGBAG</h6>
                    <p class="m-0">
                        <small>Thiết kế website bán hàng Bagbag</small>
                        <br>
                        <span class="text-bold">Lớp: C1808G1</span>
                    </p>
                </div>
            </div>
            <div class="box m-2 d-flex flex-column">
                <div class="position-relative">
                    <img class="w-100" src="./assets/img/Layer_42-min.png">
                    <div class="detail-layer">
                        <a href="https://aptechvietnam.com.vn/thiet-ke-website-ban-hang-eyeonic?width=800&height=600" class="px-4 btn text-white text-bold border-light rounded-pill" target="_blank">Xem thêm ></a>
                    </div>
                </div>
                <div class="p-3 text-center">
                    <h6 class="text-bold p-0 text-main">Đề tài: Thiết kế website bán hàng Eyeonic</h6>
                    <p class="m-0">
                        <small>Thiết kế website bán hàng Eyeonic</small>
                        <br>
                        <span class="text-bold">Lớp: C1808G2</span>
                    </p>
                </div>
            </div>
            <div class="box m-2 d-flex flex-column">
                <div class="position-relative">
                    <img class="w-100" src="./assets/img/c1610i-min.png">
                    <div class="detail-layer">
                        <a href="https://aptechvietnam.com.vn/project-hoc-ky-1-2" class="px-4 btn text-white text-bold border-light rounded-pill" target="_blank">Xem thêm ></a>
                    </div>
                </div>
                <div class="p-3 text-center">
                    <h6 class="text-bold p-0 text-main">Đề tài: Hẹn hò phố</h6>
                    <p class="m-0">
                        <small>Project học kỳ 1</small>
                        <br>
                        <span class="text-bold">Lớp: C1610I</span>
                    </p>
                </div>
            </div>
            <div class="box m-2 d-flex flex-column">
                <div class="position-relative">
                    <img class="w-100" src="./assets/img/c1508i-min.png">
                    <div class="detail-layer">
                        <a href="https://aptechvietnam.com.vn/project-hoc-ky-1" class="px-4 btn text-white text-bold border-light rounded-pill" target="_blank">Xem thêm ></a>
                    </div>
                </div>
                <div class="p-3 text-center">
                    <h6 class="text-bold p-0 text-main">Đề tài: Website tin tức Báo Việt</h6>
                    <p class="m-0">
                        <small>Project học kỳ 1</small>
                        <br>
                        <span class="text-bold">Lớp: C1508I</span>
                    </p>
                </div>
            </div>
            <!-- End List -->
        </div>
    </section>

    <section class="section-8 py-5">
        <h3 class="text-bold text-center text-main px-5">HỌC XONG BẠN SẼ LÀM VIỆC Ở ĐÂU</h3>
        <div class="d-flex justify-content-center mt-5 flex-wrap">
            <div class="left-boxes d-flex flex-wrap justify-content-end">
                <!-- List -->
                <div class="card m-3">
                    <div class="card-header position-relative py-3 bg-main">
                        <div class="img-container position-absolute d-flex align-items-center">
                            <img src="./assets/img/IFI_Logo-min.png">
                        </div>
                        <h6 class="text-white m-0">IFI Solution</h6>
                    </div>
                    <div class="card-body p-0 position-relative">
                        <div class="py-4 px-3">
                            <h6 class="text-bold">Lập trình Web Developer</h6>
                            <ul class="p-0 pt-1">
                                <li>Mức lương: 15tr - 32tr</li>
                                <li>Làm việc: Thứ 2 - Thứ 6</li>
                                <li>Chế độ: BHXH, BH sức khỏe nâng cao, thưởng tuyển dụng ...</li>
                            </ul>
                        </div>
                        <div class="detail-layer">
                            <a href="https://www.facebook.com/groups/JobAptech/permalink/2379837108958184" class="px-4 btn text-white text-bold border-light rounded-pill" target="_blank">Xem thêm ></a>
                        </div>
                    </div>
                </div>
                <div class="card m-3">
                    <div class="card-header position-relative py-3 bg-main">
                        <div class="img-container position-absolute d-flex align-items-center">
                            <img class="h-100" src="./assets/img/T_Solution-min.png">
                        </div>
                        <h6 class="text-white m-0">Citigo</h6>
                    </div>
                    <div class="card-body p-0 position-relative">
                        <div class="py-4 px-3">
                            <h6 class="text-bold">Tuyển TTS phát triển Kiot Viet</h6>
                            <ul class="p-0 pt-1">
                                <li>Được hỗ trợ 3M-10M</li>
                                <li>Được tham gia nghiên cứu dự án thực tế, hệ thống lớn.</li>
                                <li>Thưởng nóng với những phát kiến sáng tạo...</li>
                            </ul>
                        </div>
                        <div class="detail-layer">
                            <a href="https://www.facebook.com/groups/JobAptech/permalink/2377734202501808" class="px-4 btn text-white text-bold border-light rounded-pill" target="_blank">Xem thêm ></a>
                        </div>
                    </div>
                </div>
                <div class="card m-3">
                    <div class="card-header position-relative py-3 bg-main">
                        <div class="img-container position-absolute d-flex align-items-center">
                            <img class="w-100" src="./assets/img/Smartosc_Logo-min.png">
                        </div>
                        <h6 class="text-white m-0">SmartOSC</h6>
                    </div>
                    <div class="card-body p-0 position-relative">
                        <div class="py-4 px-3">
                            <h6 class="text-bold">Tuyển dụng PHP Fresher</h6>
                            <ul class="p-0 pt-1">
                                <li>Cơ hội trở thành nhân viên chính thức với mức lương siêu cạnh tranh.</li>
                                <li>Nhận trợ cấp bằng tiền mặt hàng tháng.</li>
                                <li>Có cơ hội đi onsite tại Châu Âu, Úc, Singapore...</li>
                            </ul>
                        </div>
                        <div class="detail-layer">
                            <a href="https://www.facebook.com/groups/JobAptech/permalink/2357150934560135" class="px-4 btn text-white text-bold border-light rounded-pill" target="_blank">Xem thêm ></a>
                        </div>
                    </div>
                </div>
                <div class="card m-3">
                    <div class="card-header position-relative py-3 bg-main">
                        <div class="img-container position-absolute d-flex align-items-center">
                            <img class="w-100" src="./assets/img/Megaads_Logo-min.png">
                        </div>
                        <h6 class="text-white m-0">MegaAds</h6>
                    </div>
                    <div class="card-body p-0 position-relative">
                        <div class="py-4 px-3">
                            <h6 class="text-bold">Tuyển dụng PHP Junior</h6>
                            <ul class="p-0 pt-1">
                                <li>Lương từ 10-20tr+ phụ cấp ăn trưa+ thưởng hàng tháng.</li>
                                <li>Cơ hội thăng tiến cao khi có thể lead các dự án.</li>
                                <li>Cơ hội nhận tới 9 tháng lương thưởng tết.</li>
                            </ul>
                        </div>
                        <div class="detail-layer">
                            <a href="https://www.facebook.com/groups/JobAptech/permalink/2345211162420779" class="px-4 btn text-white text-bold border-light rounded-pill" target="_blank">Xem thêm ></a>
                        </div>
                    </div>
                </div>
                <!-- End List -->
            </div>
            <div class="sidebar m-3">
                <div class="title py-2 px-3 text-white text-bold">🡢 Xem thêm tại:</div>
                <div class="fb-group w-100" data-href="https://www.facebook.com/groups/JobAptech/"  data-show-social-context="true" data-show-metadata="true"></div>
            </div>
        </div>
    </section>

    <section class="section-9 py-5">
        <h3 class="text-white text-center text-bold px-5">BÁO CHÍ NÓI VỀ APTECH</h3>
        <div class="d-flex mt-4 justify-content-center flex-wrap">
            <!-- List -->
            <div class="box bg-white m-3 d-flex flex-column">
                <img height="183" width="259" src="./assets/img/Layer_54-min.png">
                <div class="p-3">                    
                    <small>Nguồn: <span class="text-bold">Vietnamnet.vn</span></small>
                    <h5 class="py-2 text-justify text-bold">Lễ ký kết hợp tác đào tạo Công nghệ 4.0 cho các Trường đại học.</h5>
                    <p class="text-justify">Nhằm giúp Việt Nam đào tạo đội ngũ giảng viên CN 4.0, Bộ GD&ĐT phối hợp với Tập đoàn Aptech tổ chức Khóa đào tạo Công nghệ 4.0 cho các giảng viên đại học.</p>
                </div>
                <a target="_blank" class="text-bold mt-auto px-3 pb-3" href="https://vietnamnet.vn/vn/cong-nghe/tin-cong-nghe/hoi-thao-giai-phap-dao-tao-nhan-luc-cntt-thoi-4-0-546367.html">Xem thêm ></a>
            </div>
            <div class="box bg-white m-3 d-flex flex-column">
                <iframe width="259" height="183" src="https://www.youtube.com/embed/Z_VRZ8RBpkg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="p-3">                    
                    <small>Nguồn: <span class="text-bold">Truyền hình VTV6</span></small>
                    <h5 class="py-2 text-justify text-bold">Aptech - Lễ ký kết hợp tác đào tạo Công nghệ 4.0 cho giảng viên các Trường đại học.</h5>
                    <p class="text-justify">Ngày 03/07, Bộ GD & ĐT cùng với Tập đoàn Aptech tổ chức Hội thảo Giải pháp đào tạo nhân lực CNTT cho CMCN 4.0 với sự tham gia của Đại sứ quán Ấn Độ, các tập đoàn công nghệ hàng đầu Thế giới như Microsoft, Oracle và lãnh đạo các trường Đại học.</p>
                </div>
                <a target="_blank" class="text-bold mt-auto px-3 pb-3" href="https://vietnamnet.vn/vn/cong-nghe/tin-cong-nghe/hoi-thao-giai-phap-dao-tao-nhan-luc-cntt-thoi-4-0-546367.html">Xem thêm ></a>
            </div>
            <div class="box bg-white m-3 d-flex flex-column">
                <img height="183" width="259" src="./assets/img/Layer_55-min.png">
                <div class="p-3">                    
                    <small>Nguồn: <span class="text-bold">Giaoducthoidai.vn</span></small>
                    <h5 class="py-2 text-justify text-bold">Cơ hội việc làm tại ngày hội tuyển dụng Aptech Job Fair 2019.</h5>
                    <p class="text-justify">Sáng (20/04) tại Hà Nội, Aptech tổ chức Ngày hội tuyển dụng Aptech job fair 2019, đây là dip để các bạn trẻ có cơ hội tìm hiểu về ngành nghề mà mình yêu thích, cũng như đăng ký ứng tuyển trực tiếp với các Doanh nghiệp tuyển dụng.</p>
                </div>
                <a target="_blank" class="text-bold mt-auto px-3 pb-3" href="https://giaoducthoidai.vn/giao-duc/nganh-cong-nghe-thong-tin-chinh-sach-dai-ngo-tot-vi-sao-van-kho-tuyen-nhan-su-3997074-v.html">Xem thêm ></a>
            </div>
            <div class="box bg-white m-3 d-flex flex-column">
                <iframe width="259" height="183" src="https://www.youtube.com/embed/sd2KKryb5y4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="p-3">                    
                    <small>Nguồn: <span class="text-bold">Truyền hình VTC1</span></small>
                    <h5 class="py-2 text-justify text-bold">Lễ Khai giảng và Trao bằng tốt nghiệp năm 2019 tại Aptech.</h5>
                    <p class="text-justify">Vừa qua (28/07), Lễ tốt nghiệp dành cho các bạn học viên vượt qua hơn 40 bài thi và 4 dự án phần mềm và Chào đón Tân học viên đã diễn ra tại Trung tâm Văn hóa Pháp L’Espace. Buổi lễ có sự tham dự của hơn 200 học sinh và phụ huynh cùng các doanh nghiệp công nghệ tuyển dụng.</p>
                </div>
                <a target="_blank" class="text-bold mt-auto px-3 pb-3" href="https://www.facebook.com/aptechvietnam.com.vn/videos/2601192076560243">Xem thêm ></a>
            </div>
            <!-- End List -->
        </div>
    </section>

    <section class="section-10 pt-5 pb-4 bg-white">
        <h3 class="text-bold text-center text-main px-5">MÔI TRƯỜNG HỌC TẬP CHUYÊN NGHIỆP TẠI APTECH</h3>
        <div class="img-container mt-4 d-flex flex-wrap justify-content-center">
            <?php for($i = 1; $i <= 6; $i++): ?>
                <div class="box m-3">
                    <a data-fancybox="gallery" href="../assets/img/env/eco<?php echo $i ?>-min.png">
                        <img class="w-100" src="../assets/img/env/eco<?php echo $i ?>-min.png">
                    </a>
                </div>
            <?php endfor ?>
        </div>
        <h4 class="text-center text-main text-bold">Bạn muốn học tại môi trường này không?</h4>
        <div class="d-flex justify-content-center align-items-center mt-3">
            <img src="./assets/img/caret1-min.png" alt="">
            <a href="#regis-form" class="btn bg-sub text-white text-bold px-4 mx-3">Tôi muốn</a>
            <img src="./assets/img/caret2-min.png" alt="">
        </div>
    </section>

    <section class="section-11 py-5">
        <h3 class="text-center text-bold text-main px-5">DOANH NGHIỆP NÓI VỀ APTECH</h3>
        <div class="py-3 d-flex justify-content-center">
            <!-- PC -->
            <div id="carouselQuotesCompaniesPC" class="carousel slide">
                <div class="carousel-inner">
                    <?php for($i = 0; $i < sizeof($quoteCom); $i+=2): ?>
                        <div class="carousel-item <?php echo $i == 0 ? 'active' : '' ?>">
                            <div class="d-flex justify-content-center flex-wrap">
                                <div class="card m-3">
                                    <div class="card-body px-5 d-flex flex-column justify-content-between">
                                        <div>
                                            <img src="./assets/img/quote-min.png">
                                        </div>
                                        <p class="text-bold pt-3"><?php echo $quoteCom[$i]->quote ?></p>
                                        <div class="d-flex align-items-center pt-2">
                                            <img class="avt" src="../assets/img/quote-com/<?php echo $quoteCom[$i]->image ?>">
                                            <div class="pl-3">
                                                <label class="mb-1 text-bold text-main"><?php echo $quoteCom[$i]->name ?></label>
                                                <p class="m-0"><?php echo $quoteCom[$i]->role ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card m-3">
                                    <div class="card-body px-5 d-flex flex-column justify-content-between">
                                        <div>
                                            <img src="./assets/img/quote-min.png">
                                        </div>
                                        <p class="text-bold pt-3"><?php echo $quoteCom[$i+1]->quote ?></p>
                                        <div class="d-flex align-items-center pt-2">
                                            <img class="avt" src="../assets/img/quote-com/<?php echo $quoteCom[$i+1]->image ?>">
                                            <div class="pl-3">
                                                <label class="mb-1 text-bold text-main"><?php echo $quoteCom[$i+1]->name ?></label>
                                                <p class="m-0"><?php echo $quoteCom[$i+1]->role ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endfor ?>
                </div>
                <a class="carousel-control-prev" href="#carouselQuotesCompaniesPC" role="button" data-slide="prev">
                    <div class="carousel-control-icon">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </div>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselQuotesCompaniesPC" role="button" data-slide="next">
                    <div class="carousel-control-icon">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </div>
                    <span class="sr-only">Next</span>
                </a>
                <ol class="carousel-indicators">
                    <?php for($i = 0; $i < sizeof($quoteCom); $i+=2): ?>
                        <li data-target="#carouselQuotesCompaniesPC" class="<?php echo $i == 0 ? 'active' : ''; ?>" data-slide-to="<?php echo $i-1; ?>"></li>
                    <?php endfor ?>
                </ol>
            </div>
            <!-- END PC -->
            <!-- MB -->
            <div id="carouselQuotesCompaniesMB" class="carousel slide d-none">
                <div class="carousel-inner">
                    <?php foreach($quoteCom as $i => $com): ?>
                        <div class="carousel-item <?php echo $i == 0 ? 'active': '' ?>">
                            <div class="d-flex justify-content-center flex-wrap">
                                <div class="card m-3">
                                    <div class="card-body px-5 d-flex flex-column justify-content-between">
                                        <div>
                                            <img src="./assets/img/quote-min.png">
                                        </div>
                                        <p class="text-bold pt-3"><?php echo $com->quote ?></p>
                                        <div class="d-flex align-items-center pt-2">
                                            <img class="avt" src="../assets/img/quote-com/<?php echo $com->image ?>">
                                            <div class="pl-3">
                                                <label class="mb-1 text-bold text-main"><?php echo $com->name ?></label>
                                                <p class="m-0"><?php echo $com->role ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
                <a class="carousel-control-prev" href="#carouselQuotesCompaniesMB" role="button" data-slide="prev">
                    <div class="carousel-control-icon">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </div>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselQuotesCompaniesMB" role="button" data-slide="next">
                    <div class="carousel-control-icon">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </div>
                    <span class="sr-only">Next</span>
                </a>
                <ol class="carousel-indicators">
                    <?php for($i = 0; $i < sizeof($quoteCom); $i++): ?>
                        <li data-target="#carouselQuotesCompaniesMB" class="<?php echo $i == 0 ? 'active' : ''; ?>" data-slide-to="<?php echo $i; ?>"></li>
                    <?php endfor ?>
                </ol>
            </div>
            <!-- END MB -->
        </div>
    </section>

    <section class="section-12 py-5">
        <h3 class="text-white text-center text-bold px-5">CẢM NHẬN CỦA HỌC VIÊN VỀ APTECH</h3>
        <div class="pt-4 pb-4 d-flex justify-content-center">
            <!-- PC -->
            <div id="carouselFeelStdPC" class="carousel slide pt-5">
                <div class="carousel-inner">
                    <?php for($i = 0; $i < sizeof($feelStd); $i+=2): ?>
                        <div class="carousel-item <?php echo $i == 0 ? 'active' : '' ?>">
                            <div class="d-flex justify-content-center flex-wrap">
                                <div class="card m-3">
                                    <div class="card-body position-relative d-flex flex-column px-4">
                                        <div class="img-container position-absolute">
                                            <img src="../assets/img/quote-std/<?php echo $feelStd[$i]->image; ?>">
                                        </div>
                                        <div class="title">
                                            <h5 class="text-bold mb-1"><?php echo $feelStd[$i]->name; ?></h5>
                                            <small class="text-italic"><?php echo $feelStd[$i]->title; ?></small>
                                        </div>
                                        <div class="text-bold font-italic pt-5 text-justify">
                                            <div class="hidden-title d-none pt-4 text-right">
                                                <h5 class="text-bold mb-1"><?php echo $feelStd[$i]->name; ?></h5>
                                                <small class="text-italic"><?php echo $feelStd[$i]->title; ?></small>
                                            </div>    
                                            <p><?php echo $feelStd[$i]->quote ?></p>
                                        </div>
                                        <a class="align-self-end text-bold text-main" href="<?php echo $feelStd[$i]->link; ?>" target="_blank">Xem thêm ></a>
                                    </div>
                                </div>
                                <div class="card m-3">
                                    <div class="card-body position-relative d-flex flex-column px-4">
                                        <div class="img-container position-absolute">
                                            <img src="../assets/img/quote-std/<?php echo $feelStd[$i+1]->image; ?>">
                                        </div>
                                        <div class="title">
                                            <h5 class="text-bold mb-1"><?php echo $feelStd[$i+1]->name; ?></h5>
                                            <small class="text-italic"><?php echo $feelStd[$i+1]->title; ?></small>
                                        </div>
                                        <div class="text-bold font-italic pt-5 text-justify">
                                            <div class="hidden-title d-none pt-4 text-right">
                                                <h5 class="text-bold mb-1"><?php echo $feelStd[$i+1]->name; ?></h5>
                                                <small class="text-italic"><?php echo $feelStd[$i+1]->title; ?></small>
                                            </div>    
                                            <p><?php echo $feelStd[$i+1]->quote; ?></p>
                                        </div>
                                        <a class="align-self-end text-bold text-main" href="<?php echo $feelStd[$i+1]->link; ?>" target="_blank">Xem thêm ></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>

                <a class="carousel-control-prev" href="#carouselFeelStdPC" role="button" data-slide="prev">
                    <div class="carousel-control-icon">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </div>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselFeelStdPC" role="button" data-slide="next">
                    <div class="carousel-control-icon">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </div>
                    <span class="sr-only">Next</span>
                </a>
                <ol class="carousel-indicators">
                    <?php for($i = 0; $i < sizeof($feelStd); $i+=2): ?>
                        <li data-target="#carouselFeelStdPC" class="<?php echo $i == 0 ? 'active' : ''; ?>" data-slide-to="<?php echo $i-1; ?>"></li>
                    <?php endfor ?>
                </ol>
            </div>
            <!-- END PC -->
            <!-- MB -->
            <div id="carouselFeelStdMB" class="carousel slide pt-5 d-none">
                <div class="carousel-inner">
                    <?php foreach($feelStd as $i => $std): ?>
                        <div class="carousel-item <?php echo $i == 0 ? 'active' : '' ?>">
                            <div class="d-flex justify-content-center flex-wrap">
                                <div class="card m-3">
                                    <div class="card-body position-relative d-flex flex-column px-4">
                                        <div class="img-container position-absolute">
                                            <img src="../assets/img/quote-std/<?php echo $std->image; ?>">
                                        </div>
                                        <div class="title">
                                            <h5 class="text-bold mb-1"><?php echo $std->name; ?></h5>
                                            <small class="text-italic"><?php echo $std->title; ?></small>
                                        </div>
                                        <div class="text-bold font-italic pt-5 text-justify">
                                            <div class="hidden-title d-none pt-4 text-right">
                                                <h5 class="text-bold mb-1"><?php echo $std->name; ?></h5>
                                                <small class="text-italic"><?php echo $std->title; ?></small>
                                            </div>    
                                            <p><?php echo $std->quote ?></p>
                                        </div>
                                        <a class="align-self-end text-bold text-main" href="<?php echo $std->link; ?>" target="_blank">Xem thêm ></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <a class="carousel-control-prev" href="#carouselFeelStdMB" role="button" data-slide="prev">
                    <div class="carousel-control-icon">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </div>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselFeelStdMB" role="button" data-slide="next">
                    <div class="carousel-control-icon">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </div>
                    <span class="sr-only">Next</span>
                </a>
                <ol class="carousel-indicators">
                    <?php for($i = 0; $i < sizeof($feelStd); $i++): ?>
                        <li data-target="#carouselFeelStdMB" class="<?php echo $i == 0 ? 'active' : ''; ?>" data-slide-to="<?php echo $i; ?>"></li>
                    <?php endfor ?>
                </ol>
            </div>
            <!-- END MB -->
        </div>
    </section>


    <section class="section-13 pt-0 pb-5" id="regis-form">
        <div class="pt-4 d-flex justify-content-center flex-wrap">
            <div class="box p-3 pt-0 d-flex text-center flex-basis-40">
                <img class="mw-100 m-auto" src="./assets/img/promotion-min.png" alt="promotion.png">
            </div>
            <div class="box p-3 flex-basis-40">
                <h5 class="text-white mb-3 text-bold text-center">Đăng ký tư vấn<br>và nhận bộ tài liệu tự học PHP miễn phí</h5>
                <form class="d-flex flex-column" action="../mail/sendmail.php" method="POST">
                    <input class="form-control form-control-lg mb-3 pl-4" type="" name="txtName" placeholder="Họ và tên" required>
                    <input class="form-control form-control-lg mb-3 pl-4" type="email" name="txtEmail" placeholder="Email" required>
                    <input class="form-control form-control-lg mb-3 pl-4" type="tel" name=txtPhone placeholder="Số điện thoại" required>
                    <input class="form-control form-control-lg mb-3 pl-4" type="" name="dateBirth" placeholder="Năm sinh">
                    <select class="form-control form-control-lg mb-3 pl-4" name="slCenter" required>
                        <option value>Chọn địa điểm học</option>
                        <option value="aptech1@aprotrain.com">Tòa nhà Aptech, 285 Đôi Cấn, Ba Đình, Hà Nội</option>
                        <option value="aptech3@aprotrain.com">Tòa nhà Aptech, 54 Lê Thanh Nghị, Hai Bà Trưng, Hà Nội</option>
                    </select>
                    <input class="d-none" type="" name="subject" value="<?php echo $formSubmitSubject ?>">
                    <input class="d-none" type="" name="redirectUrl" value="<?php echo $formSubmitRedirect ?>">
                    <button type="submit" class="btn btn-round bg-white text-main btn-lg text-bold px-5 align-self-end">NHẬN TƯ VẤN</button>
                </form>
                <p class="text-white text-italic pt-4 mb-0">Thời gian ưu đãi còn:</p>
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div class="countdown-box d-flex flex-column align-items-center text-white text-center py-3 px-3 mt-4">
                        <h1 class="countdown-box-days text-bold m-0"></h1>
                        <p class="m-0">Ngày</p>
                    </div>
                    <div class="countdown-box d-flex flex-column align-items-center text-white text-center py-3 px-3 mt-4">
                        <h1 class="countdown-box-hours text-bold m-0"></h1>
                        <p class="m-0">Giờ</p>
                    </div>
                    <div class="countdown-box d-flex flex-column align-items-center text-white text-center py-3 px-3 mt-4">
                        <h1 class="countdown-box-minutes text-bold m-0"></h1>
                        <p class="m-0">Phút</p>
                    </div>
                    <div class="countdown-box d-flex flex-column align-items-center text-white text-center py-3 px-3 mt-4">
                        <h1 class="countdown-box-seconds text-bold m-0"></h1>
                        <p class="m-0">Giây</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-14 py-5 bg-white">
        <h3 class="text-center text-bold text-main px-5">MỌI NGƯỜI NÓI GÌ VỀ APTECH?</h3>
        <div class="fb-comments" data-href="<?php echo $fbComment ?>" width="100%" data-numposts="5"></div>
    </section>
    <!-- End Sections -->

    <!-- Footer -->
    <footer class="text-white text-md-left text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 order-12 order-lg-1">
                    <h3 class="text-uppercase text-bold mb-3 footer-heading">Hệ thống đào tạo lập trình viên quốc tế Aptech</h3>
                    <table border="0" class="w-100">
                        <tbody>
                            <tr>
                                <td class="text-bold pr-3">Hà Nội:</td>
                                <td><span class="text-bold">285 Đội Cấn</span>, Q. Ba Đình</td>
                                <td class="text-bold px-3">Tel: <a href="tel:0899 179 029" class="text-white">0899 179 029</a></td>
                                <td>Email: <a href="mailto:aptech1@aprotrain.com" target="_blank" class="text-white">aptech1@aprotrain.com</a></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><span class="text-bold">54 Lê Thanh Nghị</span>, Q. Hai Bà Trưng</td>
                                <td class="text-bold px-3">Tel: <a href="tel:0899 179 029" class="text-white">0899 179 029</a></td>
                                <td>Email: <a href="mailto:aptech3@aprotrain.com" target="_blank" class="text-white">aptech3@aprotrain.com</a></td>
                            </tr>
                            <tr>
                                <td class="text-bold pr-3 pt-3" rowspan="2">TP.HCM:</td>
                                <td class="pt-0 pt-md-3"><span class="text-bold">212 - 214 Nguyễn Đình Chiểu</span>, P.6, Q.3</td>
                                <td class="text-bold px-3 pt-0 pt-md-3">Tel: <a href="tel:1800 1779" class="text-white">1800 1779</a></td>
                                <td class="pt-0 pt-md-3">Email: <a href="mailto:aptech2@aprotrain.com" target="_blank" class="text-white">aptech2@aprotrain.com</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-3 col-md-4 mb-4 mb-md-0 order-1 order-lg-12">
                    <a href="https://aptechvietnam.com.vn/" target="_blank" class="logo-footer text-center text-md-left">
                        <img src="../assets/img/logo-white-min.png" class="mw-100">
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Scroll button -->
    <button class="btn" id="scroll-top-btn">🡩</button>
    <!-- End scroll button -->


    <!-- jQuery Bootstrap4 -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script async defer src="../assets/js/bootstrap/util.min.js"></script>
    <script async defer src="../assets/js/bootstrap/collapse.min.js"></script>
    <script async defer src="../assets/js/bootstrap/carousel.min.js"></script>
    <script async defer src="../assets/js/bootstrap/button.min.js"></script>

    <!-- Fancybox -->
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

    <!-- Scroll top -->
    <script async defer src="../assets/js/scroll-top<?php echo FILE_EXT ?>.js"></script>

    <!-- Countdown -->
    <script async defer src="../assets/js/countdown<?php echo FILE_EXT ?>.js"></script>

    <!-- FB SDK -->
    <!-- <div id="fb-root"></div> -->
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v5.0&appId=749494412182083&autoLogAppEvents=1"></script>
    <!-- End FB SDK -->

    <!-- Subiz -->
    <script>
        (function(s, u, b, i, z){
            u[i]=u[i]||function(){
                u[i].t=+new Date();
                (u[i].q=u[i].q||[]).push(arguments);
            };
            z=s.createElement('script');
            var zz=s.getElementsByTagName('script')[0];
            z.async=1; z.src=b; z.id='subiz-script';
            zz.parentNode.insertBefore(z,zz);
        })(document, window, 'https://widget.mysubiz.com/static/js/app.js', 'subiz');
        subiz('setAccount', 'acqpeyxnjmvbdavhzcwm');
    </script>
    <!-- End Subiz -->

    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml   : true,
                version : 'v6.0'
            });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <div class="fb-customerchat"
        attribution=setup_tool
        page_id="371202429573648"
        logged_in_greeting="Xin chào! Aptech có thể giúp gì cho bạn!"
        logged_out_greeting="Xin chào! Aptech có thể giúp gì cho bạn!">
    </div>
</body>
</html>