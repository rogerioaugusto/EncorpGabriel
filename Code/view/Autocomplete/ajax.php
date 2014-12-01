<?php 

include_onoe 'tarefa-a-complete.php';

$cod = new tarefa-a-complete();

echo json_encode($cod->buscarCodigo($_get['term']));

>