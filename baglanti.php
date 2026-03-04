<?php
$host='localhost';
$dbname='ucak_bileti_db';
$username='root'; // Kendi lokal ayarlarına göre değiştir
$password=''; // Kendi lokal ayarlarına göre değiştir

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    // Hata modunu Exception olarak ayarladım (Güvenli kodlama için önemli)
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Bağlantı başarılı"; 
} catch(PDOException $e) {
    die("Bağlantı hatası: " . $e->getMessage());
}




?>