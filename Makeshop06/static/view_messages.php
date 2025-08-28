<?php

require 'config.php';

try{
    $stmt - $pdo->query("SELECT id, name, email, message, created_at FROM messages ORDER BY created_at DESC");
    $messaages = $stmt->fetchAll();
} catch (PDOException $e) {
    die("<script>alert('Error de conexion: " . addslashes ($e->getMessage()) . "'); window.hystory.back();</script>") ;
} 
?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset= "UTF-8">
    <meta name="viewport" content="width-device_width, initial-scale=1.0">
    <title> Admin - Mensajes Recibidos</title>
    <link rel= "stylesheet" href="style.css">
    <style>
        .messages-container {
            backgroud: white;
            border-radius: 16px;
            box-shadow: 0 10px 30px (0, 0, 0,0.1);
            overflow:hidden;
            margin_top: 2rem
        }

        table {
            width:100%;
        }