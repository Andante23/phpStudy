<?php
    require_once __DIR__ . '/../model/UserModel.php';

try{

   if($_SERVER["REQUEST_METHOD"] == "POST" ){
      $useridea  = $_POST["useridea"];
      $password  = $_POST["password"];
      $rePw = $_POST["rePw"];  // password 재 입력
      $nickname = $_POST["nickname"];
      $age = $_POST["age"];  
      // 비밀번호와 재 입력한 비밀번호 rePw를 비교
      if($password !== $rePw){
         echo '비밀번호가 일치하지 않습니다.';
         exit;
      }
      $UserModel = new UserModel();   
      $UserModel -> insertData($useridea , $password, $nickname , $age);
   }

}catch (Exception $e) {
  echo "Exception". $e ->getcode().": ".$e -> getMessage()."<br />".
     " in ". $e->getFile()." on line ". $e -> getLine()."<br />";
}



?>