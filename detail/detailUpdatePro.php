<?php

try{
session_start();
include "../db/dbconn.php";



$up_id =  $_GET["id"];

if($_SERVER['REQUEST_METHOD'] == 'POST'){
 $up_title = $_POST["up_title"];
 $up_content = $_POST["up_content"];


 $result = $con -> query("UPDATE board SET title = '$up_title' , content='$up_content' WHERE bo_id=$up_id");


 if($result){
    echo "<script>
                alert('수정이 되었습니다.');
                document.location.href = '../border/home.php';
         </script>";
 }

}

}catch (Exception $e) {
  echo "Exception". $e ->getcode().": ".$e -> getMessage()."<br />".
     " in ". $e->getFile()." on line ". $e -> getLine()."<br />";
}







?>