<?php

  try{
      include "../db/dbconn.php";
  

   session_start();


  if($_SERVER['REQUEST_METHOD'] == 'POST'){
  	$useridea = $_POST['useridea'];
  	$password = $_POST['password'];

   if(empty($useridea) || empty($password)){
   	header("Content-Type: text/html; charset=UTF-8");
   	 echo "<script>alert('아이디 또는 비밀번호가 빠졌거나 잘못된 접근입니다.');";
   	    echo "window.location.replace('login.php');</script>";
   	    exit;
   }


   $useridea = $con -> real_escape_string($useridea);

    $sql = "SELECT * FROM register WHERE useridea = '$useridea'";
    $result = $con -> query($sql);


    if($result -> num_rows >0){
    	$row = $result -> fetch_assoc();
    	if(password_verify($password, $row['password_hash'])){
    		$_SESSION['useridea'] =$useridea;
    		$_SESSION['nickname'] = $row['nickname'];
        // 글 작성시 이용하려고 사용합니다.
        $_SESSION['id'] =$row['id'];
    		echo " <script> window.location.replace('../../border/home.php'); </script> ";
    		exit;
    	}else{
    		   header("Content-Type: text/html; charset=UTF-8");
        echo "<script>alert('아이디 또는 비밀번호가 잘못되었습니다.');";
        echo "window.location.replace('login.php');</script>";
        exit;
    	}
    }

  }



  $con -> close();

}catch (Exception $e) {
  echo "Exception". $e ->getcode().": ".$e -> getMessage()."<br />".
     " in ". $e->getFile()." on line ". $e -> getLine()."<br />";
}


?>