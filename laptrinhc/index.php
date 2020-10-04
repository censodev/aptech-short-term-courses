<?php
    include_once '../astc.config.php';

    $titlePage = 'Aptech | C/C++';

    $metaDescription = '4 sai lầm phổ biến khi học lập trình C, học lập trình C++. 3 kinh nghiệm học lập trình C++ từ cơ bản đến nâng cao. Học lập trình C cơ bản cùng phương pháp Đào tạo Human Compiler với Chuyên gia công nghệ. Nhận bộ tài liệu C++ cơ bản dành cho người mới học lập trình miễn phí và Ưu đãi Hè bứt phá 2020.';
    $metaKeywords = 'học lập trình c, hoc lap trinh c, lập trình c, lap trinh c, học lập trình c++, hoc lap trinh c++, ngôn ngữ lập trình c, ngon ngu lap trinh c, học lập trình c cơ bản, hoc lap trinh c co ban, lập trình c nâng cao, lap trinh c nang cao, học c aptech, học c++ aptech';

    $feelStd = json_decode(file_get_contents("../assets/data/feel-std.json"));
    $quoteCom = json_decode(file_get_contents("../assets/data/quote-com.json"));

    $formSubmitRedirect = BASE_URL.'/laptrinhc/dang-ky-thanh-cong';
    $formSubmitSubject = 'Đăng ký khóa học lập trình C/C++';

    $fbComment = BASE_URL.'/laptrinhc';
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
                        <a class="btn regis-btn text-bold text-uppercase px-5 link-scroll font-600 btn-warning" href="#regis-form">Đăng ký</a>
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
        <h3 class="text-center text-bold text-uppercase px-5 text-main">Lý do nào khiến C/C++ là ngôn ngữ đầu tiên bạn nên chọn học?</h3>
        <div class="d-flex justify-content-center pt-3 align-items-center">
            <div class="left-side mr-4 pt-4 px-3">
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

    <section id="section-2" class="section-2 pt-5 px-5">
        <h3 class="text-uppercase text-white text-center text-bold pb-4">Khóa học này dành cho ai?</h3>
        <div class="d-flex sec-2 justify-content-center">
            <div class="text-center d-flex align-items-end px-3 flex-basis-40">
                <img class="w-100" src="./assets/img/Layer 67-min.png" alt="">
            </div>
            <div class="d-flex flex-column justify-content-center px-3 flex-basis-40 pb-4">
                <div class="box d-flex align-items-start flex-column">
                    <img class="pl-3" src="./assets/img/sec2-t1-min.png" alt="">
                    <div class="text-white p-3">
                        <h4>Sinh viên CNTT</h4>
                        <p>Mong muốn bổ sung kiến thức và kỹ năng về ngôn ngữ lập trình.</p>
                    </div>
                </div>
                <div class="box d-flex align-items-start flex-column">
                    <img class="pl-3" src="./assets/img/sec2-t2-min.png" alt="">
                    <div class="text-white p-3">
                        <h4>Học sinh, sinh viên, người đi làm </h4>
                        <p>Người mới bắt đầu học Lập trình căn bản với mục đích tìm hiểu về nghề Lập trình hoặc lấy C/ C++ làm nền tảng học tiếp Lập trình chuyên nghiệp.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-3 pt-5 bg-white">
        <h3 class="text-center text-main text-uppercase text-bold mb-4 px-5">Những quan niệm sai lầm phổ biến khi học Lập trình C/ C++</h3>
        <div class="d-flex justify-content-center wrapper">
            <div class="flex-basis-40 d-flex justify-content-end align-items-end px-3">
                <img class="mw-100" src="./assets/img/sec-3img-min.png" alt="">
            </div>
            <div class="flex-basis-40 px-3 pb-5">
                <div class="d-flex align-items-center mb-3">
                    <img src="./assets/img/x-tick-min.png" alt="">
                    <span class="pl-3 text-bold">Xác định mục tiêu học tập không phù hợp.</span>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <img src="./assets/img/x-tick-min.png" alt="">
                    <span class="pl-3 text-bold">Chạy theo các Công nghệ lập trình mới mà bỏ qua C/ C++.</span>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <img src="./assets/img/x-tick-min.png" alt="">
                    <span class="pl-3 text-bold">Nghĩ việc học Pascal tốt hơn là học C/ C++.</span>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <img src="./assets/img/x-tick-min.png" alt="">
                    <span class="pl-3 text-bold">Coi việc thực hành C/ C++ quan trọng hơn Lý thuyết C/ C++.</span>
                </div>
            </div>
        </div>
    </section>

    <section class="section-4 bg-main py-5">
        <h3 class="text-center text-bold text-white text-uppercase px-5">03 kinh nghiệm học Lập trình C/ C++</h3>
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

    <section class="section-5 py-5 bg-white">
        <h3 class="text-center text-bold text-main text-uppercase px-5">Ưu điểm vượt trội của Khóa học Lập trình C/C++ cho người mới bắt đầu</h3>
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

    <section class="section-6">
        <div class="d-flex justify-content-center align-items-center section-container py-3">
            <h5 class="m-0 text-bold text-white px-5">Kết thúc khóa học, Học viên được làm project dưới sự hướng dẫn của giảng viên và nhận chứng chỉ hoàn thành khóa học</h5>
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

    <section class="section-7 py-5">
        <h3 class="text-center text-bold text-main text-uppercase px-5">Kết quả đạt được sau khóa học</h3>
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

    <section class="section-8 py-5">
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

    <section class="section-9 pt-5 pb-4 bg-white">
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
            <a href="#regis-form" class="btn btn-warning text-bold px-4 mx-3">Tôi muốn</a>
            <img src="./assets/img/caret2-min.png" alt="">
        </div>
    </section>

    <section class="section-10 py-5">
        <h3 class="text-center text-bold text-white px-5">DOANH NGHIỆP NÓI VỀ APTECH</h3>
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

    <section class="section-11 py-5">
        <h3 class="text-main text-center text-bold px-5">CẢM NHẬN CỦA HỌC VIÊN VỀ APTECH</h3>
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

    <section class="section-12 pt-0 pb-5" id="regis-form">
        <div class="pt-4 d-flex justify-content-center flex-wrap">
            <div class="box p-3 pt-0 d-flex text-center flex-basis-40">
                <img class="mw-100 m-auto" src="./assets/img/promotion-min.png" alt="promotion.png">
            </div>
            <div class="box p-3 flex-basis-40">
                <h5 class="text-white mb-3 text-bold text-center">Đăng ký tư vấn<br>và nhận bộ tài liệu tự học C/ C++ miễn phí</h5>
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
                    <button type="submit" class="btn btn-round btn-warning btn-lg text-bold px-5 align-self-end">NHẬN TƯ VẤN</button>
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

    <section class="section-13 py-5 bg-white">
        <h3 class="text-center text-bold text-main px-5">MỌI NGƯỜI NÓI GÌ VỀ APTECH?</h3>
        <div class="fb-comments" data-href="<?php echo $fbComment ?>" width="100%" data-numposts="5"></div>
    </section>
    <!-- End Sections -->

    <!-- Footer -->
    <footer class="text-white text-md-left text-center">
        <div class="container py-5 text-center">
            <h4 class="text-uppercase text-white text-center text-bold">Hệ thống đào tạo lập trình viên quốc tế Aptech</h4>
            <div class="d-flex justify-content-center align-items-center pt-3">
                <div class="px-3">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-geo-alt-fill text-warning" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    </svg> Hà Nội:
                </div>
                <div class="px-3"><span class="text-bold">54 Lê Thanh Nghị</span>, Q. Hai Bà Trưng</div>
                <div class="px-3"><span class="text-bold">285 Đội Cấn</span>, Q. Ba Đình</div>
                <div class="px-3">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-geo-alt-fill text-warning" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    </svg> TP.HCM:
                </div>
                <div class="px-3"><span class="text-bold">212 - 214 Nguyễn Đình Chiểu</span>, Q.3</div>
            </div>
            <a href="mailto:aptech3@aprotrain.com" class="btn btn-lg btn-warning mt-3 px-4" style="line-height:1;border-radius:28px;">
                <span class="text-bold">Hotline: 1800 1147</span>
                <br>
                <small style="font-size:70%">Email: aptech3@aprotrain.com</small>
            </a>
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