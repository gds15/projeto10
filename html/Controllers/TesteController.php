<?php
namespace Html\Controllers;

//isso sao coisas do slim
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;

//aqui o autoload se virando
use Html\Models\Teste;

class testeController extends Controlle {

  public function index(ServerRequestInterface $request, ResponseInterface $response) {
    //aqui basicamente vai pegar a funcao teste q esta na pasta Models no arquivo teste.php que vai chamar 
    //a funcao all() que esta no arquivo model para listar tudo da tabela teste 
    //$modelo = Teste::all();

    //$this->modelo = $modelo;

    //aqui vai retornar o caminho da view que esta na pasta teste dentro de Views pegando o arquivo index.php
    return $this->view('teste/index',$response);
  }

  public function detalhe(ServerRequestInterface $request, ResponseInterface $response) {

    return $this->view('teste/nada',$response);
  }

}
