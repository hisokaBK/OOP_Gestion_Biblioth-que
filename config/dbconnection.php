<?php
    class Database {
    private static string $host = "localhost";
    private static string $db   = "Bibliotheque";
    private static string $user = "root";
    private static string $pass = "bilal@12131414@";
    private static string $charset = "utf8mb4";
    private static PDO $conn;

    public static function getConnection() {
        $dsn = "mysql:host=".self::$host.";dbname=".self::$db.";charset=".self::$charset;

        try {
            self::$conn = new PDO($dsn, self::$user, self::$pass, [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ]);
        } catch (PDOException $e) {
            die("Connexion échouée : " . $e->getMessage());
        }

        return self::$conn ;
    }

}

?>