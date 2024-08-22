<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=php_cities', 'php_cities', 'aG03A0BIrcp7v/YH', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
}
catch(PDOException $e) {
    echo 'Probleme mit der Datenbankverbindung...';
    die();
}



?>