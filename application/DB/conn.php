<?php 
class Database {
  protected $userName;
  protected $password;
  protected $dbName;

  public function __construct ( $UserName, $Password, $DbName ) {
    $this->userName = $UserName;
    $this->password = $Password;
    $this->dbName = $DbName;
  }
}