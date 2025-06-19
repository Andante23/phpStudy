<?php
    require_once __DIR__ . '/../model/UserModel.php';
try{
   session_start(); // 세션이 없으면 8번 라인이 시작안함 
  //  include "db/dbconn.php";


  //  // 0.변경해야하는 사용자  인식 아이디값 가져옴




if($_SERVER['REQUEST_METHOD'] == 'POST'){

  $up_id = $_SESSION['id'];
 
 //1. 변경후 비밀번호를 사용자로부터 받아온다.
  $curPw = $_POST['curPw'];
   
  //  $new_Pw_hash = password_hash($curPw, PASSWORD_DEFAULT);

  // // 2. db 연결 객체를 불러옵니다.
  //  // UPDATE문을 작성합니다.
  // $result = $con  -> query("UPDATE register SET 
  //   password_hash = '$new_Pw_hash'  WHERE id = '$up_id '" );

  //  // 화면에  변경된 아이디 와 바탕화면 가기버튼을 활성화합니다.

   
      $UserModel = new UserModel();
      $UserModel -> changePw($curPw,$up_id);


}




}catch (Exception $e) {
  echo "Exception". $e ->getcode().": ".$e -> getMessage()."<br />".
     " in ". $e->getFile()." on line ". $e -> getLine()."<br />";
}

?>