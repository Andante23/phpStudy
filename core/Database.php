<?php

 class Database {
    
   private $localhost = 'localhost';
   private $user = 'root';
   private $pw = '1234';
   private $db = 'board';
   public $pdo;


   public function  __construct() {  //  데이터베이스 객체가 생성됩니다.
     try{
        $this -> pdo = new PDO(
            "mysql:host={$this->host};dbname={$this->dbname};charset=utf8",
            $this->username,
            $this->password
        );
       // PDO 오류 잡아내기
        $this -> pdo -> setAttribute(PDO::ATTR_ERRRMODE , PDO::ERRMODE_EXCEPTION);            
     }catch(PDOException $e){
    die("DB 연결 실패: ". $e -> getMessage());
   }
}

  // 외부에서 사용 
  public function getConnection(){
     return $this -> pdo;
  }
   




 }



?>