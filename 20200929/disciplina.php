<?php
    function table(){
        include "conexao.php";
        $select="SELECT * FROM disciplina INNER JOIN professor ON disciplina.cod_prof = professor.prontuario ORDER BY disciplina.materia desc";
        $res=mysqli_query($con, $select);
        while($linha=mysqli_fetch_assoc($res)){
            echo "<tr>";
            echo"<td>".$linha["materia"]."</td>"; 
            echo"<td>".$linha["descricao"]."</td>";
            echo"<td>".$linha["nome"]."</td>";
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
                <th colspan="3">Disciplina</th>
            </tr>
            <tr>
                <td>nome</td>
                <td>descrição</td>
                <td>cod_prof</td>
            </tr>
            <?php table(); ?>
        </table>
    </body>
</html>