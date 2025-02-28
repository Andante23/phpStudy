<?php

include "../db/dbconn.php";
session_start();



$update_id = $_GET['id'];


$sql = $con -> query("SELECT * FROM board INNER JOIN register ON board.user_id = register.id WHERE bo_id = $update_id");

$row = $sql -> fetch_array();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>상세페이지수정</title>
     <link href="../style/default.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>

</head>
<body>

    <form action="detailUpdatePro.php?id=<?php echo $row['bo_id']?>" method="post">
    <input type="text" name="up_title" id="up_title" value=<?php echo $row['title']?>>
    <textarea name="up_content" id="up_content" > <?php echo $row['content']     ?></textarea>
     <input type="submit" value="수정하기">
    </form>    
       

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
