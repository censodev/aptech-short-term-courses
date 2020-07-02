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

    $titlePage = 'Aptech | Java';

    $feelStd = json_decode(file_get_contents("../assets/data/feel-std.json"));
    $quoteCom = json_decode(file_get_contents("../assets/data/quote-com.json"));

    $formSubmitRedirect = $baseUrl.'/java/dang-ky-thanh-cong';
    $formSubmitSubject = 'Đăng ký khóa học lập trình Java';

    $fbComment = $baseUrl.'/java';
?>

<!Doctype html>
<html lang="en">
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

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/master<?php echo $ext ?>.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/style<?php echo $ext ?>.css">
    <title><?php echo $titlePage ?></title>
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

  	<div class="banner section-banner">
        <img class="w-100" src="./assets/img/banner-PC_java-min.jpg"> 
    </div>
    <div class="bg-white">
    	<div class="container py-5">
    		<h3 class="text-center text-bold text-uppercase title mb-4">03 lý do bạn cần phải học khoá java ngay hôm nay</h3>
    		<div class="row reason mt-4">
    			<div class="col-md-6 bodered">
    				<!-- Youtube -->
    				<iframe class="youtube-block" src="https://www.youtube.com/embed/I-VEiZqVohQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    			</div>
    			<div class="col-md-6">
    				<div class="content mt-3">
    					<img src="./assets/img/java-min.png" alt="">
    					<span class="text d-block">Java là ngôn ngữ lập trình phổ biến bậc nhất thế giới.</span>
    				</div>
    				<div class="content mt-5">
    					<img src="./assets/img/responsive-min.png" alt="">
    					<span class="text d-block">Lập trình cho mọi nền tảng Desktop, Web, Mobile.</span>
    				</div>
    				<div class="content mt-5">
    					<img src="./assets/img/money-min.png" alt="">
    					<span class="text d-block">Mức lương khởi điểm cho Lập trình viên Java tối thiểu 800USD/tháng.
    					</span>
    				</div>
    			</div>
    		</div>
    	</div>	
    </div>	
      
    <section id="section-2" class="section-2 pt-5 px-5">
        <h4 class="text-uppercase text-white text-center text-bold pb-5">Khóa học này dành cho ai?</h4>
        <div class="d-flex sec-2">
            <div class="who-banner text-center mr-5 d-flex align-items-end">
                <img class="w-100" src="./assets/img/Layer 67-min.png" alt="">
            </div>
            <div class="who-title d-flex flex-column justify-content-center">
                <div class="d-flex who-title_item align-items-center mb-5">
                    <img src="./assets/img/sec2-t1-min.png" alt="">
                    <div class="text-white ml-4">
                        <h5>Sinh viên CNTT</h5>
                        <small>Muốn học bài bản, có khả năng thực chiến với Javascript.</small>
                    </div>
                </div>
                <div class="d-flex who-title_item align-items-center mb-5">
                    <img src="./assets/img/sec2-t2-min.png" alt="">
                    <div class="text-white ml-4">
                        <h5>Lập trình viên </h5>
                        <small>Đang làm việc tại các Doanh nghiệp muốn bổ sung kiến thức và kỹ năng Javascript để lập trình phục vụ cho công việc.</small>
                    </div>
                </div>
                <div class="d-flex who-title_item align-items-center mb-5">
                    <img src="./assets/img/sec2-t3-min.png" alt="">
                    <div class="text-white ml-4">
                        <h5>Học sinh, sinh viên, người đi làm</h5>
                        <small>Mới bắt đầu tìm hiểu về lập trình.</small>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="banner-3 py-5 bg-white">
        <h3 class="text-center text-bold text-uppercase">Ưu điểm vượt trội của khoá học lập trình java tại aptech</h3>
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
                    <small> Kết thúc khóa học học viên được nhận chứng chỉ <span class="text-bold">“Chuyên viên lập trình Web” (Aptech Certified Web Programmer)</span> do Aptech cấp.</small>
                </p>
            </div>
        </div>
    </div>

  	<div class="banner-4">
  		<div class="bn-1  float-left">
  			<div class="text  d-flex justify-content-center text-center">Hoàn thành khoá học, học viên được giới thiệu làm việc tại các Doanh nghiệp CNTT lớn.</div>
  		</div>
  		<div class="bn-2 float-right">
  			<div class="detail">
  				<button class="btn rounded-pill bg-white text-bold px-4 py-2 ml-5" data-toggle="collapse" data-target="#detailCollapse">🡢 Xem chi tiết khóa học</button>
  			</div>
  		</div>
    </div>
    <div class="banner-4-mb flex-column align-items-center py-3">
        <div class="text d-flex justify-content-center text-center p-2 text-bold">Hoàn thành khoá học, học viên được giới thiệu làm việc tại các Doanh nghiệp CNTT lớn.</div>
        <button class="text-white btn rounded-pill text-bold px-5 mb-3" data-toggle="collapse" data-target="#detailCollapse">🡢 Xem chi tiết khóa học</button>
    </div>
    <div class="collapse banner-4-collapse py-4" id="detailCollapse">
        <div class="d-flex flex-column align-items-center">
            <!-- <img class="w-100" src="./assets/img/course-detail.jpg"> -->
            <table class="table">
                <thead>
                    <tr class="title-tr table-bordered">
                        <td class="text-bold">Khóa ACJP (Aptech Certificate Java Programing)</td>
                        <td class="text-center text-bold">Số buổi</td>
                        <td class="text-center text-bold">Giờ/buổi</td>
                        <td class="text-center text-bold">Số giờ</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-bold">Learn Java By Example</td>
                        <td class="text-center focused text-bold">13</td>
                        <td class="text-center text-bold">2</td>
                        <td class="text-center focused text-bold">26</td>
                    </tr>
                    <tr>
                        <td class="text-bold">Distributed Computing in Java</td>
                        <td class="text-center focused text-bold">12</td>
                        <td class="text-center text-bold">2</td>
                        <td class="text-center focused text-bold">24</td>
                    </tr>
                    <tr>
                        <td class="text-bold">Working with Database and Security in Java</td>
                        <td class="text-center focused text-bold">8</td>
                        <td class="text-center text-bold">2</td>
                        <td class="text-center focused text-bold">16</td>
                    </tr>
                    <tr>
                        <td class="text-bold">eProject 1 (Java)</td>
                        <td class="text-center focused text-bold">4</td>
                        <td class="text-center text-bold">2</td>
                        <td class="text-center focused text-bold">8</td>
                    </tr>
                    <tr>
                        <td class="text-bold">TOTAL</td>
                        <td class="text-center focused text-bold"></td>
                        <td class="text-center text-bold"></td>
                        <td class="text-center focused text-bold">74</td>
                    </tr>
                </tbody>
            </table>
            <br>
            <table class="table">
                <thead>
                    <tr class="title-tr table-bordered">
                        <td class="text-bold">Khóa ACJD (Aptech Certificate Java Developer)</td>
                        <td class="text-center text-bold">Số buổi</td>
                        <td class="text-center text-bold">Giờ/buổi</td>
                        <td class="text-center text-bold">Số giờ</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-bold">Web Programing with Servlet and JSP</td>
                        <td class="text-center focused text-bold">20</td>
                        <td class="text-center text-bold">2</td>
                        <td class="text-center focused text-bold">40</td>
                    </tr>
                    <tr>
                        <td class="text-bold">Architeching Web Applications using JSF and Struts</td>
                        <td class="text-center focused text-bold">8</td>
                        <td class="text-center text-bold">2</td>
                        <td class="text-center focused text-bold">16</td>
                    </tr>
                    <tr>
                        <td class="text-bold">eProject 2 (Java)</td>
                        <td class="text-center focused text-bold">5</td>
                        <td class="text-center text-bold">2</td>
                        <td class="text-center focused text-bold">10</td>
                    </tr>
                    <tr>
                        <td class="text-bold">TOTAL</td>
                        <td class="text-center focused text-bold"></td>
                        <td class="text-center text-bold"></td>
                        <td class="text-center focused text-bold">66</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    <div class="section-5 py-5 bg-white">
        <h4 class="text-bold text-center text-uppercase">Bạn sẽ làm được gì sau khoá học<br> "Lập trình Java chuyên nghiệp" tại Aptech</h4>
        <h6 class="text-center">Hoàn thành khóa học Học viên có khả năng xây dựng các phần mềm quản lý, website thương mại điện tử trên nền tảng Java, phát triển phần mềm ứng dụng trong dịch vụ tài chính, ngân hàng...</h6>

        <div class="d-flex justify-content-center pt-3 flex-wrap">
            <!-- List -->
            <div class="box m-2 d-flex flex-column">
                <div class="position-relative">
                    <img class="w-100" src="./assets/img/prj1-min.png">
                    <div class="detail-layer">
                        <a href="https://aptechvietnam.com.vn/quan-ly-cau-lac-bo-bong-ban" class="px-4 btn text-white text-bold border-light rounded-pill" target="_blank">Xem thêm ></a>
                    </div>
                </div>
                <div class="p-3 text-center">
                    <h6 class="text-bold p-0">Đề tài: Quản lý CLB Bóng Bàn</h6>
                    <p class="m-0">
                        <small>Quản lý CLB Bóng Bàn</small>
                        <br>
                        <span class="text-bold">Lớp: C1606L</span>
                    </p>
                </div>
            </div>
            <div class="box m-2 d-flex flex-column">
                <div class="position-relative">
                    <img class="w-100" src="./assets/img/prj2-min.png">
                    <div class="detail-layer">
                        <a href="https://aptechvietnam.com.vn/project-hoc-ky-2" class="px-4 btn text-white text-bold border-light rounded-pill" target="_blank">Xem thêm ></a>
                    </div>
                </div>
                <div class="p-3 text-center">
                    <h6 class="text-bold p-0">Đề tài: Game bắn xe tăng trên nền tảng Java</h6>
                    <p class="m-0">
                        <small>Project học kỳ 2</small>
                        <br>
                        <span class="text-bold">Lớp: C1410L</span>
                    </p>
                </div>
            </div>
            <div class="box m-2 d-flex flex-column">
                <div class="position-relative">
                    <img class="w-100" src="./assets/img/prj3-min.png">
                    <div class="detail-layer">
                        <a href="https://aptechvietnam.com.vn/de-tai-he-thong-quan-ly-diem-sinh-vien" class="px-4 btn text-white text-bold border-light rounded-pill" target="_blank">Xem thêm ></a>
                    </div>
                </div>
                <div class="p-3 text-center">
                    <h6 class="text-bold p-0">Đề tài: Hệ thống quản lý điểm sinh viên</h6>
                    <p class="m-0">
                        <small>Project học kỳ 1</small>
                        <br>
                        <!-- <span class="text-bold">Lớp: C1610I</span> -->
                    </p>
                </div>
            </div>
            <div class="box m-2 d-flex flex-column">
                <div class="position-relative">
                    <img class="w-100" src="./assets/img/prj4-min.png">
                    <div class="detail-layer">
                        <a href="https://aptechvietnam.com.vn/thiet-ke-website-thuong-mai-dien-tu" class="px-4 btn text-white text-bold border-light rounded-pill" target="_blank">Xem thêm ></a>
                    </div>
                </div>
                <div class="p-3 text-center">
                    <h6 class="text-bold p-0">Đề tài: Thiết kế Website thương mại điện tử</h6>
                    <p class="m-0">
                        <small>Thiết kế Website thương mại điện tử</small>
                        <br>
                        <span class="text-bold">Lớp: C1611L</span>
                    </p>
                </div>
            </div>
            <!-- End List -->
        </div>
    </div>


  	<div class="banner-6 py-5">
  		<h3 class="text-center text-uppercase title text-bold">Học xong  bạn sẽ làm việc ở đâu?</h3>
  		<div class="container">
  			<p class="text-center text">Tham khảo các vị trí tuyển dụng Lập trình Java tại đây:</p>
  			<div class="row mt-5">
  				<div class="col-md-8 col-12">
	  				<div class="row d-flex flex-wrap">
	  					<div class="block-area col-md-6 col-6">
		  					<div class="head">
		  						<div class="img-container">
                    <img class="h-100" src="./assets/img/logo1-min.png" alt="ifi solution">
                  </div>
		  						<span class="name-company text-uppercase">ifi solution</span>
		  					</div>
		  					<div class="body">
		  						<p class="body_title">Tuyển dụng FRESHER JAVA</p>
		  						<div class="content">
		  							<p>&#11166; Làm việc trong môi trường CNTT chuyên nghiệp. Cơ hội trở thành nhân viên chính thức</p>

		  							<p>&#11166; Tiếp xúc với các dự án lớn như IoT, Big Data, ITS …</p>

		  							<a href="https://www.facebook.com/groups/JobAptech/permalink/2373412106267351" class="final" style="margin-top: 37px;" target="_blank">&#129130; Xem chi tiết </a>
		  						</div>
		  					</div>
	  					</div>

		  				<div class="block-area col-md-6 col-6">
		  					<div class="head">
		  						<div class="img-container border-0 bg-transparent">
                    <img class="h-100 w-100" src="./assets/img/T_Solution-min.png" alt="t-solution">
                  </div>
		  						<span class="name-company text-uppercase">T-SOLUTION</span>
		  					</div>
		  					<div class="body">
		  						<p class="body_title">Tuyển JAVA developer</p>
		  						<div class="content">
		  							<p>&#11166; Mức lương: 500$ - 1500$</p>

		  							<p>&#11166; Xét tăng lương 2 lần/năm + bonus + lương tháng 13.</p>
		  							<p>&#11166; Tham gia vào các dự án lập trình phát triển phần mềm product, outsource trong và ...</p>
		  							<a href="https://www.facebook.com/groups/JobAptech/permalink/2367285340213361" class="final" target="_blank">&#129130; Xem chi tiết </a>
		  						</div>
		  					</div>
		  				</div>

		  				<div class="block-area col-md-6 mt-4 col-6">
		  					<div class="head">
		  						<div class="img-container">
                    <img src="./assets/img/leadsgen-min.png" alt="leadsgen">
                  </div>
		  						<span class="name-company">LeadsGen</span>
		  					</div>
		  					<div class="body">
		  						<p class="body_title">Tuyển dụng JAVA developer</p>
		  						<div class="content">
		  							<p>&#11166; Mức lương: 10-20 triệu.</p>

		  							<p>&#11166; Được tham gia vào các dự án với các đối tác lớn ở nước ngoài.</p>
		  							<p>&#11166; Thưởng cuối năm, du lịch 2 lần/năm và xét tăng lương 01 lần/năm...</p>
		  							<a href="https://www.facebook.com/groups/JobAptech/permalink/2327418970866665" class="final" target="_blank">&#129130; Xem chi tiết </a>
		  						</div>
		  					</div>
		  				</div>

		  				<div class="block-area col-md-6 mt-4 col-6">
		  					<div class="head">
		  						<div class="img-container">
                    <img src="./assets/img/synergix-min.png" alt="synergix-min.png">
                  </div>
		  						<span class="name-company">Synergix Việt Nam</span>
		  					</div>
		  					<div class="body">
		  						<p class="body_title">Tuyển dụng JAVA developer</p>
		  						<div class="content">
		  							<p>&#11166; Lương từ $600 - $1200.</p>
		  							<p>&#11166; Lương tháng 13, 14 ; Xét tăng lương 2 lần/ năm.</p>
		  							<p>&#11166; Tham gia các loại bảo hiểm full lương theo quy định của Pháp luật.</p>
		  							<a href="https://www.facebook.com/groups/JobAptech/permalink/2307815716160324" class="final" target="_blank">&#129130; Xem chi tiết </a>
		  						</div>
		  					</div>
		  				</div>
	  				</div>
  				</div>
  				<div class="col-md-4 block-fb col-12">
  					<div class="head">
  						<p>&#129130; Xem thêm tại </p>
  					</div>
  					<div class="fb-group" data-href="https://www.facebook.com/groups/JobAptech/"  data-show-social-context="true" data-show-metadata="true"></div>
  				</div>	
  			</div>
  		</div>
  	</div>

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
                    <input class="d-none" type="" name="subject" value="Đăng ký Khóa học Lập trình Java chuyên nghiệp">
                    <input class="d-none" type="" name="redirectUrl" value="https://aptechvietnam.com.vn/java/dang-ky-thanh-cong">
                    <button type="submit" class="btn btn-warning btn-lg text-bold align-self-start text-center">NHẬN THÔNG TIN HỌC BỔNG</button>
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


    <div class="banner-12 py-5 bg-white">
        <div class="fb-comments" data-href="<?php echo $fbComment ?>" width="100%" data-numposts="5"></div>
    </div>

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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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