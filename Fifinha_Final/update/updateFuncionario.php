<?php
        include 'conexao.php';
        
        $idFuncionario = $_POST['idFuncionario'];
        $idEndereco = $_POST['idEndereco'];
        
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $cargo = $_POST['cargo'];
        
        $cep = $_POST['cep'];
        $numero = $_POST['numero'];
        $pais = $_POST['pais'];
        
        $sql = "UPDATE endereco SET cepEndereco = '$cep', numeroEndereco = '$numero', paisEndereco = '$pais' WHERE idEndereco = '$idEndereco'";
        $result = mysql_query($sql);
        $sql = "UPDATE funcionarios SET nomeFuncionario = '$nome', cpfFuncionario = '$cpf', cargoFuncionario = '$cargo' WHERE idFuncionario = '$idFuncionario'";
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
      