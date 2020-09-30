<?php
    function table(){
        include "conexao.php";
        $select="SELECT * FROM professor ORDER BY nome";
        $res=mysqli_query($con, $select);
        while($linha=mysqli_fetch_assoc($res)){
            echo "<tr>";
            echo"<td>".$linha["prontuario"]."</td>";
            echo"<td>".$linha["nome"]."</td>";
            echo"<td>".$linha["formacao"]."</td>";
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
                <th colspan="3">Professor</th>
            </tr>
            <tr>
                <td>Prontuario</td>
                <td>Nome</td>
                <td>Formação</td>
            </tr>
            <?php table(); ?>
        </table>
    </body>
</html>