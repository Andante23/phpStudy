<?php 
// Include database connection
include "../border/db/dbconn.php";

// Start session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['id'])) {  
    header("Location: ../border/login/login.php");
    exit; // Prevent further execution
}
?>

<!doctype html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>게시판 홈페이지</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <header>
      <h1>
         게시판
      </h1>

      <ul>
        <a href="../border/write/write.php">글쓰기</a>
      </ul>
    </header>

    <div class="container mt-5">
        <h2 class="mb-4">게시판 목록</h2>

        <?php
        // Ensure database connection is available
        if (!$con) {
            die("<div class='alert alert-danger'>데이터베이스 연결 실패: " . mysqli_connect_error() . "</div>");
        }

        // Fetch data from the database
        $query = "SELECT board.title, register.nickname FROM board INNER JOIN register ON board.user_id = register.id";
        $result = $con->query($query);

        if ($result && $result->num_rows > 0) {
            echo '<table class="table table-bordered">';
            echo '<thead class="table-dark">
                    <tr>
                        <th>제목</th>
                        <th>작성자</th>
                    </tr>
                  </thead>';
            echo '<tbody>';

            while ($row = $result->fetch_assoc()) { 
                echo "<tr>
                        <td>{$row['title']}</td>
                        <td>{$row['nickname']}</td>
                      </tr>";
            }

            echo '</tbody></table>';
        } else {
            echo "<div class='alert alert-warning'>게시물이 없습니다.</div>";
        }

        // Close database connection
        $con->close();
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
