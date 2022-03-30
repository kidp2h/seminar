<?php

class Database {
  private static Database $instance;
  private static  $con;

  public static function Instance() {
    if (!isset(self::$instance))
      self::$instance = new Database();
    return self::$instance;
  }
  static public function connect() {
    try {

      self::$con = mysqli_connect("184.168.99.241", "eb4p7xlxbl39", "Sliverdz2604", "shop");
      mysqli_set_charset(self::$con, 'UTF8');
      if (mysqli_connect_errno()) {
        echo "Failed" . mysqli_connect_error();
        exit();
      }
      return self::$con;
    } catch (\Exception $th) {
      throw $th;
      exit();
    }
  }

  public function getDatabase() {
    return self::$con;
  }
}

Database::Instance()->connect();