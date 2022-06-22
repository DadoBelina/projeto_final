<?php
    require "../model/categoria_model.php";
    require "../conexao.php";

    $model = new CategoriaModel($con);
    //$model->inserir("Produto de Limpeza");
    //$model->excluir(1);
    //$model->atualizar("Smartphone", 2);
    var_dump($model->buscarPorId(2));
?>