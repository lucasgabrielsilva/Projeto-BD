<?php
        include 'conexao.php';
        
        $idEstadio = $_POST['idEstadio'];
        $idEndereco = $_POST['idEndereco'];
        
        $nome = $_POST['nome'];
        $capacidade = $_POST['capacidade'];
        
        $cep = $_POST['cep'];
        $numero = $_POST['numero'];
        $pais = $_POST['pais'];
        
        $sql = "UPDATE endereco SET cepEndereco = '$cep', numeroEndereco = '$numero', paisEndereco = '$pais' WHERE idEndereco = '$idEndereco'";
        $result = mysql_query($sql);
        $sql = "UPDATE estadio SET nomeEstadio = '$nome', capacidadeEstadio = '$capacidade' WHERE idEstadio = '$idEstadio'";
        $result = mysql_query($sql);
        
        if(!$result){
            echo 'Desculpe, Ocorreu um erro em nossos servidores, tente novamente mais tarde!';
            ?>
<a href="\Fifinha\home\index.html"> <input type="submit" value="Voltar a pagina inicial" /> </a>
            <?php
        }
        else{
            echo 'Alteração realizada com sucesso!!';
            ?>
            <a href="\Fifinha\home\index.html"> <input type="submit" value="Voltar a pagina inicial" /> </a>
        <?php
            }
?>
      