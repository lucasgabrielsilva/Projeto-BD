<?php
     
    include 'conexao.php';

    $algo = $_POST['clube'];
    $sql = "SELECT * FROM clubes WHERE idClube = '$algo'";
    $result = mysql_query($sql);
    $dadosClube = mysql_fetch_row($result);
    
    $algo = $_POST['plano'];
    $sql = "SELECT * FROM planos WHERE idPlano = '$algo'";
    $result = mysql_query($sql);
    $dadosPlano = mysql_fetch_row($result);
    
    $nome = $_REQUEST['nome'];
    $email = $_REQUEST['email'];
    $cpf = $_REQUEST['cpf'];
    $cep = $_REQUEST['cep'];
    $numero = $_REQUEST['numero'];
    $pais = $_REQUEST['pais'];
    
    $sql = mysql_query("SELECT max(idSocio) FROM socios");
    $idSocio = mysql_fetch_row($sql);
    $idSocio[0] = $idSocio[0] + 1;
    
    $sql = mysql_query("SELECT max(idEndereco) FROM endereco");
    $idEndereco = mysql_fetch_row($sql);
    $idEndereco[0] = $idEndereco[0] + 1;
    
    mysql_query("INSERT INTO endereco(idEndereco, cepEndereco, numeroEndereco, paisEndereco) VALUES('$idEndereco[0]','$cep','$numero','$pais')");
    $result = mysql_query("INSERT INTO `socios` (`idSocio`, `nomeSocio`, `CPFSocio`, `emailSocio`, `Endereco_idEndereco`, `Clube_idClube`, `Plano_idPlano`) VALUES ('$idSocio[0]', '$nome', '$cpf', '$email', '$idEndereco[0]', '$dadosClube[0]', '$dadosPlano[0]')");

            
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
