


<!DOCTYPE html>
<html lang="ko">
        <head>     
             <meta charset="UTF-8">     
             <title>회원가입 페이지</title>
    <link href="../style/default.css" rel="stylesheet">

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        </head>

        <body>     
               <form method="post" action="../join/joinPro.php">
                   <input type="text"  id="useridea" name="useridea" required minlength="8" maxlength="12" placeholder="아이디"> <br>
                   <input type="password" id="password" name="password"  minlength="8" maxlength="12" placeholder="비밀번호" required> <br>
                     <input type="password" id="rePw" name="rePw"  minlength="8" maxlength="12" placeholder="비밀번호 다시 입력" required> <br>
                   <input type="text"  id="nickname" name="nickname" required placeholder="게시판 작성시 닉네임"> <br>
                   <input type="number" id="age" name="age" required placeholder="나이 입력" min="0">
                 <div>
                   <input type="submit" value="회원가입">
                   <input type="reset" value="지우기">
                  </div>
               </form>

               이미 있으세요? <a href="../login/login.php">로그인</a>


                   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        </body>
</html>