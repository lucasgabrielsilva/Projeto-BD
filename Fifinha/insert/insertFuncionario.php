<?php
     
    include 'conexao.php';

    $algo = $_POST['clube'];
    $sql = "SELECT * FROM clubes WHERE idClube = '$algo'";
    $result = mysql_query($sql);
    $dadosClube = mysql_fetch_row($result);
    
    $nome = $_REQUEST['nome'];
    $cargo = $_REQUEST['cargo'];
    $salario = $_REQUEST['salario'];
    $cpf = $_REQUEST['cpf'];
    $cep = $_REQUEST['cep'];
    $numero = $_REQUEST['numero'];
    $pais = $_REQUEST['pais'];
    
    $sql = mysql_query("SELECT max(idFuncionario) FROM funcionarios");
    $idFuncionario = mysql_fetch_row($sql);
    $idFuncionario[0] = $idFuncionario[0] + 1;
    
    $sql = mysql_query("SELECT max(idEndereco) FROM endereco");
    $idEndereco = mysql_fetch_row($sql);
    $idEndereco[0] = $idEndereco[0] + 1;
    
    mysql_query("INSERT INTO endereco(idEndereco, cepEndereco, numeroEndereco, paisEndereco) VALUES('$idEndereco[0]','$cep','$numero','$pais')");
    $result = mysql_query("INSERT INTO `funcionarios` (`idFuncionario`, `nomeFuncionario`, `CargoFuncionario`, `SalarioFuncionario`, `cpfFuncionario`, `Endereco_idEndereco`, `Clube_idClube`) VALUES ('$idFuncionario[0]', '$nome', '$cargo', '$salario', '$cpf', '$idEndereco[0]', '$dadosClube[0]')"); 

            
    if(!$result){
            echo 'Desculpe, Ocorreu um erro em nossos servidores, tente novamente mais tarde!';
            ?>
<a href="\Fifinha\home\index.html"> <input type="submit" value="Voltar a pagina inicial" /> </a>
            <?php
        }
        else{
            echo 'Cadastro realizado com sucesso!!';
            ?>
            <a href="\Fifinha\home\index.html"> <input type="submit" value="Voltar a pagina inicial" /> </a>
        <?php
            } 
?>
