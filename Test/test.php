<?php



$obj['name'] = $_POST['username'];
$obj['email'] = $_POST['useremail'];

echo json_encode($obj);
