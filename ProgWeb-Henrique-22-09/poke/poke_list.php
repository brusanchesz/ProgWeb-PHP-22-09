<?php
include('conectar.php');

if (!empty($_REQUEST['action'])){
    if ($_REQUEST['action'] == 'excluir'){
        $idPkemon = $_REQUEST['idPkemon'];
        $sql_delete = "DELETE FROM pokedex WHERE idPkemon = '$idPkemon'";

        if(mysqli_query($con, $sql_delete)){
            echo "<b>excluido com sucesso</b><br>";
        }else{
            echo "<b>erro ao excluir</b><br>";
        }
    }//fim do excluir

    if ($_REQUEST['action'] == 'novo'){//acao para salvar bicho
        $nome = $_REQUEST['nome'];
        $tipo = $_REQUEST['tipo'];
        $sql_insert = "INSERT INTO pokedex (`nome`, `tipo`) values ('$nome', '$tipo')";

        if(mysqli_query($con, $sql_insert)){
            echo"<b>Pokemon salvo na Pokedex</b><br>";
        }else{
            echo "<b>Erro ao salvar o pokemon</b><br>";
        }

    }
}//fim da acao

$consulta = "SELECT * FROM pokedex"; //sql de consulta
$resultado = mysqli_query($con, $consulta);//consulta no bd
?>

<a href="poke_new.php">NOVO POKEMON </a>

<table border ="1">
    <thead>
        <tr>
        <td>ID</td>
        <td>E</td>
        <td>X</td>
        <td>Nome</td>
        <td>Tipo</td>
</tr>
</thead>

<?php

//while para percorrer todas as posicoes do array
while ($row = mysqli_fetch_array($resultado, MYSQLI_BOTH)){
    $link="<a href='poke_list.php?action=excluir&idPkemon=$row[idPkemon]'>Excluir>";

    //$link_editar="<a href='poke_list.php?action=editar&idPkemon=$row[idPkemon]'>Editar>"; --- falta terminar

    echo "<tr><td>$row[idPkemon]</td>";
    echo "<td>E</td>";
    echo "<td>$link</td><td>";
    echo "<td>$row[nome]</td>";
    echo "<td>$row[tipo]</td></tr>";
}

?>

<?php

//??? faltou copiar coisa aqui

?>

</table>