<?php
// Configurazione del database
$db_host = '34.15.141.131';
$db_name = 'image_catalog';
$db_user = 'appmod-phpapp-user';
$db_pass = 'EOih|~<2dCTra9DI';
$db_port = 3306;

try {
    $pdo = new PDO("mysql:host=$db_host;port=$db_port;dbname=$db_name", $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion: " . $e->getMessage());
}

session_start();
?>
