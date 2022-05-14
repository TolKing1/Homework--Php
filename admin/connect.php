<?php 
// Get All
function getAll(){
    $pdo = new PDO('mysql:host=localhost;dbname=newss','root','');
    $sql = 'SELECT * FROM `card`';
    $query = $pdo->prepare($sql);
    $query->execute();
    $cards = $query->fetchALL(PDO::FETCH_ASSOC);
    return $cards;
};
//Registration
function regist($data){
    $pdo = new PDO("mysql:host=localhost;dbname=newss",'root','');
    $sql = 'INSERT INTO `reg`(`name`, `email`, `password`) VALUES (:name,:email,:password)';
    $query = $pdo->prepare($sql);
    $query -> execute($data);

}
//Login
function login($name,$password){
    $pdo = new PDO('mysql:host=localhost;dbname=newss','root','');
    $sql = 'SELECT * FROM `reg` WHERE name=:name AND password=:password';
    $query = $pdo->prepare($sql);
    $query -> bindParam('name',$name);
    $query -> bindParam('password',$password);
    $query->execute();
    $users = $query->fetch(PDO::FETCH_ASSOC);
    if($users){
        $_SESSION['logged'] = $users;
    }
}
//Adding card
function add_card($data){
    $pdo = new PDO("mysql:host=localhost;dbname=newss",'root','');
    $sql = 'INSERT INTO `card`(`title`, `subtitle`) VALUES (:title,:subtitle)';
    $query = $pdo->prepare($sql);
    $query -> execute($data);
}
//Delete card
function delete(){
    $pdo = new PDO("mysql:host=localhost;dbname=newss",'root','');
    $sql = 'DELETE FROM `card` WHERE id=:id';
    $query = $pdo->prepare($sql);
    $query -> bindParam('id',$_GET['id']);
    $query -> execute();
    $array = $query->fetch(PDO::FETCH_ASSOC);
}
//Get selected
function getSelected(){
    $pdo = new PDO('mysql:host=localhost;dbname=newss','root','');
    $sql = 'SELECT * FROM `card` WHERE id=:id';
    $query = $pdo->prepare($sql);
    $query->bindParam('id',$_GET['id']);
    $query->execute();
    $selected = $query->fetch(PDO::FETCH_ASSOC);
    return $selected;
}
//Edit
function update($data){
    $pdo = new PDO('mysql:host=localhost;dbname=newss','root','');
    $sql = "UPDATE `card` SET title=:title , subtitle = :subtitle WHERE id=:id";
    $query = $pdo->prepare($sql);
    $query->execute($data);
    // $cards = $query->fetch(PDO::FETCH_ASSOC);
};
?>