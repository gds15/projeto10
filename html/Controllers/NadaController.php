<?php
namespace Html\Controllers;

//isso sao coisas do slim
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;


class nadaController extends Controlle {

  public function index(ServerRequestInterface $request, ResponseInterface $response) {

    return $this->view('nada/index',$response);
  }

}
