
<?php

    class Database {
    private string $host = "localhost";
    private string $db   = "novacraft";
    private string $user = "root";
    private string $pass = "bilal@12131414@";
    private string $charset = "utf8mb4";

    private PDO $conn;

    public function __construct() {
        $dsn = "mysql:host={$this->host};dbname={$this->db};charset={$this->charset}";

        try {
            $this->conn = new PDO($dsn, $this->user, $this->pass, [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ]);
        } catch (PDOException $e) {
            die("Connexion échouée : " . $e->getMessage());
        }
    }

    public function getConnection(): PDO {
        return $this->conn;
    }
}

?>