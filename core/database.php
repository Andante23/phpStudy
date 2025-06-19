<?php

class Database {
    
   private $host = '127.0.0.1';
   private $username = 'root';
   private $password = '1234';
   private $dbname = 'board';
   public $pdo;

   public function __construct() {

      try {
          $this->pdo = new PDO(
              "mysql:host={$this->host};dbname={$this->dbname};charset=utf8",
              $this->username,
              $this->password
          );
          // PDO 오류 잡아내기
          $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);           
      } catch (PDOException $e) {
          die("DB 연결 실패: " . $e->getMessage());
      }
   }

   // 외부에서 사용 
   public function getConnection() {
      return $this->pdo;
   }
}

?>
