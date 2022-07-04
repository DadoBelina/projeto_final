<?php

    require "model/CategoriaModel.php";
    require "controller/Controller.php";

    class Categoria extends Controller{

        function __construct(){
            $this->model = new CategoriaModel();
        }

        function index(){
            $categorias = ($this->model->buscarTodos());
            $this->load_template("categoria/listagem.php", $categorias);
        }

        function add(){
            echo "eu sou a função add do categoria";
        }

        function excluir($id){
            $this->model->excluir($id);
            header('location: ?c=categoria');
        }
    }

    //codigos para mexer no bd!
    //$model->inserir("Produto de Limpeza");
    //$model->excluir(1);
    //$model->atualizar("Smartphone", 2);
    //var_dump($model->buscarPorId(2));
?>