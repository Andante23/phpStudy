<?php   
  include "../db/dbconn.php";  
  session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<header>
 <a href="../home.php">Home</a>
</header>

<p> 이름: <b><?php  echo $_SESSION['nickname']; ?> </b> </p>

<a href="../profile/changePw.php">비밀번호 변경</a>






</body>
</html>