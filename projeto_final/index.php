<?php

    $base_url = 'htpp://localhost/Auro/projeto_final/index.php';
    $controlador_padrao = 'categoria';

        $controller = ucfirst($_GET['c'] ?? $controlador_padrao);

        $metodo = $_GET['m'] ?? "index";

        $path_controller = "controller/$controller.php";
        //verifica se o arquivo de controller existe
        if(file_exists($path_controller)){
            require $path_controller;

                //cria o objeto controlador
                $obj = new $controller();
                $id = $_GET['id'] ?? null;

                //verifica se o controlador possui uma função
                if(is_callable(array($obj, $metodo))){
                    //executa o método do controlador
                    call_user_func_array(array($obj, $metodo), array());
                }
        }


    function base_url(){
        global $base_url;
        return $base_url;
    }


?>