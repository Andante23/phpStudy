
<?php

 require 'vendor/autoload.php';

 use Dotenv\Dotenv;

// 현재 디렉토리 기준으로 .env 파일 로드
$dotenv = Dotenv::createImmutable(__DIR__,'/border');
$dotenv->load();
  


  $localhost = $_ENV['DB_URL'];
  $user = $_ENV['DB_USER'];
  $pw = $_ENV['DB_PW'];
  $db = $_ENV['DB'];

   $con = new  mysqli($localhost,$user,$pW ,$db);


  if($con -> connect_error){
  	die("연결 실패 : ". $conn -> connect_error);
  }
   
  



?>


