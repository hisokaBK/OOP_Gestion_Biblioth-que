<?php 
require_once __DIR__ . '/../config/dbconnection.php';
require_once __DIR__ . '/../app/Models/User.php';
require_once __DIR__ . '/../app/Models/Admin.php';
require_once __DIR__ . '/../app/Models/Reader.php';
require_once __DIR__ . '/../app/Models/Book.php';
  session_start();
  
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
         ],
         'addBook'=>[
               'controller'=>'',
                'method' => $_SERVER['REQUEST_METHOD'],
                'view' => 'addBook' 
         ],
         'books'=>[
               'controller'=>'bookController',
                'method' => $_SERVER['REQUEST_METHOD'],
                'view' => 'books'  
         ],
         'oneBook'=>[
               'controller'=>'bookController',
                'method' => $_SERVER['REQUEST_METHOD'],
                'view' => 'oneBook'  
         ],
         'addBook'=>[
               'controller'=>'bookController',
                'method' => $_SERVER['REQUEST_METHOD'],
                'view' => 'addBook'  
         ]
         ,
         'delete'=>[
               'controller'=>'bookController',
                'method' => $_SERVER['REQUEST_METHOD'],
                'view' => 'delete'  
         ]
         ,
         'editBook'=>[
               'controller'=>'bookController',
                'method' => $_SERVER['REQUEST_METHOD'],
                'view' => 'editBook'  
         ]
         ,
         'borrow'=>[
               'controller'=>'borrowController',
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
               if($pages[$uri]['controller']=='bookController' || $pages[$uri]['controller']=='borrowController' ){ 
               require_once __DIR__ . "/../app/controllers/{$pages[$uri]['controller']}.php";

                 switch($uri){
                    case 'books':
                          BookController::getBooks();
                          break;
                    case 'oneBook':
                          BookController::getOneBooks($_GET['id']);
                          break;
                    case 'delete':
                          BookController::deleteBooks($_GET['id']);
                            header("Location: /books");
                             exit;
                    case 'editBook':
                            BookController::getOneBooks($_GET['id']);
                            break;
                    case 'borrow':
                            BorrowController::borrowBook($_GET['idUser'],$_GET['idBook']);
                            header("Location: /books");
                            exit;
                 }
                }

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
                    case "addBook" :
                        bookController::addBooks($_POST);
                        header("Location: /addBook");
                        exit;
                    case "editBook" :
                        bookController::updateBook($_POST['id'],$_POST);
                        header("Location: /books");
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
