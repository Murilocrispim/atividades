<?php
    function table(){
        include "conexao.php";
        $select="SELECT turma.id_ad as id_ad_turma, aluno.nome as nome_aluno, disciplina.materia as materia_disciplina FROM turma INNER JOIN aluno ON turma.cod_aluno=aluno.prontuario INNER JOIN disciplina ON turma.cod_disciplina=disciplina.id_disciplina ORDER BY id_disciplina";
        $res=mysqli_query($con, $select);
        while($linha=mysqli_fetch_assoc($res)){
            echo "<tr>";
            echo"<td>".$linha["id_ad_turma"]."</td>";
            echo"<td>".$linha["nome_aluno"]."</td>";
            echo"<td>".$linha["materia_disciplina"]."</td>";
            echo "</tr>";
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <table border="1px">
            <tr >
                <th colspan="3">Turma</th>
            </tr>
            <tr>
                <td>id_ad</td>
                <td>cod_aluno</td>
                <td>cod_disciplina</td>
            </tr>
            <?php table(); ?>
        </table>
    </body>
</html>