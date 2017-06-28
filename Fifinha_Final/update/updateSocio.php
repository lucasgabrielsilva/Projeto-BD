<?php
        include 'conexao.php';
        
        $idSocio = $_POST['idSocio'];
        $idEndereco = $_POST['idEndereco'];
        
        $idPlano = $_POST['plano'];
        
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        
        $cep = $_POST['cep'];
        $numero = $_POST['numero'];
        $pais = $_POST['pais'];
        
        $sql = "UPDATE endereco SET cepEndereco = '$cep', numeroEndereco = '$numero', paisEndereco = '$pais' WHERE idEndereco = '$idEndereco'";
        $result = mysql_query($sql);
        $sql = "UPDATE socios SET nomeSocio = '$nome', cpfSocio = '$cpf', emailSocio = '$email', plano_idPlano = '$idPlano' WHERE idSocio = '$idSocio'";
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
      