<?php
include "../db/dbconn.php";
session_start();
$update_id = $_GET['id'];
$sql = $con -> query("SELECT * FROM board INNER JOIN register ON board.user_id = register.id WHERE bo_id = $update_id");
$row = $sql -> fetch_array();
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시글 수정</title>
    <link href="../style/default.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            max-width: 600px;
            margin-top: 50px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .form-control {
            margin-bottom: 15px;
        }
        .btn-custom {
            width: 100%;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center mb-4">게시글 수정</h2>
        <form action="detailUpdatePro.php?id=<?php echo $row['bo_id'] ?>" method="post">
            <div class="mb-3">
                <label for="up_title" class="form-label">제목</label>
                <input type="text" name="up_title" id="up_title" class="form-control" value="<?php echo htmlspecialchars($row['title']) ?>" required>
            </div>
            <div class="mb-3">
                <label for="up_content" class="form-label">내용</label>
                <textarea name="up_content" id="up_content" class="form-control h-100" rows="6" required><?php echo htmlspecialchars($row['content']) ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-custom">수정하기</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
