<?php if (!defined('GETHUK')) die ('gak boleh bang!');

class User {
  private $_db;

  public function __construct() {
    $this->_db = Database::getInstance();
  }  

  public function userGet() {
    return $this->_db->GetAll('users');
  }
}
