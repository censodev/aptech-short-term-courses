<?php
ob_start();

$rootPath = $_SERVER['DOCUMENT_ROOT'];
include $rootPath . '/tm/queue_email.php';

error_reporting(E_ALL);
ini_set('display_errors', '1');

$name = "";
$phone = "";
$email = "";
$center = "";
$birthday = "";
$address = "";
$subject = "Đăng ký khóa học lập trình C/C++ 2018";
$web_path = '';

if (isset($_POST['web_path'])) {
    $web_path = $_POST['web_path'];
}

if (isset($_POST['txtName'])) {
    $name = $_POST['txtName'];
}

if (isset($_POST['txtPhone'])) {
    $phone = $_POST['txtPhone'];
}

if (isset($_POST['txtEmail'])) {
    $email = $_POST['txtEmail'];
}

if (isset($_POST['txtCenter'])) {
    $center = $_POST['txtCenter'];
}

if (isset($_POST['txtBirthday'])) {
    $birthday = $_POST['txtBirthday'];
}

if (isset($_POST['txtAddress'])) {
    $address = $_POST['txtAddress'];
}

if ($name == '' || $phone == '' || $email == '' || $center == '' || $birthday == '' || $web_path == '')
{
    echo '<center><h2 class="error">Vui lòng nhập đầy đủ thông tin và thử lại!!!</h2></center>';
    header('Refresh: 3; URL='. $web_path);
} else {
    if( ! ini_get('date.timezone') )
    {
        date_default_timezone_set('GMT');
    }

    $date=date('Y-m-d',time());

    $content ='<ul>'.
                '	<li>Họ và tên: <b>'.$name.'</b></li>'.
                '	<li>Điện thoại: <b>'.$phone.'</b></li>'.
                '	<li>Email: <b>'.$email.'</b></li>'.
                '	<li>Ngày sinh: <b>'.$birthday.'</b></li>'.
				'	<li>Địa chỉ: <b>'.$address.'</b></li>'.
                '	<li>Địa điểm nhập học: <b>'.$center.'</b></li>'.
                '   <li>Ngày đăng ký: <b>'.date("d-m-Y h:i:s", time()).'</b></li>'.
                '</ul>';

	//test send email to me
	//$center = "vanhiep.ap@gmail.com";
    $array_emails = array(
        $center . '||' . $name . '||' . htmlentities($subject, ENT_QUOTES, "UTF-8") . '||' . htmlentities($content, ENT_QUOTES, "UTF-8")
    );

    $queue = new QueueMail(array(
        'emails' => $array_emails,
        'cache_name' => "aptech_email"
    ));

    $queue->queue_email();

    header('location:' . $web_path . 'dang-ky-thanh-cong?center='. $center);
}
