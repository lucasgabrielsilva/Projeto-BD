<?php
     
    include 'conexao.php';

    $algo = $_POST['clube'];
    $sql = "SELECT * FROM clubes WHERE idClube = '$algo'";
    $result = mysql_query($sql);
    $dadosClube = mysql_fetch_row($result);
    
    $nome = $_REQUEST['nome'];
    $capacidade = $_REQUEST['capacidade'];
    $cep = $_REQUEST['cep'];
    $numero = $_REQUEST['numero'];
    $pais = $_REQUEST['pais'];
    
    $sql = mysql_query("SELECT max(idEstadio) FROM estadio");
    $idEstadio = mysql_fetch_row($sql);
    $idEstadio[0] = $idEstadio[0] + 1;
    
    $sql = mysql_query("SELECT max(idEndereco) FROM endereco");
    $idEndereco = mysql_fetch_row($sql);
    $idEndereco[0] = $idEndereco[0] + 1;

    mysql_query("INSERT INTO endereco(idEndereco, cepEndereco, numeroEndereco, paisEndereco) VALUES('$idEndereco[0]','$cep','$numero','$pais')");
    $result = mysql_query("INSERT INTO estadio(idEstadio, nomeEstadio, capacidadeEstadio, endereco_idEndereco, clube_idClube) VALUES('$idEstadio[0]','$nome','$capacidade','$idEndereco[0]', '$dadosClube[0]')");
    
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
