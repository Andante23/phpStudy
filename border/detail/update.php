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
    <title>Document</title>
</head>
<body>

    <form action="updatePro.php?id=<?php echo $row['bo_id']?>" method="post">
    <input type="text" name="up_title" id="up_title" value=<?php echo $row['title']?>>
    <textarea name="up_content" id="up_content" > <?php echo $row['content']     ?></textarea>
     <input type="submit" value="수정하기">
    </form>    
       
</body>
</html>
