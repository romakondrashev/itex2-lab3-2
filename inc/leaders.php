<?php

$cursor = $db->leaders->find([]);

$leaders = array();
foreach ($cursor as $document) {
    $leaders[] = array(
        'ID'    => $document['ID_Leader'], 
        'surname'    => $document['surname'], 
    );
}