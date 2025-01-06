<?php

namespace App\Models;

use Core\Database;

class User {
  private $db;

  public function __construct() {
    $this->db = new Database();
  }

  public function authenticate($email){
    $result = $this->db->query('SELECT * FROM users WHERE email = ?', "s", $email);
    return $result;
  }

}

?>