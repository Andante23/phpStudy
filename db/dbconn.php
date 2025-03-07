<?php
require __DIR__ . '/../vendor/autoload.php'; // Composer autoload 불러오기
use Dotenv\Dotenv;  // 올바른 네임스페이스 사용
$dotenv = Dotenv::createImmutable(__DIR__ . '/../');  // .env 파일 위치 설정
$dotenv->load();  // .env 파일 로드
  $localhost = 'localhost';
  $user = $_ENV['DB_USER'];
  $pw = $_ENV['DB_PW'];
  $db = $_ENV['DB'];
   $con = new  mysqli($localhost,$user,$pw ,$db);
  if($con -> connect_error){
  	die("연결 실패 : ". $conn -> connect_error);
  }
   ?>
