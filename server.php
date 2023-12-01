<?php
$filecontent = file_get_contents("Model/db.json");
$list = json_decode($filecontent, true);

if(isset($_POST['task'])){
    $newtask = array(
        'text' => $_POST['task'],
        'done' => false,
    );
    array_push($list,$newtask);
    file_put_contents("Model/db.json", json_encode($list));
}

header('Content-Type: application/json');
echo json_encode($list);

?>