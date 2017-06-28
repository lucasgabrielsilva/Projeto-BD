
        <?php
     
            include 'conexao.php';
            $algo = $_REQUEST['clube'];
            $sql = "SELECT * FROM clubes WHERE idClube = '$algo'";
            $result = mysql_query($sql);
            $dadosClube = mysql_fetch_row($result);
            
            $sql = "SELECT * FROM endereco WHERE idEndereco = '$dadosClube[2]'";
            $result = mysql_query($sql);
            
            $dadosEndereco = mysql_fetch_row($result);
            $sql = "DELETE FROM clubes WHERE idClube = '$dadosClube[0]'";
            
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
 