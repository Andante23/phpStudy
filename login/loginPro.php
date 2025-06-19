<?php
   
    require_once __DIR__ . '/../model/AuthModel.php';
  

try{
     

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
  	$useridea = $_POST['useridea'];
  	$password = $_POST['password'];

   if(empty($useridea) || empty($password)){
   	header("Content-Type: text/html; charset=UTF-8");
   	 echo "<script>alert('아이디 또는 비밀번호가 빠졌거나 잘못된 접근입니다.');";
   	    echo "window.location.replace('login.php');</script>";
   	    exit;
   }

    $UserModel = new AuthModel();
    $UserModel -> userLogin($useridea,$password);

  }


}catch (Exception $e) {
  echo "Exception". $e ->getcode().": ".$e -> getMessage()."<br />".
     " in ". $e->getFile()." on line ". $e -> getLine()."<br />";
}


?>