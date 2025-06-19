<?php
  session_start();
  require_once __DIR__ . '/../core/database.php';
  require_once __DIR__ . '/../model/UserModel.php';

try{



 // 사용자로부터 아이디를 가져온다.
  $del_value_id = $_SESSION['id'];

  $UserModel = new UserModel();
  
  $UserModel -> deleteUser($del_value_id); 
  

}catch (Exception $e) {
  echo "Exception". $e ->getcode().": ".$e -> getMessage()."<br />".
     " in ". $e->getFile()." on line ". $e -> getLine()."<br />";
}
?>