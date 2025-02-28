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
  </head>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>