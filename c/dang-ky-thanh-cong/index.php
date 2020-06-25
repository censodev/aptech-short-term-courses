<?php
   // $mode = 'dev';
   $mode = 'prod';

   $ext = '';

   switch ($mode) {
      case 'prod': $ext = '.min'; break;
      case 'dev': $ext = ''; break;
   }

   $title = 'Đăng ký thành công Khóa học Lập trình C/C++';
   $course = 'Khóa học Lập trình C/C++';
   $link = 'https://aptechvietnam.com.vn/c';
?>

<!DOCTYPE html>
<html class="html">
<head>
   <!-- Google Tag Manager -->
   <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
   new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
   j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
   'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
   })(window,document,'script','dataLayer','GTM-NV98LLF');</script>
   <!-- End Google Tag Manager -->

   <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title><?php echo $title ?></title>

   <link rel="stylesheet" href="../../assets/css/success-regis<?php echo $ext ?>.css">

</head>
<body>
 
   <!-- Google Tag Manager (noscript) -->
   <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NV98LLF"
   height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
   <!-- End Google Tag Manager (noscript) -->

   <div class="wrapper">
      <div class="text-white text-center">
         <img src="../../assets/img/success-regis/logo-white.png" alt="" width="209" height="96"/></a>
         <br>
         <br>
         <br>
         <br>
         <p>Chúc mừng bạn đã đăng ký thành công</p>
         <p><?php echo $course ?></p>
         <br>
         <br>
         <p>Nhân viên tư vấn của Aptech sẽ liên hệ với bạn trong thời gian sớm nhất!</p>
         <br>
         <p>Tìm hiểu thêm thông tin về Aptech tại: <a class="text-white text-bold text-italic" href="https://aptechvietnam.com.vn">https://aptechvietnam.com.vn</a></p>
         <br>
         <p>Để quay lại trang đăng ký, truy cập: <a class="text-white text-bold text-italic" href="<?php echo $link ?>"><?php echo $link ?></a></p>
         <br>
         <br>
      </div>
   </div>
</body>
</html>
