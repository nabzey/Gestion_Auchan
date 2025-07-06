<?php
 namespace App\Core;

    use PDO;
    use PDOException;
    use App\Config\Core\Database;

    abstract class AbstractRepository
    {
        protected PDO $pdo;

        public function __construct()
        {
            $this->pdo = Database::getConnection();
        }
    }