<?php
  
    include "../db/dbconn.php";
    session_start();


    // 1.  클라이언트가 요청한 페이지 아이디를 받아옴니다. 
    $get_bo_id = $_GET['id'];


    // 2. 위에서 받아온 id로 db에서 데이터를 뽑아옴니다.
    $result = $con ->query("SELECT * FROM board INNER JOIN register ON board.user_id = register.id WHERE bo_id = $get_bo_id");
    // 3. 연관배열이 존재하면  while문으로  데이터를 나열합니다. 
    if($result -> num_rows >0){
    
       while($row = $result -> fetch_assoc()){
     
        echo "
            <div>
                <h1>{$row["title"]}</h1>
                <p>{$row["content"]}</p>
                <span>{$row["nickname"]}</span>      
            </div>  
       ";


       if($_SESSION['nickname'] != $row["nickname"]){
         
         echo "
           <p>
         <a href = 'deletePro.php?id=$get_bo_id' disabled>삭제</a> 
           </p>
         ";
         echo "
         <p>
       <a href = 'updatePro.php?id=$get_bo_id' disabled>수정</a> 
         </p>
       ";
       }else{
        echo "
        <p>
      <a href = 'deletePro.php?id=$get_bo_id' >삭제</a> 
        </p>
      ";
      echo "
      <p>
    <a href = 'update.php?id=$get_bo_id' >수정</a> 
      </p>
    ";
       }
       


    }
}else{
    echo "게시글을 찾을 수 없습니다.";
}


?>