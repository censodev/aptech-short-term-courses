<?php
ob_start();

$rootPath = $_SERVER['DOCUMENT_ROOT'];
include $rootPath . '/tm/queue_email.php';

$name = trim($_POST['txtName']);
$phone = trim($_POST['txtPhone']);
$email = trim($_POST['txtEmail']);
$birthdate = trim($_POST['dateBirth']);
$center = trim($_POST['slCenter']);

$address = array(
	"aptech1@aprotrain.com" => "Tòa nhà Aptech, 285 Đôi Cấn, Ba Đình, Hà Nội",
	"aptech3@aprotrain.com" => "Tòa nhà Aptech, 54 Lê Thanh Nghị, Hai Bà Trưng, Hà Nội"
);

if ($name == '' || $phone == '' || $email == '' || $center == '') {
	echo '<center><h2 class="error">Vui lòng nhập đầy đủ thông tin và thử lại!!!</h2></center>';
	header('Refresh: 3; URL=index.html');
}
else {
	date_default_timezone_set("Asia/Ho_Chi_Minh");
    $date = date('Y-m-d',time());
   
    $subject = 'Đăng ký Khóa học Lập trình Java chuyên nghiệp';

	$content ='<ul>'.
				'	<li>Họ và tên: <b>'.$name.'</b></li>'.
				'	<li>Điện thoại: <b>'.$phone.'</b></li>'.
				'	<li>Email: <b>'.$email.'</b></li>'.
				'	<li>Năm sinh: <b>'.$birthdate.'</b></li>'.
				'	<li>Địa điểm học: <b>'.$address[$center].'</b></li>'.
                '   <li>Ngày đăng ký: <b>'.date("d-m-Y h:i:s", time()).'</b></li>'.
				'</ul>'.
	// echo $content;
	$from = 'relayAA@aprotrain.com';
	
	$array_emails = array(
        $center . '||' . $name . '||' . htmlentities($subject, ENT_QUOTES, "UTF-8") . '||' . htmlentities($content, ENT_QUOTES, "UTF-8")
    );

    $queue = new QueueMail(array(
        'emails' => $array_emails,
        'cache_name' => "aptech_email"
    ));

    $queue->queue_email();
	
    header('location:https://aptechvietnam.com.vn/java/dang-ky-thanh-cong/');
}
