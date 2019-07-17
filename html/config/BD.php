<?php
namespace Config;

class Db
{
  public static function conexao()
  {
    $conexao = new \pg_connect("host=localhost;dbname=teste;charset=utf8","root","123");
    return $conexao;
  }
}