<?php
    require_once "dados.php";

    if(isset($_GET["id"])){
        echo $alunos[$_GET["id"]]["ra"];
        echo $alunos[$_GET["id"]]["nome"];
        echo $alunos[$_GET["id"]]["cpf"];
    }

?>