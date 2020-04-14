<?php
    $mode = 'dev';
    // $mode = 'prod';

    $ext = '';

    switch ($mode) {
        case 'prod': $ext = '.min'; break;
        case 'dev': $ext = ''; break;
    }

    $titlePage = 'Aptech | PHP';
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KCD5HJG');</script>
    <!-- End Google Tag Manager -->
    
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $titlePage ?></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../assets/css/master<?php echo $ext ?>.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/style<?php echo $ext ?>.css">
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
                      })(document, window, 'https://widgetv4.subiz.com/static/js/app.js', 'subiz');
                      subiz('setAccount', 'acqpeyxnjmvbdavhzcwm');
                    </script>
<!-- End Subiz -->

</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KCD5HJG"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

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
                        <a class="btn regis-btn text-uppercase px-5 link-scroll font-600" href="#regis-form">Đăng ký</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Header -->

    <!-- Sections -->
    <section class="section-banner"> 
    	<img src="./assets/img/banner-PC-min.png" alt="" class="w-100">
    </section>

    <section class="section-1 py-5 bg-white">
        <h5 class="text-center text-bold">NHỮNG LÍ DO BẠN PHẢI HỌC NGÔN NGỮ LẬP TRÌNH PHP NGAY HÔM NAY</h5>
        <div class="d-flex justify-content-center pt-3 align-items-center">
            <iframe src="https://www.youtube.com/embed/I-VEiZqVohQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <ul>
                <li class="text-bold">PHP là ngôn ngữ lập trình Web phổ biển nhất thế giới, thân thiện với người mới bắt đầu.</li>
                <li class="text-bold">Trên thế giới, cứ 10 website ra đời thì có 8 website chạy bằng PHP.</li>
                <li class="text-bold">Cơ hội việc làm rộng mở cả ở trong và ngoài nước.</li>
                <li class="text-bold">Mức lương của Lập trình viên PHP từ 800 - 1500$/tháng.</li>
            </ul>
        </div>
    </section>

    <section id="section-2">
        <img class="w-100" src="./assets/img/for-who-min.png">
    </section>

    <section class="section-3 py-5">
        <h4 class="text-center text-bold text-white">05 LÝ DO CẦN HỌC KHÓA CHUYÊN GIA LẬP TRÌNH WEB TẠI APTECH</h4>
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
                    <small>Cập nhật chương trình 2019 của Aptech toàn cầu với các công nghệ Web mới nhất.</small>
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
                    <small> Kết thúc khóa học học viên được nhận chứng chỉ <span class="text-bold">“Chuyên viên lập trình Web” (Aptech Certified Web Programmer)</span> do Aptech cấp.</small>
                </p>
            </div>
        </div>
    </section>

    <section class="section-4">
        <div class="d-flex justify-content-center align-items-center section-container py-3">
            <h5 class="m-0 text-bold text-white text-center">Hoàn thành khóa học, học viên được giới thiệu làm việc tại các Doanh nghiệp CNTT lớn</h5>
            <button class="btn rounded-pill bg-white text-bold px-4 py-0 ml-5" data-toggle="collapse" data-target="#detailCollapse">🡢 Xem chi tiết khóa học</button>
        </div>
        <div class="collapse py-4" id="detailCollapse">
            <div class="d-flex justify-content-center">
                <img src="./assets/img/course-detail.jpg">
            </div>
        </div>
    </section>

    <section class="section-5 py-5 bg-white">
        <h4 class="text-bold text-center">BẠN SẼ LÀM ĐƯỢC GÌ SAU KHÓA HỌC "CHUYÊN GIA LẬP TRÌNH WEB"</h4>
        <h6 class="text-center">Hoàn thành khóa học Học viên có khả năng xây dựng các website Thương mại điện tử, website tin tức, tuyển dụng, website doanh nghiệp… tự tin ứng tuyển vào các Doanh nghiệp CNTT.</h6>

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
                    <h6 class="text-bold p-0">Đề tài: Thiết kế Website bán hàng BAGBAG</h6>
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
                    <h6 class="text-bold p-0">Đề tài: Thiết kế website bán hàng Eyeonic</h6>
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
                    <h6 class="text-bold p-0">Đề tài: Hẹn hò phố</h6>
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
                    <h6 class="text-bold p-0">Đề tài: Website tin tức Báo Việt</h6>
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

    <section class="section-6 py-5">
        <h4 class="text-bold text-center">HỌC XONG BẠN SẼ LÀM VIỆC Ở ĐÂU</h4>
        <div class="d-flex justify-content-center mt-5 flex-wrap">
            <div class="left-boxes d-flex flex-wrap justify-content-end">
                <!-- List -->
                <div class="card m-3">
                    <div class="card-header position-relative py-3">
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
                    <div class="card-header position-relative py-3">
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
                    <div class="card-header position-relative py-3">
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
                    <div class="card-header position-relative py-3">
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
            <div class="box m-3">
                <img class="w-100" src="./assets/img/257A1998-min.png">
            </div>
            <div class="box m-3">
                <img class="w-100" src="./assets/img/257A2026-min.png">
            </div>
            <div class="box m-3">
                <img class="w-100" src="./assets/img/IMG_8577-min.png">
            </div>
            <div class="box m-3">
                <img class="w-100" src="./assets/img/12.17_Thiet_ke_3D_285_Doi_Can-10-min.png">
            </div>
            <div class="box m-3">
                <img class="w-100" src="./assets/img/12.17_Thiet_ke_3D_285_Doi_Can-5-min.png">
            </div>
            <div class="box m-3">
                <img class="w-100" src="./assets/img/12.17_Thiet_ke_3D_285_Doi_Can-6-min.png">
            </div>
        </div>
    </section>

    <section class="section-9 py-5">
        <h4 class="text-center text-bold">DOANH NGHIỆP NÓI GÌ VỀ APTECH</h4>
        <div class="py-3 d-flex justify-content-center">
            <div id="carouselQuotesCompanies" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="d-flex justify-content-center flex-wrap">
                            <div class="card m-3">
                                <div class="card-body px-5 d-flex flex-column justify-content-between">
                                    <div>
                                        <img src="./assets/img/quote-min.png">
                                    </div>
                                    <p class="text-bold pt-3">Usol Việt Nam đã tiếp nhận sinh viên Aptech vào làm việc từ nhiều năm nay. Chúng tôi đều hài lòng về họ.</p>
                                    <div class="d-flex align-items-center pt-2">
                                        <img class="avt" src="./assets/img/Layer_56-min.png">
                                        <div class="pl-3">
                                            <label class="mb-1 text-bold">Ông Hiroshi Watabe</label>
                                            <p class="m-0">TGĐ Công ty TNHH Usol Việt Nam</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-3">
                                <div class="card-body px-5 d-flex flex-column justify-content-between">
                                    <div>
                                        <img src="./assets/img/quote-min.png">
                                    </div>
                                    <p class="text-bold pt-3">Chúng tôi tuyển dụng sinh viên Aptech vì khả năng thích ứng môi trường làm việc của họ rất tốt.</p>
                                    <div class="d-flex align-items-center pt-2">
                                        <img class="avt" src="./assets/img/Layer_57-min.png">
                                        <div class="pl-3">
                                            <label class="mb-1 text-bold">Ông Hoàng Hải</label>
                                            <p class="m-0">GĐ Tổng hợp Công ty CP Giải pháp Tin học IFI Solution</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center flex-wrap">
                            <div class="card m-3">
                                <div class="card-body px-5 d-flex flex-column justify-content-between">
                                    <div>
                                        <img src="./assets/img/quote-min.png">
                                    </div>
                                    <p class="text-bold pt-3">Aptech có cái hay là các thầy biết doanh nghiệp cần gì, chúng tôi không cần những thứ rườm rà, chúng tôi cần những thứ đi vào thực tế. Aptech đã rút gọn tất cả những thời gian này.</p>
                                    <div class="d-flex align-items-center pt-2">
                                        <img class="avt" src="./assets/img/LeMaiAnh-min.jpg">
                                        <div class="pl-3">
                                            <label class="mb-1 text-bold">Ông Lê Mai Anh</label>
                                            <p class="m-0"> Phó chủ tịch cấp cao, Giám đốc Thị trường Nhật Bản Công ty CP SmartOS</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-3">
                                <div class="card-body px-5 d-flex flex-column justify-content-between">
                                    <div>
                                        <img src="./assets/img/quote-min.png">
                                    </div>
                                    <p class="text-bold pt-3">Điểm mạnh của các bạn Aptech là thời gian thực hành nhiều nên bắt nhịp với ông việc nhanh. Đây là lợi thế ban đầu trong ứng tuyển.</p>
                                    <div class="d-flex align-items-center pt-2">
                                        <img class="avt" src="./assets/img/HoSonTung-min.jpg">
                                        <div class="pl-3">
                                            <label class="mb-1 text-bold">Ông Hồ Sơn Tùng</label>
                                            <p class="m-0">PGĐ Công ty CP truyền thông Lạc Hồng</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselQuotesCompanies" role="button" data-slide="prev">
                    <div class="carousel-control-icon">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </div>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselQuotesCompanies" role="button" data-slide="next">
                    <div class="carousel-control-icon">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </div>
                    <span class="sr-only">Next</span>
                </a>
                <ol class="carousel-indicators">
                    <li data-target="#carouselQuotesCompanies" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselQuotesCompanies" data-slide-to="1"></li>
                </ol>
            </div>
        </div>
    </section>

    <section class="section-10 py-5">
        <h4 class="text-white text-center text-bold">CẢM NHẬN CỦA HỌC VIÊN VỀ APTECH</h4>
        <div class="pt-4 pb-4 d-flex justify-content-center">
            <div id="carouselFeelStd" class="carousel slide pt-5">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="d-flex justify-content-center flex-wrap">
                            <div class="card m-3">
                                <div class="card-body position-relative d-flex flex-column px-4">
                                    <div class="img-container position-absolute">
                                        <img src="./assets/img/Layer_61-min.png">
                                    </div>
                                    <div class="title">
                                        <h5 class="text-bold mb-1">NGUYỄN TRUNG NGHĨA</h5>
                                        <small class="text-italic">Gương mặt tiêu biểu Aptech 2018</small>
                                    </div>
                                    <p class="text-bold font-italic pt-5 text-justify">“Aptech là một nơi đặc biệt với những đứa trẻ thích gõ code hơn ngồi đọc sách. Nơi mà những thử thách thực tế về lập trình, hay những kinh nghiệm cần thiết ở doanh nghiệp không còn lạ lẫm với chúng em nữa. Khi nhắc đến Aptech, nhà tuyển dụng không còn lo lắng vấn đề thiếu kinh nghiệm làm việc thực tế của ứng viên – vốn vẫn luôn là vấn đề chung của sinh viên mới ra trường.”</p>
                                    <a class="align-self-end text-bold" href="https://aptechvietnam.com.vn/BAI-DIEN-VAN-CHAM-VAO-TRAI-TIM-MOI-NGUOI" target="_blank">Xem thêm ></a>
                                </div>
                            </div>
                            <div class="card m-3">
                                <div class="card-body position-relative d-flex flex-column px-4">
                                    <div class="img-container position-absolute">
                                        <img src="./assets/img/Layer_62-min.png">
                                    </div>
                                    <div class="title">
                                        <h5 class="text-bold mb-1">LÊ THỊ SƠN CA</h5>
                                        <small class="text-italic">Thủ khoa Aptech 2018</small>
                                    </div>
                                    <p class="text-bold font-italic pt-5 text-justify">“Thế mạnh của mình là về tư duy logic và tìm hiểu về công nghệ. Và mình cũng muốn được làm việc trong một ngành giúp mình có thể hiểu được thế giới đang phát triển theo những xu hướng nào. Đó là 2 nguyên nhân chính khiến mình quyết định theo đuổi CNTT và Aptech chính là cái tên đầu tiên mà mình lựa chọn.”</p>
                                    <a class="align-self-end text-bold" href="https://aptechvietnam.com.vn/HANH-TRINH-THEO-DUOI-DAM-ME-CUA-NU-THU-KHOA-APTECH" target="_blank">Xem thêm ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center flex-wrap">
                            <div class="card m-3">
                                <div class="card-body position-relative d-flex flex-column px-4">
                                    <div class="img-container position-absolute">
                                        <img src="./assets/img/5-min.png">
                                    </div>
                                    <div class="title">
                                        <h5 class="text-bold mb-1">NGUYỄN HỮU QUANG</h5>
                                        <small class="text-italic">Sinh viên Aptech, Giám đốc điều hành EXE Corp</small>
                                    </div>
                                    <p class="text-bold font-italic pt-5 text-justify">“Khi học tại Aptech, mình được thực hành trực tiếp ngay sau lý thuyết nên nhờ đó ứng dụng được rất nhanh những kiến thức đã học. Có thể nói quá trình học tại đây đã hỗ trợ mình rất nhiều cho những thành tựu ngày hôm nay”</p>
                                    <a class="align-self-end text-bold" href="https://aptechvietnam.com.vn/nguyen-huu-quang" target="_blank">Xem thêm ></a>
                                </div>
                            </div>
                            <div class="card m-3">
                                <div class="card-body position-relative d-flex flex-column px-4">
                                    <div class="img-container position-absolute">
                                        <img src="./assets/img/6-min.png">
                                    </div>
                                    <div class="title">
                                        <h5 class="text-bold mb-1">NGUYỄN LƯƠNG BẰNG</h5>
                                        <small class="text-italic">Sinh viên Aptech, cha đẻ Freaking Math & Wifi Chùa</small>
                                    </div>
                                    <p class="text-bold font-italic pt-5 text-justify">“Mình rất may mắn khi được học tại Aptech. Tại đây, mình được gặp bạn cùng đam mê, gặp thầy hướng dẫn nhiệt tình. Nếu không có những tháng ngày học tại Aptech, có lẽ mình đã không có được thành công hôm nay”</p>
                                    <a class="align-self-end text-bold" href="https://aptechvietnam.com.vn/nguyen-luong-bang-0" target="_blank">Xem thêm ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center flex-wrap">
                            <div class="card m-3">
                                <div class="card-body position-relative d-flex flex-column px-4">
                                    <div class="img-container position-absolute">
                                        <img src="./assets/img/4-min.png">
                                    </div>
                                    <div class="title">
                                        <h5 class="text-bold mb-1">NGÔ THỊ THU HIỀN</h5>
                                        <small class="text-italic">Sinh viên Aptech, kỹ sư cầu nối của FPT Software 5 năm liền tại Nhật Bản</small>
                                    </div>
                                    <p class="text-bold font-italic pt-5 text-justify">“Khi học ở Aptech, mình được tham gia thực hiện các bài tập, dự án theo tiêu chuẩn thực tế cùng thầy và các chuyên gia. Những kiến thức mình học được ở Aptech rất thực tế, có thể áp dụng vào công việc ngay. Aptech đào tạo nền tảng, luôn cập nhật công nghệ mới nên khi đi phỏng vấn, việc mình học tại Aptech cũng là một thuận lợi.”</p>
                                    <a class="align-self-end text-bold" href="https://aptechvietnam.com.vn/ngo-thu-huyen-manh-ghep-xinh-dep-tren-ban-do-aptech" target="_blank">Xem thêm ></a>
                                </div>
                            </div>
                            <div class="card m-3">
                                <div class="card-body position-relative d-flex flex-column px-4">
                                    <div class="img-container position-absolute">
                                        <img src="./assets/img/nguyen_khac_thanh-min.png">
                                    </div>
                                    <div class="title">
                                        <h5 class="text-bold mb-1">NGUYỄN KHẮC THÀNH</h5>
                                        <small class="text-italic">Trưởng nhóm CNTT Ngân hàng VP Bank, Tốt nghiệp 2019, mức lương 1500$</small>
                                    </div>
                                    <p class="text-bold font-italic pt-5 text-justify">“Aptech là nơi đào tạo hướng dẫn và tạo cho các bạn những tư duy, nền tảng cơ bản để các bạn có thể tiếp cận với công nghệ mới một cách nhanh nhất, hiệu quả nhất.”</p>
                                    <!-- <a class="align-self-end text-bold" href="https://aptechvietnam.com.vn/nguyen-luong-bang-0" target="_blank">Xem thêm ></a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselFeelStd" role="button" data-slide="prev">
                    <div class="carousel-control-icon">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </div>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselFeelStd" role="button" data-slide="next">
                    <div class="carousel-control-icon">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </div>
                    <span class="sr-only">Next</span>
                </a>
                <ol class="carousel-indicators">
                    <li data-target="#carouselFeelStd" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselFeelStd" data-slide-to="1"></li>
                    <li data-target="#carouselFeelStd" data-slide-to="2"></li>
                </ol>
            </div>
        </div>
    </section>

    <section class="section-11 py-5" id="regis-form">
        <h5 class="text-white text-center text-bold">Đăng ký nhận tài liệu tham khảo và tư vấn miễn phí</h5>
        <div class="pt-4 d-flex justify-content-center flex-wrap">
            <div class="box p-3 text-center">
                <h6 class="mt-2 text-white text-bold">TẶNG GÓI HỖ TRỢ KHAI NGHIỆP DO <br>DOANH NGHIỆP TÀI TRỢ</h6>
                <img class="mt-3" src="./assets/img/course-banner.jpg">
            </div>
            <div class="box p-3">
                <form class="d-flex flex-column" action="./sendmail.php" method="POST">
                    <input class="form-control form-control-lg mb-3 pl-4" type="" name="txtName" placeholder="Họ và tên" required>
                    <input class="form-control form-control-lg mb-3 pl-4" type="email" name="txtEmail" placeholder="Email" required>
                    <input class="form-control form-control-lg mb-3 pl-4" type="tel" name=txtPhone placeholder="Số điện thoại" required>
                    <input class="form-control form-control-lg mb-3 pl-4" type="" name="dateBirth" placeholder="Năm sinh">
                    <select class="form-control form-control-lg mb-3 pl-4"name=slCenter required>
                           <option value>Chọn địa điểm học</option>
                           <option value="aptech1@aprotrain.com">Tòa nhà Aptech, 285 Đôi Cấn, Ba Đình, Hà Nội</option>
                           <option value="aptech3@aprotrain.com">Tòa nhà Aptech, 54 Lê Thanh Nghị, Hai Bà Trưng, Hà Nội</option>
                        </select>
                    <button type="submit" class="btn btn-lg text-bold bg-white rounded-pill px-5 align-self-end">ĐĂNG KÝ NGAY</button>
                </form>
                <p class="text-white text-italic">Thời gian ưu đãi còn:</p>
                <div class="d-flex">
                    <div class="countdown-box d-flex flex-column align-items-center text-white text-center py-2 px-3 mr-4">
                        <h1 class="countdown-box-days text-bold m-0"></h1>
                        <p class="m-0">Ngày</p>
                    </div>
                    <div class="countdown-box d-flex flex-column align-items-center text-white text-center py-2 px-3 mr-4">
                        <h1 class="countdown-box-hours text-bold m-0"></h1>
                        <p class="m-0">Giờ</p>
                    </div>
                    <div class="countdown-box d-flex flex-column align-items-center text-white text-center py-2 px-3 mr-4">
                        <h1 class="countdown-box-minutes text-bold m-0"></h1>
                        <p class="m-0">Phút</p>
                    </div>
                    <div class="countdown-box d-flex flex-column align-items-center text-white text-center py-2 px-3 mr-4">
                        <h1 class="countdown-box-seconds text-bold m-0"></h1>
                        <p class="m-0">Giây</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-12 py-5 bg-white">
        <h4 class="text-center text-bold">MỌI NGƯỜI NÓI GÌ VỀ APTECH?</h4>
        <div class="fb-comments" data-href="https://aptechvietnam.com.vn/php" width="100%" data-numposts="5"></div>
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
                                <td class="text-bold px-3">Tel: <a href="tel:1800 1147" class="text-white">1800 1147</a></td>
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
    <button class="btn" id="scroll-top-btn"><i class="fas fa-arrow-up"></i></button>
    <!-- End scroll button -->

    <!-- FB SDK -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v5.0&appId=749494412182083&autoLogAppEvents=1"></script>
    <!-- End FB SDK -->

    <!-- jQuery Bootstrap4 Popperjs -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/2d0edabe59.js" crossorigin="anonymous"></script>

    <!-- Scroll top -->
    <script type="text/javascript" src="../assets/js/scroll-top<?php echo $ext ?>.js"></script>

    <!-- Carousel -->
    <script type="text/javascript">
        $('.carousel').carousel('pause');
    </script>

    <!-- Countdown -->
    <script type="text/javascript" src="../assets/js/countdown<?php echo $ext ?>.js"></script>

<!-- đưa nút chat sang trái -->
<style>
		  #fb-root > div.fb_dialog{
			 right: initial !important;
			 left: 18pt;
			 z-index: 9999999 !important;
		  }
		  .fb-customerchat.fb_invisible_flow.fb_iframe_widget iframe {
			 right: initial !important;
			 left: 18pt !important;
		  }
	</style>
<!-- Ket thuc dua nut chat sang trai -->


<!-- Load Facebook chat -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v6.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your customer chat code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="371202429573648"
  logged_in_greeting="Xin chào! Aptech có thể giúp gì cho bạn!"
  logged_out_greeting="Xin chào! Aptech có thể giúp gì cho bạn!">
      </div>


</body>
</html>