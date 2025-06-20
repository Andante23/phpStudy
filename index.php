<?php 
require__DIR__ . '/vendor/autoload.php';
session_start();
include "core/database.php";
if (!isset($_SESSION['id'])) {  
    echo 
    "
      <script>
        window.location.href = 'login/login.php';
      </script>
    ";
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
    <script src="js/tblSearch.js" defer></script>
    <link href="style/default.css" rel="stylesheet">
</head>
<body>
    
    <header class="d-flex align-items-center justify-content-between">
      <h1 class="p-3">
         게시판
      </h1>
      <ul class="d-flex align-items-center  m-3 listStyle"  style=" list-style-type: none;" >
        <li><a><strong> <?php echo $_SESSION['nickname'] ?></strong>님</a></li>
           <li>  <a href="write/write.php" class="p-3">글쓰기</a></li>
           <li> <a href="profile/profile.php" class="p-3">MY 프로필</a></li>
           <li> <a href="login/logout.php">로그아웃</a></li>
      </ul>
    </header>
    <div class="container mt-5">
<label htmlfor="검색 ">
 <span>검색:</span>
<input type="search" placeholder="입력하세요" id= "table_search" style="width:350px; height:30px ; margin-bottom: 9px;"  >
       </label>
        <?php
        if (!$con) {
            die("<div class='alert alert-danger'>데이터베이스 연결 실패: " . mysqli_connect_error() . "</div>");
        }
        $query = "SELECT board.title, register.nickname,board.bo_id FROM board INNER JOIN register ON board.user_id = register.id";
        $result = $con->query($query);
        if ($result && $result->num_rows > 0) {

            echo '<table id="table" class="table table-bordered">';
            echo '<thead class="table-dark">
                    <tr>
                        <th>제목</th>
                        <th>작성자</th>
                    </tr>
                  </thead>';
            echo '<tbody>';
            while ($row = $result->fetch_assoc()) { 
                echo "<tr>
                        <td><a href='../detail/detail.php?id={$row['bo_id']}'>{$row['title']}</a></td>
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
