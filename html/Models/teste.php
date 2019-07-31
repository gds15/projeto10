<?php

namespace Html\Models;

//aqui vai servir para a class modell saber qual a tabela e a pk da tabela para fazer o 
//insert delete update sem termos q ficar fazendo sql
//na mao  
class Teste extends Model
{
  protected $table = "teste";
  protected $primary_key = "id";
}
