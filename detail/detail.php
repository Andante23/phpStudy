<?php
   session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../style/default.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>상세페이지</title>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        .container {
            margin-top: 50px;
        }
        .post-title {
            font-size: 2.5rem;
            font-weight: bold;
            color: #333;
        }
        .post-content {
            font-size: 1.2rem;
            line-height: 1.6;
            color: #555;
        }
        .author {
            font-style: italic;
            color: #888;
        }
        .buttons a {
            font-size: 1rem;
            color: #007bff;
            text-decoration: none;
            margin-right: 15px;
        }
        .buttons a:hover {
            text-decoration: underline;
        }
        .disabled-link {
            color: gray;
            pointer-events: none;
        }
    </style>
</head>
<body>

<div class="container">
    <?php  
        // 1. 클라이언트가 요청한 페이지 아이디를 받아옴니다.
        $get_bo_id = $_GET['id'];

        // 2. id 값을 안전하게 처리하여 SQL 쿼리를 실행합니다 (prepared statement 사용)
        $stmt = $con->prepare("SELECT * FROM board INNER JOIN register ON board.user_id = register.id WHERE bo_id = ?");
        $stmt->bind_param("i", $get_bo_id);
        $stmt->execute();
        $result = $stmt->get_result();

        // 3. 연관배열이 존재하면 while문으로 데이터를 나열합니다.
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "
                <div class='post'>
                    <h1 class='post-title'>{$row["title"]}</h1>
                    <p class='post-content'>{$row["content"]}</p>
                    <p class='author'>작성자: {$row["nickname"]}</p>      
                </div>";

                // If the session nickname does not match the post's nickname, disable the delete and update links.
                echo "<div class='buttons'>";
                if ($_SESSION['nickname'] != $row["nickname"]) {
                    echo "
                    <a href='detailDeletePro.php?id=$get_bo_id' class='disabled-link'>삭제</a>
                    <a href='detailUpdatePro.php?id=$get_bo_id' class='disabled-link'>수정</a>";
                } else {
                    echo "
                    <a href='detailDeletePro.php?id=$get_bo_id'>삭제</a>
                    <a href='detailUpdate.php?id=$get_bo_id'>수정</a>";
                }
                echo "</div>";
            }
        } else {
            echo "<div class='alert alert-warning'>게시글을 찾을 수 없습니다.</div>";
        }
    ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
