<?php

try{
   session_start(); // 세션이 없으면 8번 라인이 시작안함 
   include "db/dbconn.php";


   // 0.변경해야하는 사용자  인식 아이디값 가져옴




if($_SERVER['REQUEST_METHOD'] == 'POST'){

  $up_id = $_SESSION['id'];
 
 //1. 변경후 비밀번호를 사용자로부터 받아온다.
  $curPw = $_POST['curPw'];
   
   $new_Pw_hash = password_hash($curPw, PASSWORD_DEFAULT);

  // 2. db 연결 객체를 불러옵니다.
   // UPDATE문을 작성합니다.
  $result = $con  -> query("UPDATE register SET 
    password_hash = '$new_Pw_hash'  WHERE id = '$up_id '" );

   // 화면에  변경된 아이디 와 바탕화면 가기버튼을 활성화합니다.

   

  if($result ){
       echo "<p>비밀번호가". "<strong>$curPw</strong>"."로 변경되었으므로 로그아웃합니다.</p>";
       
       // 4초뒤에 logout페이지로 이동합니다.
       // 이중에서 사이트 비번을 적으려는 사람들을
       // 위해서  다음과 같이 작성하였습니다. 
       echo "<script> 
       setTimeout(function(){
           window.location.href = '../../border/login/logout.php';
       },4000);
       </script>
       ";
        }else{
  	  echo "비밀번호 변경에 실패하였습니다.";
  }

}


$con -> close();

}catch (Exception $e) {
  echo "Exception". $e ->getcode().": ".$e -> getMessage()."<br />".
     " in ". $e->getFile()." on line ". $e -> getLine()."<br />";
}

?>