<?php
    require_once "dados.php";

    if (isset($_POST["ra"]) and isset($_POST["nome"]) and isset($_POST["cpf"])){
        echo "Foi enviado os Cadastros! . <br>";
    }else{
        echo "Não foi enviado os Cadastros! . <br>";
    };
    
    $alunoform = array(
        "ra" => $_POST["ra"],
        "nome" => $_POST["nome"],
        "cpf" => $_POST["cpf"]
    );

    $alunos = $alunoform;
        echo "<table border = 1px>";

        echo "<tr>";
        echo "<th>" . "Matricula" . "</th>";
        echo "<th>" . "Nome" . "</th>";
        echo "<th>" . "CPF" . "</th>";
        echo "</tr>";
//foreach($alunos as $alu)
        echo "<tr>";
        echo "<td><a href='ver.php?$alunos'>". $aluno1['ra'] ."</a></td>";
        echo "<td>". $aluno1['nome'] ."</td>";
        echo "<td>". $aluno1['cpf']."</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td><a href='ver.php?1=1235'>". $aluno2['ra'] ."</td>";
        echo "<td>". $aluno2['nome'] ."</td>";
        echo "<td>". $aluno2['cpf']."</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td><a href='ver.php?2=1236'>". $aluno3['ra'] ."</td>";
        echo "<td>". $aluno3['nome'] ."</td>";
        echo "<td>". $aluno3['cpf']."</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td><a href='ver.php?3=9876'>". $alunoform['ra'] ."</td>";
        echo "<td>". $alunoform['nome'] ."</td>";
        echo "<td>". $alunoform['cpf']."</td>";
        echo "</tr>";

        echo "</table>";
?>