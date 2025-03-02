<? session_start()?>


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

      
    </style>
        </head>

        <body>     
              <div class="d-flex justify-content-center fcontainer">
               <form method="post" action="loginPro.php">
                   <input type="text"  id="useridea" name="useridea" style="width:360px;height:40px; margin:10px;" 
                    required> <br>
                   <input type="password" id="password" name="password" style="width:360px;height:40px;margin:10px;" required> <br>

                 <div class="d-flex justify-content-end align-center" >
                   <input type="submit" value="로그인" 
                   style="idth:360px;height:40px; margin:2px;"
                   class="btn btn-primary">
                   <input type="reset" value="지우기"
                    class="btn btn-danger" 
                     style="idth:360px;height:40px;">
                  </div>
                   아이디가 없으신가요? <a href="../join/join.php">회원가입</a>
               </form>

              
               </div>

                   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        </body>

</html>