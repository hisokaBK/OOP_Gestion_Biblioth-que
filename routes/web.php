<?php 

require_once __DIR__ . '/../app/Models/User.php';
require_once __DIR__ . '/../app/Models/Admin.php';
require_once __DIR__ . '/../app/Models/Reader.php';
  session_start();
  require_once __DIR__ . '/../config/dbconnection.php';
  
  $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
  $uri = trim($uri, '/');
  
  if ($uri === '') {
      $uri = 'home';
  }

   $pages =[
         'home'=>[
               'controller'=>'AuthController',
               'method' => $_SERVER['REQUEST_METHOD'],
               'view' => 'home'
         ],
         'login'=>[
                'controller'=>'AuthController',
                'method' => $_SERVER['REQUEST_METHOD'],
                'view' => 'login'
         ],
         'register'=>[
               'controller'=>'AuthController',
                'method' => $_SERVER['REQUEST_METHOD'],
                'view' => 'register'  
         ],
         'logout'=>[
               'controller'=>'AuthController',
                'method' => 'POST',
                'view' => 'logout'  
         ],
         'about'=>[
               'controller'=>'',
                'method' => $_SERVER['REQUEST_METHOD'],
                'view' => 'about'  
         ]
         ,
         'books'=>[
               'controller'=>'',
                'method' => $_SERVER['REQUEST_METHOD'],
                'view' => 'books'  
         ]
         ,
         'profil'=>[
               'controller'=>'',
                'method' => $_SERVER['REQUEST_METHOD'],
                'view' => 'profil'  
         ]
         ,
         'dashboard'=>[
               'controller'=>'',
                'method' => $_SERVER['REQUEST_METHOD'],
                'view' => 'dashboard'  
         ]
      ]    ;


  
if (array_key_exists($uri, $pages)){
       $title = $uri ;
          if ($pages[$uri]['method']=="GET"){
                 require_once __DIR__ . "/../app/views/{$pages[$uri]['view']}.view.php";
          }else{
                require_once __DIR__ . "/../app/controllers/{$pages[$uri]['controller']}.php";

              switch($uri) {
                    case "login" :
                       if (AuthController::login($_POST)) {
                            header("Location: /home");
                            exit;
                        } else {
                            header("Location: /login");
                            exit;
                        }
                    case "register" :
                        if (AuthController::register($_POST)) {
                            header("Location: /login");
                            exit;
                        } else {
                            header("Location: /register");
                            exit;
                        }  
                    case "logout" :
                        AuthController::logout();
                        header("Location: /login");
                        exit;
                    default :
                        header("Location: /404");
                        exit;
                } 
            }
          
}else{
      $title ='404';
      require_once __DIR__ . "/../app/views/404.view.php";
}

if(isset($_SESSION['error'])){unset($_SESSION['error']);};
