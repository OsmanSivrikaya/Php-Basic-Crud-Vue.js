<?php
try{
    $db = new PDO("mysql:host=localhost;dbname=case;charset=utf8", 'root', '12345678');
    //echo "bağlantı başarılı";
}
catch(PDOException $e){
    echo $e->getMessage();
}
?>
