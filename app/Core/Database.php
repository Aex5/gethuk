<?php if (!defined('GETHUK')) die ('gak boleh bang!');

class Database {
  private static $_instance = null;
  private $mysqli;

  public function __construct() {
    $this->mysqli = new mysqli('localhost', 'root', '', 'todolar');
  }

  public static function getInstance() {
    if (!isset(self::$_instance)) {
      self::$_instance = new Database();
    }
    return self::$_instance;
  }

  public function GetAll($table){
    $reply  = [];
    $query  = "SELECT * FROM $table";
    $result = $this->mysqli->query($query);

    while ($row = $result->fetch_assoc()) {
      $reply[] = $row;
    }

    return $reply;
  }
}

?>
