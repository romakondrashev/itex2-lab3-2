<?php
require "../connection.php";
$leader = $_GET['leader'];



$cursor = $db->tasks->find([
	'FID_Leader'	=>	(int)$leader
]);
$result = iterator_to_array($cursor);

$workersIds = array();
foreach ($result as $workers) {
	foreach ($workers['FID_Worker'] as $key => $worker) {
		$workersIds[] = $worker;
	}
}
$workersIds = array_unique($workersIds);

$cursor = $db->worker->find([
	'ID_Worker'	=>	array('$in'	=>	$workersIds)
]);

$result = iterator_to_array($cursor);


$output = array();
foreach ($result as $worker) {
	$output[] .= $worker['surname'];
}

echo json_encode($output);