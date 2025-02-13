<? session_start()?>


<!DOCTYPE html>
<html lang="ko">
        <head>     
             <meta charset="UTF-8">     
             <title>로그인 페이지</title>

        </head>

        <body>     
               <form method="post" action="loginPro.php">
                   <input type="text"  id="useridea" name="useridea"
                    required> <br>
                   <input type="paswword" id="password" name="password" required> <br>

                 <div>
                   <input type="submit" value="로그인">
                   <input type="reset" value="지우기">
                  </div>
               </form>

               아이디가 없으신가요? <a href="../join/join.php">회원가입</a>
        </body>

</html>