<?php
ob_start();
?>
<!doctype html>
<html>
<head>
    <title>Chuyên gia Lập trình Web</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
    <?php
    $name = "";
    $phone = "";
    $email = "";
    $job = "";
    $deparment = "";
    $subject = "Đăng ký Dự án 300 lập trình viên java cho doanh nghiệp";
    $web_path = 'http://aptech-news.com/open-day/';

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

    if (isset($_POST['txtJob'])) {
        $job = $_POST['txtJob'];
    }

    if (isset($_POST['txtDeparment'])) {
        $deparment = $_POST['txtDeparment'];
    }

    if (isset($_POST['subjectmail'])) {
        $subject = $_POST['subjectmail'];
    }

    if ($name=='' || $phone=='' || $email=='' || $job=='' || $deparment=='')
    {
        echo '<center><h2 class="error">Vui lòng nhập đầy đủ thông tin và thử lại!!!</h2></center>';
        header('Refresh: 3; URL='. $web_path);
    }
    else{
        $date=date('Y-m-d',time());

        $content ='<ul>'.
                    '	<li>Họ và tên: <b>'.$name.'</b></li>'.
                    '	<li>Điện thoại: <b>'.$phone.'</b></li>'.
                    '	<li>Email: <b>'.$email.'</b></li>'.
                    '	<li>Việc làm: <b>'.$job.'</b></li>'.
                    '	<li>Chuyên ngành/Bộ phận: <b>'.$human.'</b></li>'.
                    '   <li>Ngày đăng ký: <b>'.date("d-m-Y h:i:s", time()).'</b></li>'.
                    '</ul>'.
        //echo $content;
        $from = 'relayAA@aprotrain.com';

        $from_name = $name;
        include 'phpmailer/mailconfig.php';

        smtpmailer('aptech1@aprotrain.com', $from, $from_name, $subject, $content);
        smtpmailer('aptech3@aprotrain.com', $from, $from_name, $subject, $content);

        header('location:' . $web_path . 'dang-ky-thanh-cong?center=aptech1@aprotrain.com');
    }

    ?>
</body>

</html>
