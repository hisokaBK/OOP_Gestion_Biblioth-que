<?php

class AuthController {
    public static function register(array $data)
    {
        $conn = Database::getConnection();

        $firstName = htmlspecialchars(trim($data['firstName'] ));
        $lastName  = htmlspecialchars(trim($data['lastName'] ));
        $email     = filter_var($data['email'] , FILTER_VALIDATE_EMAIL);
        $password  = $data['password'] ;

        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if (!$email || empty($password)) {
            $_SESSION['error'] = "Email ou mot de passe invalide";
            return false;
        }

        $check = $conn->prepare("SELECT id FROM users WHERE email = ?");
        $check->execute([$email]);

        if ($check->rowCount() > 0) {
            $_SESSION['error'] = "Email déjà utilisé";
            return false;
        }

        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        $stmt = $conn->prepare("
            INSERT INTO users (firstName, lastName, email, password, role)
            VALUES (?, ?, ?, ?, 'reader')
        ");

        if ($stmt->execute([$firstName, $lastName, $email, $hashedPassword])) {
            $_SESSION['success'] = "Inscription réussie. Vous pouvez vous connecter.";
            return true;
        }

        $_SESSION['error'] = "Erreur serveur";
        return false;
    }

    public static function login(array $data)
    {
        $conn = Database::getConnection();

        $email    = filter_var($data['email'] , FILTER_VALIDATE_EMAIL);
        $password = $data['password'] ;

        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if (!$email || empty($password)) {
            $_SESSION['error'] = "Email ou mot de passe invalide";
            return false;
        }

        $stmt = $conn->prepare("
            SELECT id, firstName, lastName, email, password, role
            FROM users
            WHERE email = ?
        ");
        $stmt->execute([$email]);

        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            unset($user['password']);
            $_SESSION['user'] = $user;
            return true; 
        }

        $_SESSION['error'] = "Email ou mot de passe incorrect";
        return false;
    }

    public static function logout(){
                 unset($_SESSION['user']);        
        }
}
