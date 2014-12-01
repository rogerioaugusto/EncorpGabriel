<?php

$con = mysql_connect("localhost","root","");
    mysql_select_db("cityencorp",$con);

$codigo = $_POST['codigo'];
    $sqltarefa = mysql_query("SELECT * FROM tarefa WHERE codigo = '$codigo'");
    $trf = mysql_fetch_object($sqltarefa);
    $dadostrf = $trf->obra."/".$trf->tarefa."/".$trf->carpinteiro."/".$trf->ferreiro."/".$trf->pedreiro."/".$trf->encandor."/".$trf->eletricista."/".$trf->gesseiro."/".$trf->serventeobra;

echo dadostrf;


?>