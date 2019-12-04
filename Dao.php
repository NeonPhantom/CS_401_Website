<?php
require_once 'KLogger.php';
class Dao {

  //mysql://b4a7911af067b9:3af11d64@us-cdbr-iron-east-05.cleardb.net/heroku_5ddfae61fc20c16?reconnect=true
  //DB_HOST:          us-cdbr-iron-east-05.cleardb.net
  //DB_DATABASE:      heroku_5ddfae61fc20c16
  //DB_USERNAME:      b4a7911af067b9
  //DB_PASSWORD:      3af11d64

  private $host = "us-cdbr-iron-east-05.cleardb.net";
  private $dbname = "heroku_5ddfae61fc20c16";
  private $username = "b4a7911af067b9";
  private $password = "3af11d64";
  private $logger;

  public function __construct() {
    $this->logger = new KLogger ( "log.txt" , KLogger::DEBUG );
  }

  public function getConnection() {
    try {
       $connection = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->username, $this->password);
    } catch (Exception $e) {
      echo print_r($e,1);
    }
    return $connection;
  }

  public function isValidUser($username, $password) {
    $conn = $this->getConnection();
    try {
      $validEmail = $conn->quote($username);
      $result = $conn->query("SELECT * FROM user WHERE email = $validEmail", PDO::FETCH_ASSOC);
      foreach($result as $row) {
        if($row['password'] == $password) {
          return true;
        } else {
          return false;
        }
      }
    } catch(Exception $e) {
      echo print_r($e,1);
      exit;
    }
  }
  public function saveUser ($email, $password) {
    $conn = $this->getConnection();

    $saveQuery = $conn->query("INSERT INTO user(email, password, dateAdded) VALUES ($validEmail, $validPassword, CURDATE())");
    $q = $conn->prepare($saveQuery);
    $q->bindParam(":email", $email);
    $q->execute();
  }

  public function deleteUser ($email) {
    $conn = $this->getConnection();
    $deleteQuery = "DELETE from user WHERE email = :email";
    $q = $conn->prepare($deleteQuery);
    $q->bindParam(":id", $id);
    $q->execute();
  }
}
