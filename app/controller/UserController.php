<?php
require_once "/var/www/html/phpStudy/app/model/UserModel.php";

class UserController {


    private $userModel;
    public function __construct(){
        $this ->userModel = new UserModel();
    }

    public function handleRequest(){
       // 기본 페이지는 로그인 페이지로 
       $action = $_GET['action'] ?? 'login';


       switch($action){
           case 'login':
                $this -> showLoginForm();
               break;
            
           case 'loginProcess':
               $this -> processLogin();
               break;
            
           case 'register':
              $this -> showRegisterForm();
              break;
           
          case 'registerProcess':
                $this->processRegister();
                break;

            default:
                echo "존재하지 않는 요청입니다.";
                break;    

       }
    }

    // 사용자가 로그인 페이지를 원하면 
    // showLoginForm 함수가 실행된다.
    private function showLoginForm(){
        include __DIR__. '/../login/login.php';
    }
}




?>