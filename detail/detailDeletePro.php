
<?php

try{
include "../db/dbconn.php";
session_start();


 // 1. 사용자로부터 삭제 요청받은 게시글의 id를 가져옵니다. 
  $del_id = $_GET['id'];


// 2. delete 문을 이용한 삭제 쿼리로 접근
$result =  mysqli_query($con , "DELETE FROM board  WHERE bo_id =$del_id");

if($result ){

    echo "<script>
    alert('글이 삭제되었습니다.')
      document.location.href='../home.php'
    </script>";
}

}catch (Exception $e) {
  echo "Exception". $e ->getcode().": ".$e -> getMessage()."<br />".
     " in ". $e->getFile()." on line ". $e -> getLine()."<br />";
}


?>

