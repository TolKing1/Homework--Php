<?php 
$data = [
    'name' => $_POST['name'],
    'email' => $_POST['email'],
    'password' =>hash('sha1', $_POST['password'])
];
require_once './connect.php';
regist($data);
header('Location:../index.php');
// $array = $query->fetchALL(PDO::FETCH_ASSOC);

?>
