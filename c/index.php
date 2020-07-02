<?php
    // $mode = 'DEV';
    $mode = 'DEV_DEPLOY';
    // $mode = 'PROD';

    $ext = '';
    $baseUrl = '';

    switch ($mode) {
        case 'PROD': 
            $ext = '.min'; 
            $baseUrl = 'https://aptechvietnam.com.vn';
            break;
        case 'DEV': 
            $ext = ''; 
            $baseUrl = $_SERVER['HTTP_HOST'].'/aptech';
            break;
        case 'DEV_DEPLOY':
            $ext = '.min'; 
            $baseUrl = $_SERVER['HTTP_HOST'].'/aptech';
            break;
    }

    $titlePage = 'Aptech | C/C++';

    $feelStd = json_decode(file_get_contents("../assets/data/feel-std.json"));
    $quoteCom = json_decode(file_get_contents("../assets/data/quote-com.json"));

    $formSubmitRedirect = $baseUrl.'/c/dang-ky-thanh-cong';
    $formSubmitSubject = 'Đăng ký khóa học lập trình C/C++';

    $fbComment = $baseUrl.'/c';
?>

<!DOCTYPE html>
<html>
<head>
    <?php if ($mode == 'PROD') :?>
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
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php echo $titlePage ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
	<link rel="stylesheet" type="text/css" href="../assets/css/master<?php echo $ext ?>.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/style<?php echo $ext ?>.css">
</head>
<body>    
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <a class="navbar-brand" href="https://aptechvietnam.com.vn/" target="_blank">
            <img src="../assets/img/logo-min.png" class="mr-2">
            <img src="../assets/img/logo-second-min.png">
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
                        <a class="btn regis-btn text-bold text-uppercase px-5 link-scroll font-600" href="#regis-form">Đăng ký</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Header -->

    <!-- Sections -->
    <section class="section-banner"> 
    	<img src="./assets/img/banner-PC_C-min.jpg" alt="" class="w-100">
    </section>

    <section class="section-1 py-5 bg-white">
        <h4 class="text-center text-bold text-uppercase">Lý do nào khiến C/C++ là ngôn ngữ đầu tiên bạn nên chọn học?</h4>
        <div class="d-flex justify-content-center pt-3 align-items-center">
            <div class="left-side mr-4 pt-4">
                <p class="px-3 text-bold">Nếu bạn là dân ngoại đạo đang muốn tìm hiểu học IT</p>
                <p class="px-3 text-bold">Hoặc là sinh viên CNTT nhưng lại chưa được học chuyên ngành</p>
                <ul>
                    <li class="text-bold">Từ ngôn ngữ C/C++ bạn có thể học sang bất kì ngôn ngữ lập trình nào một cách dễ dàng</li>
                    <li class="text-bold">Cơ hội tuyệt vời để làm việc với các dự án mã nguồn mở</li>
                    <li class="text-bold">Giỏi C/C++ số tiền bạn có thể kiếm được từ nó là môt con số khủng</li>
                </ul>
            </div>
            <iframe src="https://www.youtube.com/embed/I-VEiZqVohQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </section>

    <section id="section-2">
        <img class="w-100" src="./assets/img/for-who.jpg">
    </section>

    <section class="section-3 py-5 bg-white">
        <h4 class="text-center text-bold text-uppercase">Ưu điểm vượt trội của Khóa học Lập trình C/C++ cho người mới bắt đầu</h4>
        <div class="d-flex justify-content-center pt-3 flex-wrap">
            <div class="box">
                <div class="img-container">
                    <img src="./assets/img/Layer_15-min.png">
                </div>
                <div class="pt-3">
                    <h6 class="text-bold text-center">Giáo trình C/C++ Quốc tế</h6>
                    <p class="text-justify">Được thiết kế bởi các Chuyên gia Ấn Độ và được hơn 40 quốc gia sử dụng. Nội dung chương trình được tối ưu, lược bỏ những kiến thức không cần thiết, chỉ tập trung những kiến thức quan trọng để giúp người mới học Lập trình nắm bắt nhanh chóng nền tảng Lập trình.</p>
                </div>
            </div>
            <div class="box">
                <div class="img-container">
                    <img src="./assets/img/curriculum_1336300-min.png">
                </div>
                <div class="pt-3">
                    <h6 class="text-bold text-center">Giảng viên là Chuyên gia Công nghệ</h6>
                    <p class="text-justify">Nhiều kinh nghiệm được chọn lọc qua quy trình tuyển dụng khắt khe của Tập đoàn APTECH Ấn Độ giúp sinh viên ứng dụng ngay kiến thức mới học vào thực tế.</p>
                </div>
            </div>
            <div class="box">
                <div class="img-container">
                    <img src="./assets/img/technique-think-procedure-system-way-method-idea-512-min.png">
                </div>
                <div class="pt-3">
                    <h6 class="text-bold text-center">Phương pháp Đào tạo Human Compiler</h6>
                    <p class="text-justify">Tập trung vào bản chất kiến thức, giúp học viên hiểu sâu về lập trình máy tính, làm nền tảng để dễ dàng học các ngôn ngữ lập trình khác.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-4">
        <div class="d-flex justify-content-center align-items-center section-container py-3">
            <h5 class="m-0 text-bold text-white">Kết thúc khóa học, Học viên được làm project dưới sự hướng dẫn của giảng viên và nhận chứng chỉ hoàn thành khóa học</h5>
            <button class="btn text-bold px-4 py-0 ml-5" data-toggle="collapse" data-target="#detailCollapse">🡢 Xem chi tiết khóa học</button>
        </div>
        <div class="collapse py-4" id="detailCollapse">
            <div class="d-flex justify-content-center">
                <table class="table">
                    <thead>
                        <tr class="title-tr table-bordered">
                            <td class="text-bold">Nội dung</td>
                            <td class="text-center text-bold">Lý thuyết</td>
                            <td class="text-center text-bold">Thực hành</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-bold">Startup</td>
                            <td class="text-center focused text-bold">2</td>
                            <td class="text-center text-bold">2</td>
                        </tr>
                        <tr>
                            <td class="text-bold">Những khái niệm cơ bản của C</td>
                            <td class="text-center focused text-bold">10</td>
                            <td class="text-center text-bold">10</td>
                        </tr>
                        <tr>
                            <td>
                                <ul>
                                    <li>Tên biến, kiểu dữ liệu, kích thước, chuyển đổi, ép kiểu</li>
                                    <li>Các phép toán số học, logic</li>
                                    <li>Các câu lệnh và thứ tự thực hiện câu lệnh</li>
                                    <li>Khối lệnh điều khiển và vòng lặp</li>
                                    <li>Hàm, biến trong hàm/ngoài hàm, biến tĩnh</li>
                                    <li>Cấu trúc chương trình</li>
                                </ul>
                            </td>
                            <td class="focused"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-bold">Những khái niệm nâng cao của C</td>
                            <td class="text-center focused text-bold">12</td>
                            <td class="text-center text-bold">12</td>
                        </tr>
                        <tr>
                            <td>
                                <ul>
                                    <li>Con trỏ, tham chiếu, tham trị</li>
                                    <li>Mảng một chiều, mảng nhiều chiều</li>
                                    <li>Dữ liệu có cấu trúc</li>
                                    <li>Truy xuất dữ liệu qua File</li>
                                </ul>
                            </td>
                            <td class="focused"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-bold">Những khái niệm cơ bản của C++</td>
                            <td class="text-center focused text-bold">4</td>
                            <td class="text-center text-bold text-bold">4</td>
                        </tr>
                        <tr>
                            <td>
                                <ul>
                                    <li>Lớp, thuộc tính, phương thức</li>
                                    <li>Đối tượng, truy cập thuộc tính và phương thức của đối tượng</li>
                                    <li>Thừa kế và đa hình</li>
                                </ul>
                            </td>
                            <td class="focused"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-bold">Exam</td>
                            <td class="text-center focused text-bold">2</td>
                            <td class="text-center text-bold">2</td>
                        </tr>
                        <tr>
                            <td class="text-bold">TOTAL</td>
                            <td class="text-center focused text-bold">30</td>
                            <td class="text-center text-bold">30</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="section-5 py-5">
        <h4 class="text-center text-bold text-white text-uppercase">Kết quả đạt được sau khóa học</h4>
        <div class="d-flex justify-content-center py-4 px-5 flex-wrap">
            <div class="box mx-3 my-3">
                <h5 class="text-white text-bold">Cung cấp cho học viên kỹ năng lập trình ngôn ngữ C/ C++</h5>
                <ul class="pl-4 m-0">
                    <li class="py-1">Những khái niệm căn bản của một chương trình bao gồm biến, kiểu dữ liệu, câu lệnh.</li>
                    <li class="py-1">Các cấu trúc điều khiển căn bản.</li>
                    <li class="py-1">Các kiểu dữ liệu căn bản và lập trình cấu trúc.</li>
                    <li class="py-1">Các khái niệm như mảng, con trỏ, dữ liệu có cấu trúc.</li>

                </ul>
            </div>
            <div class="box mx-3 my-3">
                <h5 class="text-white text-bold">Kiến thức về Lập trình Hướng đối tượng</h5>
                <ul class="pl-4 m-0">
                    <li class="py-1">Trang bị tư duy thuật toán lập trình.</li>
                    <li class="py-1">Nền tảng Lập trình căn bản vững chắc để học tiếp các ngôn ngữ Lập trình chuyên nghiệp khác.</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section-6 py-5">
        <h4 class="text-bold text-center text-uppercase">Doanh nghiệp tuyển dụng về ngôn ngữ C/C++</h4>
        <div class="d-flex justify-content-center mt-5 flex-wrap">
            <div class="left-boxes d-flex flex-wrap justify-content-end">
                <!-- List -->
                <div class="card m-3">
                    <div class="card-header position-relative py-3">
                        <div class="img-container position-absolute d-flex align-items-center justify-content-center">
                            <img src="./assets/img/pixta-min.png">
                        </div>
                        <h6 class="text-white m-0">PIXTA Vietnam</h6>
                    </div>
                    <div class="card-body p-0 position-relative">
                        <div class="py-4 px-3">
                            <h6 class="text-bold">Senior Web Developer C++</h6>
                            <ul class="p-0 pt-1">
                                <li>Mức lương hấp dẫn, được cộng thêm 2 tháng tiền thưởng vào cuối năm.</li>
                                <li>Trợ cấp ăn trưa, bảo hiểm sức khỏe hàng năm...</li>
                            </ul>
                        </div>
                        <div class="detail-layer">
                            <a href="https://itviec.com/it-jobs/senior-web-developer-ruby-python-c-pixta-vietnam-3231" class="px-4 btn text-white text-bold border-light rounded-pill" target="_blank">Xem thêm ></a>
                        </div>
                    </div>
                </div>
                <div class="card m-3">
                    <div class="card-header position-relative py-3">
                        <div class="img-container position-absolute d-flex align-items-center justify-content-center">
                            <img src="./assets/img/cicdata-min.png">
                        </div>
                        <h6 class="text-white m-0">CIC DATA</h6>
                    </div>
                    <div class="card-body p-0 position-relative">
                        <div class="py-4 px-3">
                            <h6 class="text-bold">Software Developer C++</h6>
                            <ul class="p-0 pt-1">
                                <li>Mức lương khởi điểm cạnh tranh.</li>
                                <li>Teambuilding và chuyến đi công ty tại khu nghỉ dưỡng 5 sao</li>
                            </ul>
                        </div>
                        <div class="detail-layer">
                            <a href="https://itviec.com/it-jobs/software-developer-c-java-golang-cic-data-0702" class="px-4 btn text-white text-bold border-light rounded-pill" target="_blank">Xem thêm ></a>
                        </div>
                    </div>
                </div>
                <div class="card m-3">
                    <div class="card-header position-relative py-3">
                        <div class="img-container position-absolute d-flex align-items-center justify-content-center">
                            <img src="./assets/img/fsoft-min.png">
                        </div>
                        <h6 class="text-white m-0">FPT Software</h6>
                    </div>
                    <div class="card-body p-0 position-relative">
                        <div class="py-4 px-3">
                            <h6 class="text-bold">20 C/C++ Developers</h6>
                            <ul class="p-0 pt-1">
                                <li>Lương cạnh tranh. Thưởng dựa trên hiệu suất.</li>
                                <li>Môi trường làm việc trẻ trung và năng động.</li>
                            </ul>
                        </div>
                        <div class="detail-layer">
                            <a href="https://itviec.com/it-jobs/hn-20-c-c-developers-onsite-korea-fpt-software-1322" class="px-4 btn text-white text-bold border-light rounded-pill" target="_blank">Xem thêm ></a>
                        </div>
                    </div>
                </div>
                <div class="card m-3">
                    <div class="card-header position-relative py-3">
                        <div class="img-container position-absolute d-flex align-items-center justify-content-center">
                            <img class="w-100" src="./assets/img/kytech-min.png">
                        </div>
                        <h6 class="text-white m-0">Koh Young Technology</h6>
                    </div>
                    <div class="card-body p-0 position-relative">
                        <div class="py-4 px-3">
                            <h6 class="text-bold">C/C++ Developers</h6>
                            <ul class="p-0 pt-1">
                                <li>Thu nhập hấp dẫn, lương tháng thứ 13, chính sách ưu đãi tiếng Anh, tiếng Hàn và kỹ thuật</li>
                                <li>Biểm xã hội, bảo hiểm thất nghiệp theo quy định của Bộ luật Lao động.</li>
                            </ul>
                        </div>
                        <div class="detail-layer">
                            <a href="https://itviec.com/it-jobs/application-developer-c-c-net-koh-young-technology-inc-0831" class="px-4 btn text-white text-bold border-light rounded-pill" target="_blank">Xem thêm ></a>
                        </div>
                    </div>
                </div>
                <!-- End List -->
            </div>
            <div class="sidebar m-3">
                <div class="title py-2 px-3 text-white text-bold">🡢 Xem thêm tại:</div>
                <div class="fb-group" data-href="https://www.facebook.com/groups/JobAptech/"  data-show-social-context="true" data-show-metadata="true"></div>
            </div>
        </div>
    </section>

    <section class="section-7 py-5">
        <h4 class="text-white text-center text-bold">BÁO CHÍ NÓI VỀ APTECH</h4>
        <div class="d-flex mt-4 justify-content-center flex-wrap">
            <!-- List -->
            <div class="box bg-white m-3">
                <img height="183" width="259" src="./assets/img/Layer_54-min.png">
                <div class="p-3">
                    <div>
                        <small>Nguồn: <b>Vietnamnet.vn</b></small>
                        <h5 class="py-2 text-justify">Lễ ký kết hợp tác đào tạo Công nghệ 4.0 cho các Trường đại học.</h5>
                        <p class="text-justify">Nhằm giúp Việt Nam đào tạo đội ngũ giảng viên CN 4.0, Bộ GD&ĐT phối hợp với Tập đoàn Aptech tổ chức Khóa đào tạo Công nghệ 4.0 cho các giảng viên đại học.</p>
                    </div>
                    <a target="_blank" class="text-bold" href="https://vietnamnet.vn/vn/cong-nghe/tin-cong-nghe/hoi-thao-giai-phap-dao-tao-nhan-luc-cntt-thoi-4-0-546367.html">Xem thêm ></a>
                </div>
            </div>
            <div class="box bg-white m-3">
                <iframe width="259" height="183" src="https://www.youtube.com/embed/Z_VRZ8RBpkg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="p-3">
                    <div>
                        <small>Nguồn: <b>Truyền hình VTV6</b></small>
                        <h5 class="py-2 text-justify">Aptech - Lễ ký kết hợp tác đào tạo Công nghệ 4.0 cho giảng viên các Trường đại học.</h5>
                        <p class="text-justify">Ngày 03/07, Bộ GD & ĐT cùng với Tập đoàn Aptech tổ chức Hội thảo Giải pháp đào tạo nhân lực CNTT cho CMCN 4.0 với sự tham gia của Đại sứ quán Ấn Độ, các tập đoàn công nghệ hàng đầu Thế giới như Microsoft, Oracle và lãnh đạo các trường Đại học.</p>
                    </div>
                    <a target="_blank" class="text-bold" href="https://vietnamnet.vn/vn/cong-nghe/tin-cong-nghe/hoi-thao-giai-phap-dao-tao-nhan-luc-cntt-thoi-4-0-546367.html">Xem thêm ></a>
                </div>
            </div>
            <div class="box bg-white m-3">
                <img height="183" width="259" src="./assets/img/Layer_55-min.png">
                <div class="p-3">
                    <div>
                        <small>Nguồn: <b>Giaoducthoidai.vn</b></small>
                        <h5 class="py-2 text-justify">Cơ hội việc làm tại ngày hội tuyển dụng Aptech Job Fair 2019.</h5>
                        <p class="text-justify">Sáng (20/04) tại Hà Nội, Aptech tổ chức Ngày hội tuyển dụng Aptech job fair 2019, đây là dip để các bạn trẻ có cơ hội tìm hiểu về ngành nghề mà mình yêu thích, cũng như đăng ký ứng tuyển trực tiếp với các Doanh nghiệp tuyển dụng.</p>
                    </div>
                    <a target="_blank" class="text-bold" href="https://giaoducthoidai.vn/giao-duc/nganh-cong-nghe-thong-tin-chinh-sach-dai-ngo-tot-vi-sao-van-kho-tuyen-nhan-su-3997074-v.html">Xem thêm ></a>
                </div>
            </div>
            <div class="box bg-white m-3">
                <iframe width="259" height="183" src="https://www.youtube.com/embed/sd2KKryb5y4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="p-3">
                    <div>
                        <small>Nguồn: <b>Truyền hình VTC1</b></small>
                        <h5 class="py-2 text-justify">Lễ Khai giảng và Trao bằng tốt nghiệp năm 2019 tại Aptech.</h5>
                        <p class="text-justify">Vừa qua (28/07), Lễ tốt nghiệp dành cho các bạn học viên vượt qua hơn 40 bài thi và 4 dự án phần mềm và Chào đón Tân học viên đã diễn ra tại Trung tâm Văn hóa Pháp L’Espace. Buổi lễ có sự tham dự của hơn 200 học sinh và phụ huynh cùng các doanh nghiệp công nghệ tuyển dụng.</p>
                    </div>
                    <a target="_blank" class="text-bold" href="https://www.facebook.com/aptechvietnam.com.vn/videos/2601192076560243">Xem thêm ></a>
                </div>
            </div>
            <!-- End List -->
        </div>
    </section>

    <section class="section-8 py-5 bg-white">
        <h4 class="text-bold text-center">MÔI TRƯỜNG HỌC TẬP CHUYÊN NGHIỆP TẠI APTECH</h4>
        <div class="img-container mt-4 d-flex flex-wrap justify-content-center">
            <?php for($i = 1; $i <= 6; $i++): ?>
                <div class="box m-3">
                    <a data-fancybox="gallery" href="../assets/img/env/eco<?php echo $i ?>-min.png">
                        <img class="w-100" src="../assets/img/env/eco<?php echo $i ?>-min.png">
                    </a>
                </div>
            <?php endfor ?>
        </div>
        <br>
        <div class="text-center">
            <h4 class="text-center text-bold">Bạn muốn học tại môi trường này không?</h4>
            <a href="#regis-form"><button class="btn btn-lg text-bold mt-2 px-5 text-white">Tôi muốn</button></a>
        </div>
    </section>

    <section class="section-9 py-5">
        <h4 class="text-center text-bold text-white">DOANH NGHIỆP NÓI VỀ APTECH</h4>
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
                                                <label class="mb-1 text-bold"><?php echo $quoteCom[$i]->name ?></label>
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
                                                <label class="mb-1 text-bold"><?php echo $quoteCom[$i+1]->name ?></label>
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
                                                <label class="mb-1 text-bold"><?php echo $com->name ?></label>
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

    <section class="section-10 py-5">
        <h4 class="text-white text-center text-bold">CẢM NHẬN CỦA HỌC VIÊN VỀ APTECH</h4>
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
                                        <a class="align-self-end text-bold" href="<?php echo $feelStd[$i]->link; ?>" target="_blank">Xem thêm ></a>
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
                                        <a class="align-self-end text-bold" href="<?php echo $feelStd[$i+1]->link; ?>" target="_blank">Xem thêm ></a>
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
                                        <a class="align-self-end text-bold" href="<?php echo $std->link; ?>" target="_blank">Xem thêm ></a>
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

    <section class="section-11 py-5" id="regis-form">
        <h5 class="text-white text-center text-bold">Đăng ký nhận tài liệu tham khảo và tư vấn miễn phí</h5>
        <div class="pt-4 d-flex justify-content-center flex-wrap">
            <div class="box p-3 pt-0 text-center">
                <img src="./assets/img/course-banner-min.png">
                <h5 class="text-white mt-5 text-uppercase">Khóa học của Aptech với 4 ưu điểm vượt trội:</h5>
                <ul>
                    <li><span class="text-bold">Tiếp thu kiến thức hiệu quả:</span> Ứng dụng phương pháp học Learn By Examples trực quan cùng các phần mềm hỗ trợ minh họa sinh động.</li>
                    <li><span class="text-bold">Lớp học tương tác sôi nổi:</span> Áp dụng phương pháp đào tạo trực tuyến được Aptech triển khai thành công 20 năm nay trên Thế giới và Việt Nam. </li>
                    <li><span class="text-bold">Nhận tài trợ 3.000.000 VNĐ/tháng từ Google:</span> Sử dụng không giới hạn dung lượng: Gmail, Google Drive, Google Meet, Google Photos, Google Classroom. </li>
                    <li><span class="text-bold">Tính ứng dụng cao:</span> Nội dung học giúp giải quyết hiệu quả các vấn đề trong học tập, công việc và cuộc sống.</li>
                </ul>
            </div>
            <div class="box p-3">
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
                    <button type="submit" class="btn btn-warning btn-lg text-bold px-5 align-self-start">NHẬN THÔNG TIN HỌC BỔNG</button>
                </form>
                <p class="text-white text-italic title-sm pt-4 mb-0">Thời gian ưu đãi còn:</p>
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <!-- <p class="text-white text-italic title-lg">Thời gian ưu đãi còn:</p> -->
                    <div class="countdown-box d-flex flex-column align-items-center text-white text-center py-2 px-3 mt-4">
                        <h1 class="countdown-box-days text-bold m-0"></h1>
                        <p class="m-0">Ngày</p>
                    </div>
                    <div class="countdown-box d-flex flex-column align-items-center text-white text-center py-2 px-3 mt-4">
                        <h1 class="countdown-box-hours text-bold m-0"></h1>
                        <p class="m-0">Giờ</p>
                    </div>
                    <div class="countdown-box d-flex flex-column align-items-center text-white text-center py-2 px-3 mt-4">
                        <h1 class="countdown-box-minutes text-bold m-0"></h1>
                        <p class="m-0">Phút</p>
                    </div>
                    <div class="countdown-box d-flex flex-column align-items-center text-white text-center py-2 px-3 mt-4">
                        <h1 class="countdown-box-seconds text-bold m-0"></h1>
                        <p class="m-0">Giây</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-12 py-5 bg-white">
        <div class="fb-comments" data-href="<?php echo $fbComment ?>" width="100%" data-numposts="5"></div>
    </section>
    <!-- End Sections -->

    <!-- Footer -->
    <footer class="text-white text-md-left text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 order-12 order-lg-1">
                    <h4 class="text-uppercase text-bold mb-3 footer-heading">Hệ thống đào tạo lập trình viên quốc tế Aptech</h4>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script async defer src="../assets/js/bootstrap/util.min.js"></script>
    <script async defer src="../assets/js/bootstrap/collapse.min.js"></script>
    <script async defer src="../assets/js/bootstrap/carousel.min.js"></script>
    <script async defer src="../assets/js/bootstrap/button.min.js"></script>

    <!-- Fancybox -->
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

    <!-- Scroll top -->
    <script async defer src="../assets/js/scroll-top<?php echo $ext ?>.js"></script>

    <!-- Countdown -->
    <script async defer src="../assets/js/countdown<?php echo $ext ?>.js"></script>

    <!-- FB SDK -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v5.0&appId=749494412182083&autoLogAppEvents=1"></script>
    <!-- End FB SDK -->
</body>
</html>