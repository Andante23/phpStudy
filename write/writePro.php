<?php

try{

include "../db/dbconn.php";   

session_start();

// 사용자로부터 데이터를 입력받는다 
// 이때 데이터 입력이 이전 write.php 에서 설정한  POST 세팅이 맞는지 확인한다. 
if($_SERVER["REQUEST_METHOD"] == "POST"){
   $title = $_POST["title"];
   $content = $_POST["content"];
   $nickname_id = $_SESSION['id'];

   
   
// 받은 데이터를  MYSQL 에  INSERT 합니다.   -> 
$wQuery = $con -> prepare("INSERT INTO board(title,content,user_id)VALUES(?,?,?)");

$wQuery -> bind_param('ssi',$title,$content,$nickname_id);


if($wQuery -> execute()){
    // 글 작성 완료시  home.php 인 메인페이지로 이동합니다.
    echo "<script>
    alert('글 작성 완료');
    document.location.href='../home.php';
    </script>";

}else{
    echo "<script>alert('글 작성 실패')</script>";
}

}

}catch (Exception $e) {
  echo "Exception". $e ->getcode().": ".$e -> getMessage()."<br />".
     " in ". $e->getFile()." on line ". $e -> getLine()."<br />";
}


















?>