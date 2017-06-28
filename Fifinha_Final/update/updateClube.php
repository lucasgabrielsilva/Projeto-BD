<?php
        include 'conexao.php';
        
        $idClube = $_POST['idClube'];
        $idEndereco = $_POST['idEndereco'];
        
        $nome = $_POST['nome'];
        
        $cep = $_POST['cep'];
        $numero = $_POST['numero'];
        $pais = $_POST['pais'];
        
        $sql = "UPDATE endereco SET cepEndereco = '$cep', numeroEndereco = '$numero', paisEndereco = '$pais' WHERE idEndereco = '$idEndereco'";
        $result = mysql_query($sql);
        $sql = "UPDATE clubes SET nomeClube = '$nome' WHERE idClube = '$idClube'";
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
      