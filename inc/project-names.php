<?php

$cursor = $db->projects->find([]);

$projectNames = array();
foreach ($cursor as $document) {
    $projectNames[] = array(
        'ID'    => $document['ID_Projects'], 
        'name'    => $document['name'], 
    );
}