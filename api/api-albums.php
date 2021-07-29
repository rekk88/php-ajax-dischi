<?php 

include_once __DIR__.'/../db/db.php'; //recupero il file contenente l'array
header('Content-Type: application/json');
echo json_encode($data);