<?php
 
$db = 'db.csv';
$response = 'fail';

if (!isset($_POST['name']) || !isset($_POST['comment'])) {
	echo $response;
} else {
	$response = "success";
	$name = $_POST['name'];
	$comment = $_POST['comment'];
	$email = '';
	$phone = '';
	$pid = '';
	$time = round(microtime(true) * 1000);
	$id = time();
	$avatar = '';

	if (isset($_POST['phone'])) {
		$phone = $_POST['phone'];
	}

	if (isset($_POST['email'])) {
		$email = $_POST['email'];
	}

	if (isset($_POST['pid'])) {
		$pid = $_POST['pid'];
	}

	if (isset($_POST['avatar'])) {
		$avatar = $_POST['avatar'];
	}

	$list = array (
	    array('name' => $name, 'email' => $email, 'phone' => $phone, 'comment' => $comment, 'time' => $time, 'id' => $id, 'pid' => $pid, 'avatar' => $avatar)
	);

	$fp = fopen('db.csv', 'a');

	foreach ($list as $fields) {
	    fputcsv($fp, $fields);
	}

	fclose($fp);

	echo $response;
}
?>