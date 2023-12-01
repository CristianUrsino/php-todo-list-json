<?php
$filecontent = file_get_contents("Model/db.json");
$list = json_decode($filecontent, true);
header('Content-Type: application/json');
echo json_encode($list);
?>