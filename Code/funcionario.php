<?php
 	$con = mysql_connect("localhost","root","");
    mysql_select_db("city",$con);
	
	
	$id = $_POST['idfunc'];
	$sqlfunc = mysql_query("SELECT * FROM quadros WHERE id = '$id'");
	$func = mysql_fetch_object($sqlfunc);
	$dados = $func->matricula."/".$func->funcao;
	echo $dados;
?>