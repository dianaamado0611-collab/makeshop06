<?php
// configuracion para XAMPP (Vvalores predeterminados)
$host = 'sql200.infinityfree.com';
$db = 'if0_38249807_pepe';
$user = 'if0_38249807'
$pass = '454545';
$charset = 'utf8mb4'

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
        PDO::ATRR_ERRMODE              => PDO::ERRMODE_EXCEPTION,
        PDO::ATRR_DEFAULT_FETCH_MODE   => PDO::FETCH_ASSOC,
        PDO::ATRR_EMULATE_PREPARES     => false,
];

try{
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch(\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e-getCode())
}
?>