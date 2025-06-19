<?php


try{
  include "db/dbconn.php";
  session_start();

 // 사용자로부터 아이디를 가져온다.
  $del_value_id = $_SESSION['id'];

 
 // db의 사용자 테이블을 찾는다.  >>> 삭제를 시작한다. 관련 글도 같이 삭제한다. 
  $result = $con -> query("DELETE FROM register WHERE id = $del_value_id   ");



  if($result){ // 성공하면 
     echo "
     <script>
     alert('계정삭제되었습니다.');  
     location.href = '../join/join.php';
     </script>
     " 	 ;
     session_destroy();
      $con -> close();
     }else{

      echo 
      "
      <script> alert('계정 삭제에 실패하였습니다.'); location.href = '../profile/profile.php'; </script> 
      " ;
}

}catch (Exception $e) {
  echo "Exception". $e ->getcode().": ".$e -> getMessage()."<br />".
     " in ". $e->getFile()." on line ". $e -> getLine()."<br />";
}
?>