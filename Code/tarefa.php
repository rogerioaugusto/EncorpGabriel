<?php

$con = mysql_connect("localhost","root","");
    mysql_select_db("cityencorp",$con);

$id = $_POST['id'];
    $sqltarefa = mysql_query("SELECT * FROM tarefas WHERE id = '$id'");
    $trf = mysql_fetch_object($sqltarefa);
    $dados = $trf->obra."/".$trf->tarefa."/".$trf->carpinteiro."/".$trf->ferreiro."/".$trf->pedreiro."/".$trf->encanador."/".$trf->eletricista."/".$trf->gesseiro."/".$trf->serventeobra;

echo $dados;


?>