<?php if (!defined('GETHUK')) die ('gak boleh bang!');

class Form_Builder extends Database
{
  public function GetAll($table)
  {
    $reply  = [];
    $query  = "SELECT * FROM $table";
    $result = $this->mysqli->query($query);

    while ($row = $result->fetch_assoc()) {
      $reply[] = $row;
    }

    return $reply;
  }
}
