<?php

try {
    $pdo = new PDO ('mysql:host=127.0.0.1;port=3307;dbname=filament', 'surya', '123');
    echo "Koneksi berhasil!";
} catch (PDOException $e) {
    echo "Koneksi gagal: " . $e->getMessage();
}
