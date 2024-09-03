<?php

class MySql{

  private  static$pdo = null;

  //Padrão Singleton para conectar a DB
  public static function getConn(){
    if(self::$pdo==null){
      //conection with a PDO connection with HOST=localhost , Database name = marketplace_danki, username = root, password = ''.
      self::$pdo = new PDO('mysql:host=localhost;dbname=marketplace_danki', 'root','');
      return self::$pdo;
    }else{
      return self::$pdo;
    }
  }
}