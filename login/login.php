



<!DOCTYPE html>
<html lang="ko">
        <head>     
             <meta charset="UTF-8">     
             <title>로그인 페이지</title>
    <link href="../style/default.css" rel="stylesheet">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .fcontainer{
            margin: 10em;  

        }

       .fcontainer > form  > .fc_text_input , 
       .fcontainer > form  > .fc_pw_input {
           width: 360px;
           height: 40px;
           margin:10px;
       }


      

    </style>
        </head>

        <body>     
              <div class="d-flex justify-content-center fcontainer">
               <form method="post" action="loginPro.php">
                   <input type="text"  id="useridea" name="useridea"  class="fc_text_input" 
                    required> <br>
                   <input type="password" id="password" name="password"  class="fc_pw_input" required> <br>

                 <div class="d-flex justify-content-end align-center " style="margin: 10px;  " >
                   <input type="submit" value="로그인"  
                   class="btn btn-primary w-50" >
                   <input type="reset" value="지우기"
                    class="btn btn-danger w-50" style="margin-left:1.3px;" >
                  </div>
                   <p class="text-center" style="padding: 3px;">
                        아이디가 없으신가요? <a href="../join/join.php">회원가입</a>
                   </p>
                  
               </form>

              
               </div>

                   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        </body>

</html>