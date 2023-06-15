<?php
class Controller{
    public function model($model){
        require_once '../app/Models/'.$model.'.php';
        return new $model;
    }//fim da function model

    public function view($view, $dados = []){
        $arquivo = ('../app/Views/'.$view.'.php');
        if(file_exists($arquivo)){
        require_once $arquivo;
        }else{
            die("O arquivo não existe");
        }//fim do else
    }//fim da function view
}//fim da classe