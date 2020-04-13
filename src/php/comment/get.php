<?php
 
$db = 'db.csv';

$csv = array();
$lines = file($db, FILE_IGNORE_NEW_LINES);

foreach ($lines as $key => $value)
{
	$obj = str_getcsv($value);
	
	if (count($obj) > 2) {
		$avatar = '';
		$csv[$key] = array('name' => '', 'comment' => '', 'time' => '', 'id' => '', 'pid' => '', 'avatar' => '');

		if (isset($obj[0])) {
			$csv[$key]['name'] = $obj[0];
		}

		if (isset($obj[3])) {
			$csv[$key]['comment'] = $obj[3];
		}

		if (isset($obj[4])) {
			$csv[$key]['time'] = $obj[4];
		}

		if (isset($obj[5])) {
			$csv[$key]['id'] = $obj[5];
		}

		if (isset($obj[6])) {
			$csv[$key]['pid'] = $obj[6];
		}

		if (isset($obj[7])) {
			$csv[$key]['avatar'] = $obj[7];
		}
	}
}

echo json_encode($csv);

header('Content-Type: application/json');
header('Cache-Control: no-cache');
?>