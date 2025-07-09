<?php

namespace App\Core;

use PDO;
use PDOException;

class Database
{
    private static ?PDO $pdo = null;

    public static function getConnection(): PDO
    {
        if (self::$pdo === null) {
            $host = $_ENV['BD_HOST'] ?? 'localhost';
            $port = $_ENV['BD_PORT'] ?? '3306';
            $dbname = $_ENV['BD_NAME'] ?? 'Gestion_Auchan';
            $user = $_ENV['BD_USER'] ?? 'zeynab';
            $pass = $_ENV['BD_PASSWORD'] ?? 'Diamniadio14@';

            $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";

            try {
                self::$pdo = new PDO($dsn, $user, $pass, [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                ]);
            } catch (PDOException $e) {
                die("Erreur de connexion : " . $e->getMessage());
            }
        }

        return self::$pdo;
    }
}
