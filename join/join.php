


<!DOCTYPE html>
<html lang="ko">
        <head>     
             <meta charset="UTF-8">     
             <title>회원가입 페이지</title>
    <link href="../style/default.css" rel="stylesheet">

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <style>
        .fcontainer{
            margin: 10em;  

        }

      
      .fcontainer > form > .fc_idea_input ,
            .fcontainer > form > .fc_rePw_input ,
                  .fcontainer > form > .fc_pw_input ,
                        .fcontainer > form > .fc_age_input ,
                              .fcontainer > form > .fc_nick_input 

      {
         width: 360px;
           height: 40px;
           margin:10px;
      }

    </style>
        </head>

        <body>     
            <div class="d-flex justify-content-center fcontainer">
               <form method="post" action="../join/joinPro.php">
                   <input type="text"  id="useridea" name="useridea" 
                    class="fc_idea_input"
                   required minlength="8" maxlength="12" placeholder="아이디"> <br>
                   <input type="password" id="password" name="password"  minlength="8" maxlength="12" placeholder="비밀번호"class="fc_pw_input" 
                   required> <br>
                     <input type="password" id="rePw" name="rePw"
                     class="fc_rePw_input" 
                       minlength="8" maxlength="12" placeholder="비밀번호 다시 입력" required> <br>
                   <input type="text"  id="nickname" name="nickname" 
                    class="fc_nick_input" 
                   required placeholder="게시판 작성시 닉네임"> <br>
                   <!-- 나이 최대 최소 값 부여  -->
                   <input type="number" id="age" name="age" 
                    class="fc_age_input"
                   required placeholder="나이 입력" min="0" max="110">
                 <div class="d-flex justify-content-end align-center " style="margin: 10px;  " >
                   <input type="submit" value="회원가입"  class="btn btn-primary w-50">
                   <input type="reset" value="지우기"  class="btn btn-danger w-50" style="margin-left:1.3px;" >
                  </div>
                      <p class="text-center" style="padding: 3px;">
  이미 있으세요? <a href="../login/login.php">로그인</a>
                      </p>
               </form>
            </div>

             


                   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        </body>
</html>