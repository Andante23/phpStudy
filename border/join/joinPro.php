<?php

   include "../db/dbconn.php";


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

   
      $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

     $query = $con -> prepare( "INSERT INTO register (useridea,password_hash,nickname,age) VALUES (?,?,?,?) ");

     $query -> bind_param('sssi',$useridea ,$hashedPassword ,$nickname ,$age);

     if($query -> execute()){
         echo '회원가입 완료';
     }else{
         echo '회원가입 실패';
     }


  
    

   }





?>