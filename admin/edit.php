<?php 
$data = [
    'title'=> htmlspecialchars($_POST['title']),
    'subtitle' => $_POST['subtitle'],
    'id' => $_GET['id'],
];

require_once './connect.php';
update($data);
    header('Location: ../index.php');
?>
