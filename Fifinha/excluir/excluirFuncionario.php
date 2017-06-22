
        <?php
     
            include 'conexao.php';
            $algo = $_REQUEST['funcionario'];
            $sql = "SELECT * FROM funcionarios WHERE idFuncionario = '$algo'";
            $result = mysql_query($sql);
            $dadosFuncionario = mysql_fetch_row($result);
            
            $sql = "SELECT * FROM endereco WHERE idEndereco = '$dadosFuncionario[4]'";
            $result = mysql_query($sql);
            $dadosEndereco = mysql_fetch_row($result);
            
            $sql = "DELETE FROM funcionarios WHERE idFuncionario = '$dadosFuncionario[0]'";
            $result = mysql_query($sql);
            
            $sql = "DELETE FROM endereco WHERE idEndereco = '$dadosEndereco[0]'";
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
 