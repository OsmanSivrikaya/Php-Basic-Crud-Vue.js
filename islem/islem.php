<?php
require_once 'baglan.php';

if(isset($_POST['ogrenciekle']) == true){
    $sql = "INSERT INTO ogrenci (Ad, Soyad, Telefon, Email, OkulId, BolumId) VALUES(:Ad, :Soyad, :Telefon, :Email, :OkulId, :BolumId)";

    $result = $db->prepare($sql);
    
    $result->execute(
        [
            ':Ad' => $_POST['Ad'],
            ':Soyad' => $_POST['Soyad'],
            ':Telefon' => $_POST['Telefon'],
            ':Email' => $_POST['Email'],
            ':OkulId' => $_POST['OkulId'],
            ':BolumId' => $_POST['BolumId'],
        ]
    );
}
if(isset($_POST['okulcek']) == true){
    $sql = "SELECT * FROM okul";
    $result = $db->prepare($sql);
    $result->execute();
    $data = $result->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($data);
}
if(isset($_POST['bolumcek']) == true){
    $sql = "SELECT * FROM bolum";
    $result = $db->prepare($sql);
    $result->execute();
    $data = $result->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($data);
}