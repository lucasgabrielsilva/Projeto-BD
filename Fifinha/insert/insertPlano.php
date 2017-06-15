<?php
     
    include 'conexao.php';

    $nome = $_REQUEST['nome'];
    $valor = $_REQUEST['valor'];
    $sql = mysql_query("SELECT max(idPlano) FROM planos");
    $idPlano = mysql_fetch_row($sql);
    $idPlano[0] = $idPlano[0] + 1;
    
    
    
    
    $result = mysql_query("INSERT INTO planos(idPlano, nomePlano, valorPlano) VALUES('$idPlano[0]','$nome','$valor')");
    
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

