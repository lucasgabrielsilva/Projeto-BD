
        <?php
     
            include 'conexao.php';
            $algo = $_REQUEST['plano'];
            $sql = "SELECT * FROM planos WHERE idPlano = '$algo'";
            $result = mysql_query($sql);
            $dadosPlano = mysql_fetch_row($result);
            $sql = "DELETE FROM planos WHERE idPlano = '$dadosPlano[0]'";
            mysql_query($sql);
         
            if(!$result){
            echo 'Desculpe, Ocorreu um erro em nossos servidores, tente novamente mais tarde!';
            ?>
<a href="\Fifinha\home\index.html"> <input type="submit" value="Voltar a pagina inicial" /> </a>
            <?php
        }
        else{
            echo 'Exclusão realizada com sucesso!!';
            ?>
            <a href="\Fifinha\home\index.html"> <input type="submit" value="Voltar a pagina inicial" /> </a>
        <?php
            }
        ?>
 