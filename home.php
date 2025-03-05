<?php 

include "../border/db/dbconn.php";


session_start();


if (!isset($_SESSION['id'])) {  
    header("Location: ../border/login/login.php");
    exit; 
}




?>

<!doctype html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>게시판 홈페이지</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <style>
       .listStyle{
        list-style-type: none;
       }
   </style>

</head>


<body>

    <header class="d-flex align-items-center justify-content-between">
      <h1 class="p-3">
         게시판
      </h1>

      <ul class="d-flex align-items-center  m-3 listStyle" >
        <li><a><b> <?php echo $_SESSION['nickname'] ?></b></a></li>
           <li>  <a href="../border/write/write.php" class="p-3">글쓰기</a></li>
           <li> <a href="../border/profile/profile.php" class="p-3">MY 프로필</a></li>
           <li> <a href="../border/login/logout.php">로그아웃</a></li>

      </ul>
    </header>

    <div class="container mt-5">
        <h2 class="mb-4">게시판 목록</h2>

        <?php
       
        if (!$con) {
            die("<div class='alert alert-danger'>데이터베이스 연결 실패: " . mysqli_connect_error() . "</div>");
        }

       
        $query = "SELECT board.title, register.nickname,board.bo_id FROM board INNER JOIN register ON board.user_id = register.id";
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
                        <td><a href='../border/detail/detail.php?id={$row['bo_id']}'>
    {$row['title']}
    </a></td>
                        <td>{$row['nickname']}</td>
                      </tr>";
            }

            echo '</tbody></table>';
        } else {
            echo "<div class='alert alert-warning'>게시물이 없습니다.</div>";
        }

       
        $con->close();
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
