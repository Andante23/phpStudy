<?php
session_start(); // $_SESSION 변수를 사용하기 위해 필요함 
require_once __DIR__ . '/../core/database.php';

  class UserModel  {

   private $db ;

   public function __construct(){
     $database = new Database();
     $this -> db = $database -> getConnection();
   }




  

   // 유저 비밀번호 변경
    public function changePw($password , $up_id){
        $new_Pw_hash = password_hash($curPw, PASSWORD_DEFAULT);

        $result = $this-> prepare("UPDATE register SET password_hash = '$new_Pw_hash'  WHERE id = '$up_id '" );

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



    public function deleteUser($del_value_id){
       
      try{
      // db의 사용자 테이블을 찾는다.  >>> 삭제를 시작한다. 관련 글도 같이 삭제한다. 
      $stmt = $this -> db->prepare("DELETE FROM register WHERE id = :id  ");

      $stmt->bindParam(':id', $del_value_id, PDO::PARAM_INT);
         $result = $stmt->execute();

        if($result){ // 성공하면 
                session_destroy();
         echo "
          <script>
          alert('계정삭제되었습니다.');  
          location.href = '../join/join.php';
          </script>
              " 	 ; 
           }else{
              echo 
               "
              <script> alert('계정 삭제에 실패하였습니다.'); location.href = '../profile/profile.php'; </script> 
              " ;
              }
                 } catch (PDOException $e) {
                  echo "DB 오류: " . $e->getMessage();
          }

          } 
  }

?>`