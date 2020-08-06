<?php
    include_once '../astc.config.php';

    $titlePage = 'Aptech | Python';

    $feelStd = json_decode(file_get_contents("../assets/data/feel-std.json"));
    $quoteCom = json_decode(file_get_contents("../assets/data/quote-com.json"));

    $formSubmitRedirect = BASE_URL.'/python/dang-ky-thanh-cong';
    $formSubmitSubject = 'Đăng ký khóa học Python';

    $fbComment = BASE_URL.'/python';
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
                        <a class="btn regis-btn bg-main text-dark text-dark text-bold text-uppercase px-5 link-scroll font-600" href="#regis-form">Đăng ký</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Header -->

    <!-- Sections -->
    <section class="section-banner"> 
    	<img src="./assets/img/banner-PC_py-min.jpg" alt="" class="w-100">
    </section>

    <section class="section-1 py-5 bg-white">
        <h3 class="text-center text-bold text-uppercase text-sub px-3">PYTHON LÀ GÌ MÀ HOT ĐẾN VẬY? </h3>
        <div class="d-flex justify-content-center align-items-center">
            <iframe class="flex-basis-40 px-3 pt-3" src="https://www.youtube.com/embed/I-VEiZqVohQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="d-flex flex-column flex-basis-40 px-3 pt-3">
                <div class="d-flex align-items-center text-bold py-2">
                    <img src="./assets/img/dot-min.png" alt="">
                    <span class="pl-3 text-bold">Là ngôn ngữ lập trình làm khuynh đảo giới công nghệ ngày nay!</span>
                </div>
                <div class="d-flex align-items-center text-bold py-2">
                    <img src="./assets/img/dot-min.png" alt="">
                    <span class="pl-3 text-bold">Cú pháp đơn giản, mạch lạc, phù hợp cho người mới bắt đầu.</span>
                </div>
                <div class="d-flex align-items-center text-bold py-2">
                    <img src="./assets/img/dot-min.png" alt="">
                    <span class="pl-3 text-bold">Được nhiều ông trùm Công nghệ yêu thích như Google, Youtube, Instagram, Netflix,...</span>
                </div>
                <div class="d-flex align-items-center text-bold py-2">
                    <img src="./assets/img/dot-min.png" alt="">
                    <span class="pl-3 text-bold">Chiếc chìa khóa vạn năng dẫn nhập vào Thế giới Công nghệ tương lai màu sắc: AI, Machine Learning, Big Data,...</span>
                </div>
            </div>
        </div>
    </section>

    <section id="section-2" class="section-2 pt-5 px-5">
        <h3 class="text-uppercase text-white text-center text-bold pb-4 px-3">Khóa học này dành cho ai?</h3>
        <div class="d-flex sec-2 justify-content-center">
            <div class="text-center d-flex align-items-end px-3 flex-basis-40">
                <img class="w-100" src="./assets/img/Layer 67-min.png" alt="">
            </div>
            <div class="d-flex flex-column justify-content-center px-3 flex-basis-40 pb-4">
                <div class="box d-flex align-items-center mb-2">
                    <img src="./assets/img/sec2-t1-min.png" alt="">
                    <div class="text-white p-3">
                        <h4>Sinh viên CNTT</h4>
                        <p class="mb-0">Muốn đón đầu để mở toang cánh cửa Công nghệ tương lai.</p>
                    </div>
                </div>
                <div class="box d-flex align-items-center mb-2">
                    <img src="./assets/img/sec2-t2-min.png" alt="">
                    <div class="text-white p-3">
                        <h4>Lập trình viên</h4>
                        <p class="mb-0">Đang làm việc tại các Doanh nghiệp, muốn phát triển xa hơn trên con đường sự nghiệp.</p>
                    </div>
                </div>
                <div class="box d-flex align-items-center mb-2">
                    <img src="./assets/img/sec2-t3-min.png" alt="">
                    <div class="text-white p-3">
                        <h4>Học sinh, sinh viên, người đi làm </h4>
                        <p class="mb-0">Muốn lựa chọn Python để bắt đầu gây dựng sự nghiệp Coder.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-3 py-5 bg-main">
        <h3 class="text-center text-bold text-uppercase text-sub px-3">4 ưu điểm vượt trội của khóa học lập trình Python</h3>
        <div class="d-flex justify-content-center pt-3 flex-wrap">
            <div class="box">
                <div class="img-container"><img src="./assets/img/proffessor-min.png"></div>
                <p class="pt-3">
                    <span class="text-bold text-sub">Giảng viên là các Chuyên gia Công nghệ</span>
                    <br>
                    <small>Giúp sinh viên ứng dụng ngay kiến thức mới học vào thực tế</small>
                </p>
            </div>
            <div class="box">
                <div class="img-container"><img class="ml-2" src="./assets/img/time-min.png"></div>
                <p class="pt-3">
                    <span class="text-bold text-sub">Tiết kiệm thời gian học</span>
                    <br>
                    <small>Giáo trình và chương trình học được tối ưu.</small>
                </p>
            </div>
            <div class="box">
                <div class="img-container"><img src="./assets/img/reactjs-min.png"></div>
                <p class="pt-3">
                    <span class="text-bold text-sub">Ngôn ngữ của tương lai</span>
                    <br>
                    <small>Cập nhật chương trình 2020 của Aptech toàn cầu với Công nghệ mới nhất.</small>
                </p>
            </div>
            <div class="box">
                <div class="img-container"><img src="./assets/img/certificate-min.png"></div>
                <p class="pt-3">
                    <span class="text-bold text-sub">Chứng chỉ uy tín</span>
                    <br>
                    <small>Kết thúc khóa học, học viên được nhận chứng chỉ: <span class="text-bold">“Professional Diploma in Python”.</span></small>
                </p>
            </div>
        </div>
    </section>

    <section class="section-4 pt-5 bg-white">
        <h3 class="text-center text-sub text-uppercase text-bold mb-4 px-3">Những sai lầm phổ biến khi học Lập trình Python</h3>
        <div class="d-flex justify-content-center wrapper">
            <div class="flex-basis-40 d-flex justify-content-end align-items-end px-3">
                <img class="mw-100" src="./assets/img/sec-3img-min.png" alt="">
            </div>
            <div class="flex-basis-40 px-3 pb-5 pt-3">
                <div class="d-flex align-items-center mb-3">
                    <img src="./assets/img/x-tick-min.png" alt="">
                    <span class="pl-3 text-bold">Chủ quan không thực hành lại vì nhìn vào cú pháp đơn giản.</span>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <img src="./assets/img/x-tick-min.png" alt="">
                    <span class="pl-3 text-bold">Viết code sử dụng quá nhiều thư viện cùng 1 lúc mà chưa hiểu bản chất.</span>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <img src="./assets/img/x-tick-min.png" alt="">
                    <span class="pl-3 text-bold">Không test code đều đặn, cẩn thận.</span>
                </div>
            </div>
        </div>
    </section>

    <section class="section-5 py-5 bg-sub">
        <h3 class="text-center text-bold text-white text-uppercase px-3">03 kinh nghiệm học Python</h3>
        <div class="d-flex justify-content-between px-3 flex-wrap">
            <div class="box pt-4 d-flex justify-content-center flex-grow-1">
                <img src="./assets/img/sec-4-1-min.png" alt="Học chắc từ những thứ cơ bản như: Các cú pháp cơ bản. tư duy hướng đối tượng,...">
            </div>
            <div class="box pt-4 d-flex justify-content-center flex-grow-1">
                <img src="./assets/img/sec-4-2-min.png" alt="Thực hành thật nhiều, tham gia vào các dự án thực tế">
            </div>
            <div class="box pt-4 d-flex justify-content-center flex-grow-1">
                <img src="./assets/img/sec-4-3-min.png" alt="Code trực tiếp trên các cửa sổ dòng lệnh của Python hoặc trên Web">
            </div>
        </div>
    </section>

    <section class="section-6 py-5 bg-white">
        <h3 class="text-bold text-center text-uppercase text-sub px-3">Python - chiếc chìa khóa vạn năng</h3>
        <h6 class="text-center">Dẫn nhập bạn vào thế giới Công nghệ tương lai đầy màu sắc</h6>
        <div class="d-flex justify-content-center pt-3 px-4 flex-wrap">
            <div class="box my-3 mx-3">
                <img class="" src="./assets/img/Group 14-min.png" alt="">
                <p class="pt-3 text-center text-bold text-sub">Web và các ứng dụng web</p>
            </div>
            <div class="box my-3 mx-3">
                <img class="" src="./assets/img/Group 15-min.png" alt="">
                <p class="pt-3 text-center text-bold text-sub">Khoa học Dữ liệu (Data Science)</p>
            </div>
            <div class="box my-3 mx-3">
                <img class="" src="./assets/img/Group 16-min.png" alt="">
                <p class="pt-3 text-center text-bold text-sub">Machine Learning và Trí thông<br>minh nhân tạo (AI)</p>
            </div>
            <div class="box my-3 mx-3">
                <img class="" src="./assets/img/Group 17-min.png" alt="">
                <p class="pt-3 text-center text-bold text-sub">IoT – Internet Vạn Vật</p>
            </div>
        </div>
        <div class="d-flex align-items-center mt-2 justify-content-center flex-wrap">
            <h4 class="text-bold text-center px-4 text-sub">Bạn có muốn học khóa học đầy thú vị này?</h4>
            <img src="./assets/img/cta-left-min.png" alt="">
            <a href="#regis-form">
                <button class="btn btn-lg bg-main text-bold px-5 text-dark mx-3">Tôi muốn</button>
            </a>
            <img src="./assets/img/cta-right-min.png" alt="">
        </div>
    </section>

    <section class="section-7 py-5">
        <h3 class="text-white text-center text-bold px-3">BÁO CHÍ NÓI VỀ APTECH</h3>
        <div class="d-flex mt-4 justify-content-center flex-wrap">
            <!-- List -->
            <div class="box bg-white m-3 d-flex flex-column">
                <img height="183" width="259" src="./assets/img/Layer_54-min.png">
                <div class="p-3">                    
                    <small>Nguồn: <span class="text-bold">Vietnamnet.vn</span></small>
                    <h5 class="py-2 text-justify text-bold">Lễ ký kết hợp tác đào tạo Công nghệ 4.0 cho các Trường đại học.</h5>
                    <p class="text-justify">Nhằm giúp Việt Nam đào tạo đội ngũ giảng viên CN 4.0, Bộ GD&ĐT phối hợp với Tập đoàn Aptech tổ chức Khóa đào tạo Công nghệ 4.0 cho các giảng viên đại học.</p>
                </div>
            </div>
            <div class="box bg-white m-3 d-flex flex-column">
                <iframe width="259" height="183" src="https://www.youtube.com/embed/Z_VRZ8RBpkg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="p-3">                    
                    <small>Nguồn: <span class="text-bold">Truyền hình VTV6</span></small>
                    <h5 class="py-2 text-justify text-bold">Aptech - Lễ ký kết hợp tác đào tạo Công nghệ 4.0 cho giảng viên các Trường đại học.</h5>
                    <p class="text-justify">Ngày 03/07, Bộ GD & ĐT cùng với Tập đoàn Aptech tổ chức Hội thảo Giải pháp đào tạo nhân lực CNTT cho CMCN 4.0 với sự tham gia của Đại sứ quán Ấn Độ, các tập đoàn công nghệ hàng đầu Thế giới như Microsoft, Oracle và lãnh đạo các trường Đại học.</p>
                </div>
            </div>
            <div class="box bg-white m-3 d-flex flex-column">
            <iframe width="259" height="183" src="https://www.youtube.com/embed/c6kE2nS1yAM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="p-3">                    
                    <small>Nguồn: <span class="text-bold">Giaoducthoidai.vn</span></small>
                    <h5 class="py-2 text-justify text-bold">Cơ hội việc làm tại ngày hội tuyển dụng Aptech Job Fair 2019.</h5>
                    <p class="text-justify">Sáng (20/04) tại Hà Nội, Aptech tổ chức Ngày hội tuyển dụng Aptech job fair 2019, đây là dip để các bạn trẻ có cơ hội tìm hiểu về ngành nghề mà mình yêu thích, cũng như đăng ký ứng tuyển trực tiếp với các Doanh nghiệp tuyển dụng.</p>
                </div>
            </div>
            <div class="box bg-white m-3 d-flex flex-column">
                <iframe width="259" height="183" src="https://www.youtube.com/embed/sd2KKryb5y4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="p-3">                    
                    <small>Nguồn: <span class="text-bold">Truyền hình VTC1</span></small>
                    <h5 class="py-2 text-justify text-bold">Lễ Khai giảng và Trao bằng tốt nghiệp năm 2019 tại Aptech.</h5>
                    <p class="text-justify">Vừa qua (28/07), Lễ tốt nghiệp dành cho các bạn học viên vượt qua hơn 40 bài thi và 4 dự án phần mềm và Chào đón Tân học viên đã diễn ra tại Trung tâm Văn hóa Pháp L’Espace. Buổi lễ có sự tham dự của hơn 200 học sinh và phụ huynh cùng các doanh nghiệp công nghệ tuyển dụng.</p>
                </div>
            </div>
            <!-- End List -->
        </div>
    </section>

    <section class="section-8 py-5 bg-white">
        <h3 class="text-bold text-center text-sub px-3">MÔI TRƯỜNG HỌC TẬP CHUYÊN NGHIỆP TẠI APTECH</h3>
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
            <h4 class="text-bold text-sub">Bạn muốn học tại môi trường hiện đại này?</h4>
            <div class="d-flex align-items-center mt-4 justify-content-center">
                <img src="./assets/img/cta-left-min.png" alt="">
                <a href="#regis-form">
                    <button class="btn btn-lg bg-main text-bold px-5 text-dark mx-3">Tôi muốn</button>
                </a>
                <img src="./assets/img/cta-right-min.png" alt="">
            </div>
        </div>
    </section>

    <section class="section-9 py-5">
        <h3 class="text-center text-bold text-sub px-3">DOANH NGHIỆP NÓI VỀ APTECH</h3>
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
        <h3 class="text-white text-center text-bold px-3">CẢM NHẬN CỦA HỌC VIÊN VỀ APTECH</h3>
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
                                            <p class="text-bold"><?php echo $feelStd[$i]->quote ?></p>
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
                                            <p class="text-bold"><?php echo $feelStd[$i+1]->quote; ?></p>
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
                                            <p class="text-bold"><?php echo $std->quote ?></p>
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


    <section class="section-11 pt-0 pb-5 bg-main" id="regis-form">
        <div class="pt-4 d-flex justify-content-center flex-wrap">
            <div class="box p-3 pt-0 d-flex text-center flex-basis-40">
                <img class="mw-100 m-auto" src="./assets/img/promotion-min.png" alt="promotion-min.png">
            </div>
            <div class="box p-3 flex-basis-40">
                <h5 class="text-dark mb-3 text-bold text-center">Đăng ký tư vấn<br>và nhận bộ tài liệu tự học Python miễn phí</h5>
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
                    <button type="submit" class="btn btn-round bg-sub text-white btn-lg text-bold px-5 align-self-end">NHẬN TƯ VẤN</button>
                </form>
                <p class="text-dark text-italic pt-4 mb-0">Thời gian ưu đãi còn:</p>
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

    <section class="section-12 py-5 bg-white">
        <h3 class="text-center text-bold text-sub">BẠN NGHĨ SAO VỀ KHÓA HỌC PYTHON?</h3>
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
                                <td class="text-bold px-3">Tel: <a href="tel:1800 1141" class="text-white">1800 1141</a></td>
                                <td>Email: <a href="mailto:aptech1@aprotrain.com" target="_blank" class="text-white">aptech1@aprotrain.com</a></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><span class="text-bold">54 Lê Thanh Nghị</span>, Q. Hai Bà Trưng</td>
                                <td class="text-bold px-3">Tel: <a href="tel:1800 1147" class="text-white">1800 1147</a></td>
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
    <script async defer>
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
    <script async defer>
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