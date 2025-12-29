<?php

class AuthController {
    public static function register( $data)
    {
        $conn = Database::getConnection();

        $firstName = htmlspecialchars(trim($data['firstName'] ));
        $lastName  = htmlspecialchars(trim($data['lastName'] ));
        $email     = filter_var($data['email'] , FILTER_VALIDATE_EMAIL);
        $password  = $data['password'] ;


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
            INSERT INTO users (firstName, lastName, email, password)
            VALUES (?, ?, ?, ?)
        ");

        if ($stmt->execute([$firstName, $lastName, $email, $hashedPassword])) {
            $_SESSION['success'] = "Inscription réussie. Vous pouvez vous connecter.";
            return true;
        }

        $_SESSION['error'] = "Erreur serveur";
        return false;
    }

    public static function login( $data)
    {
        $conn = Database::getConnection();

        $email    = filter_var($data['email'] , FILTER_VALIDATE_EMAIL);
        $password = $data['password'] ;

        if (!$email || empty($password)) {
            $_SESSION['error'] = "Email ou mot de passe invalide";
            return false;
        }

        $stmt = $conn->prepare("
            SELECT id, firstName, lastName, email, password, role ,created_at
            FROM users
            WHERE email = ?
        ");
        $stmt->execute([$email]);

        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            $user['password']='.hhh.';

            if($user['role']=='reader'){
                $_SESSION['user'] = new Reader( $user['id'],$user['firstName'],$user['lastName'],$user['email'],$user['password'],$user['role'],$user['created_at']);

                $_SESSION['users']=[];
      
            }else{
                $_SESSION['user'] = new Admin($user['id'],$user['firstName'],$user['lastName'],$user['email'],$user['password'],$user['role'],$user['created_at']) ;

                $_SESSION['users']=[];

                $users = $conn->prepare("
                    SELECT *
                    FROM users
                ");
                $users->execute();
        
                $users = $users->fetchAll();
                foreach($users as $user){
                      if($user['role']=='reader'){
                          $_SESSION['users']=[...$_SESSION['users'],new Reader($user['id'],$user['firstName'],$user['lastName'],$user['email'],$user['password'],$user['role'],$user['created_at'])];
                      }
                       
                }
            }
            return true; 
        }

        $_SESSION['error'] = "Email ou mot de passe incorrect";
        return false;
    }

    public static function logout(){
                 unset($_SESSION['user']);        
        }
}
