<?php
    function table(){
        include "conexao.php";
        $select="SELECT * FROM aluno ORDER BY nome";
        $res=mysqli_query($con, $select);
        while($linha=mysqli_fetch_assoc($res)){
            echo "<tr>";
            echo"<td>".$linha["prontuario"]."</td>";
            echo"<td>".$linha["nome"]."</td>";
            echo"<td>".$linha["email"]."</td>";
            echo"<td>".$linha["data_nascimento"]."</td>";
            echo"<td>".$linha["sexo"]."</td>";
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
                <th colspan="5">Aluno</th>
            </tr>
            <tr>
                <td>Prontuario</td>
                <td>Nome</td>
                <td>Email</td>
                <td>Data de nascimento</td>
                <td>Sexo</td>
            </tr>
            <?php table(); ?>
        </table>
    </body>
</html>