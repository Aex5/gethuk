<?php if (!defined('GETHUK')) die ('gak boleh bang!');

class Database {
  private static $_instance = null;
  protected $mysqli;

  public function __construct() {
    $this->mysqli = new mysqli('localhost', 'root', '', 'todolar');
  }

  public static function getInstance() {
    if (!isset(self::$_instance)) {
      self::$_instance = new Database();
    }
    return self::$_instance;
  }

}

?>
