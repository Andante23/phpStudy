<?php
session_start(); // $_SESSION 변수를 사용하기 위해 필요함 
require_once __DIR__ . '/../core/database.php';

  class UserModel  {

   private $db ;

   public function __construct(){
     $database = new Database();
     $this -> db = $database -> getConnection();
   }




   // 사용자  회원가입 
   public function insertData($useridea , $password , $nickname , $age){      
      $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
      $stmt = $this->db->prepare("INSERT INTO register (useridea, password_hash, nickname, age) VALUES (?, ?, ?, ?)");
      
      if($stmt->execute([$useridea, $hashedPassword, $nickname, $age])){
          //  성공
        header("Content-Type: text/html; charset=UTF-8");
        echo "<script>alert('회원가입성공');";
        echo "window.location.replace('login.php');</script>";
        exit;
      }else{
         //  실패
        header("Content-Type: text/html; charset=UTF-8");
        echo "<script>alert('아이디 또는 비밀번호가 잘못되었습니다.');";
        echo "window.location.replace('join.php');</script>";
        exit;
      }
    
    }


    // 사용자 로그인
    public function userLogin($useridea,$password){
  
       $stmt = $this -> db->prepare("SELECT * FROM register WHERE useridea = ? ");
       $stmt->execute([$useridea]);


         $user = $stmt->fetch(PDO::FETCH_ASSOC);

      if ($user && password_verify($password, $user['password_hash'])) {
        // 로그인 성공
        $_SESSION['useridea'] = $user['useridea'];
        $_SESSION['nickname'] = $user['nickname'];
        $_SESSION['id'] = $user['id'];  

        header("Location: ../index.php");
        exit;
       } else {
         // 로그인 실패
         header("Content-Type: text/html; charset=UTF-8");
         echo "<script>alert('아이디 또는 비밀번호가 잘못되었습니다.');";
         echo "window.location.replace('login.php');</script>";
         exit;
    }
    }
   } 


?>