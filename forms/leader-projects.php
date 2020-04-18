<?php
require "../connection.php";
$leader = $_GET['leader'];



$cursor = $db->tasks->find([
	'FID_Leader'	=>	(int)$leader
]);
$tasks = iterator_to_array($cursor);

$projectIDs = array();
foreach ($tasks as $task) {
	$projectIDs[] = $task['FID_Projects'];
}

$projectIDs	= array_unique($projectIDs);

$cursor = $db->projects->find([
	'ID_Projects'	=>	array('$in'	=>	$projectIDs)
]);
$result = iterator_to_array($cursor);

echo count($result);