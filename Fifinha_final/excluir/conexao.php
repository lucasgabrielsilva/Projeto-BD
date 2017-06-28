<?php

    $link = mysql_connect('localhost', 'root', '');
    $db = mysql_select_db('fifinha',$link);
    if (!$link) {
        die('Não foi possível conectar: '. mysql_error());
    }
   
   
   
?>
  