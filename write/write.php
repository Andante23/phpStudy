<?php   

include "../db/dbconn.php";    
session_start();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="../style/default.css" rel="stylesheet">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="../js/write.js"  defer></script>
   

  </head>

    <title>Document</title>
</head>
<body>
  <div class="d-flex justify-content-center "  style="margin: 10em; justify-content:start">
      <form action="writePro.php" method="post">
      <p>
      <label htmlfor="title">글제목</label><br>
      <input type="text" id="title" name="title" class="title" placeholder="제목(30글자내외)" maxlength="30"
       > </input>
      </p>
       <p class="d-flex justify-content-end" id="warn_res_title"></P>
      <p>
          <label htmlfor="content">글내용</label><br>
      <textarea  placeholder="내용(300글자내외)"  id="content" name="content" placeholder="내용" class="content" style="width:360px;height:400px; margin:10px;"  maxlength="300"></textarea>
     <p class="d-flex justify-content-end" id="warn_res"></P>
      </p>
      
      <div class="d-flex justify-content-end align-center mx-2">
        <input type="submit" value="제출"  style="width:60px;height:40px; margin:2px;"
                   class="btn btn-primary">
        <input type="reset" value="리셋"  style="width:60px;height:40px; margin:2px;"
                   class="btn btn-danger">
     </div>
    </form>
  </div>
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    
</body>
</html>