<?php include "db/dbconn.php"; ?>


<?php 
  
  session_start();



  

  // username 정보가 비어있으면  로그인 페이지로 이동해주세요
  if(!isset($_SESSION['nickname']) && !isset($_SESSION['useridea'])  )  header('location:login/login.php');



   

?>

<!DOCTYPE html>





<html lang="ko">

        <head>     
             <meta charset="UTF-8">     
             <title>HTML !DOCTYPE declaration</title>

        </head>

        <body>     
              <!-- php로 디비 연동 테스트  -->
             <div>
                 <p>
                        <span><?php  echo $_SESSION['nickname']; ?></span>      
                 </p>
            
                 
                 <p><a href="../border/login/logout.php">로그아웃</a></p>
             </div>

              
              
        </body>

</html>