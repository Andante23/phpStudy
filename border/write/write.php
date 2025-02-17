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
    <form action="writePro.php" method="post">
      <p>
      <input type="text" id="title" name="title" placeholder="제목(30글자내외)" maxlength="30"> </input>
      </p>
      <p>
      <textarea  id="content" name="content" placeholder="내용"></textarea>
      </p>
      
        <input type="submit" value="제출">
        <input type="reset" value="리셋">
    </form>
</body>
</html>