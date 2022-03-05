<?php

class Database
{
  /**
   * Get the database connection
   * @return PDO object Connection to the database server */

  public function getConn()
  {
    $db_host = "localhost";
    $db_name = "dwwm_realisation_dp";
    $db_user = "dwwm_realisation_dp";
    $db_pass = "123";

    $dsn = 'mysql:host=' . $db_host . ';dbname=' . $db_name . ';charset=utf8';

    try {

      $db = new PDO($dsn, $db_user, $db_pass);
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      return $db;
    } catch (PDOException $e) {
      echo $e->getMessage();
      exit;
    }
  }
}
