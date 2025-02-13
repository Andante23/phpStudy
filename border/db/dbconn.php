
<?php


  $localhost = 'localhost';
  $user = 'root';
  $password = '1234';
  $db = 'board';


  
  $con = new  mysqli($localhost,$user,$password ,$db);
  // echo $con -> host_info . "\n";

  if($con -> connect_error){
  	die("연결 실패 : ". $conn -> connect_error);
  }
   
  
  // echo "연결 성공"


?>