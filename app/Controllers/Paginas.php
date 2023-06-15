<?php
class Paginas extends Controller{
     public function index(){
          $dados = ['titulo'=>'Página Inicial',
                    'descricao'=>'Aula de PHP'
                   ];
          $this->view('paginas/home', $dados);
          }//fim do método index

     public function sobre(){
          $dados = ['titulo'=>'Página Sobre',
          'descricao'=>'Aqui você encontra o melhor conteúdo...'
         ];
          $this->view('paginas/sobre', $dados);
      }// fim do método sobre
}//fim da classe


