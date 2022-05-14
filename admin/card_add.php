<?php 

$data = [
    'title' => $_POST['title'],
    'subtitle' => $_POST['subtitle']
];

require_once './connect.php';
add_card($data);

header('Location:../index.php');

?>
