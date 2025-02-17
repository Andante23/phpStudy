<?php 
  include "db/dbconn.php";
  session_start();
  // username 정보가 비어있으면  로그인 페이지로 이동해주세요
  if(!isset($_SESSION['nickname']) && !isset($_SESSION['useridea'])  )  header('location:login/login.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

        <body>     
              <!-- php로 디비 연동 테스트  -->
              

              <header>
               <h1><a href="../home.php">Home</a></h1>

               <ul>
                  <li>
                    <p><a href="profile/profile.php">프로필</a></p>         
                    <b><?php  echo $_SESSION['nickname']; ?></b> 님
                  </li>
                  <li>
                    <p><a href="write/write.php">글쓰기 </p>
                  </li>
                   <li>
                      <p><a href="login/logout.php">로그아웃</a></p>
                   </li>
                 </ul>
              
               </header>

        
            <table border="1">

               <tr>
                  <th>제목</th>
                  <td>내용</td>
                  <td>닉네임</td>
               </tr>
            <?php
              $result = $con -> query("SELECT * FROM board INNER JOIN register ON board.user_id = register.id");
      
              if($result -> num_rows > 0){
               // 연관배열 키와 값으로 이루저미

                // forEach를 이용함

                while ( $row = $result -> fetch_assoc() ) {
                 
                 echo" <tr>
                           <th><a href='detail/detail.php?id={$row['bo_id']}'>{$row['title']}</a></th>
                           <td>{$row["content"]}</td>
                           <td>{$row["nickname"]}</td>
               </tr>";
                }

              }
                          
            ?>
             
            </table>
              
              
          
             


              
        </body>

</html>