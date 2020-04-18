<?php

require "../connection.php";
$project = $_GET['project'];
$targetDate = $_GET['targetDate'];
$targetTime = $_GET['targetTime'];

$tempTime = strtotime($targetDate.' '.$targetTime);


$utcTotalTime = new MongoDB\BSON\UTCDateTime(($tempTime+7200) * 1000);

$cursor = $db->tasks->find([
	'FID_Projects'	=>	(int)$project,
	'time_end'		=>	array('$lt'	=>	$utcTotalTime)
]);
$result = iterator_to_array($cursor);


$output = array();
foreach ($result as $key => $value) {
	$output[] .= $value['description'];
}
echo json_encode($output);