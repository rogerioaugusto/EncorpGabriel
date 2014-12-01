<?php
    class tarefa
    {
        public function conection() {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            $dbname = 'cityencorp';
            
            mysql_connect($dbhost, $dbuser, $dbpass);
            
            mysql_select_db($dbname);
        }
        
        public function buscarTarefa($Codigo){
            $dados = array();
            
            $sql = "SELECT * FROM tarefa WHERE codigo LIKE '%$codigo%'";
            
            resultado = mysql_query($sql);
            
            while ($row = mysql_fetch_array($resultado, MYSQL_ASSOC)){
                $dados[] = array("value" => $row['codigo'], "#obra"=> $row['obra'], "$tarefa"=> $row['tarefa'],"$carpinteiro"=> $row['carpinteiro'],"$ferreiro"=> $row['ferreiro'], "$pedreiro"=> $row['pedreiro'],"$encanador"=> $row['encanador'],"$gesseiro"=> $row['gesseiro'], "$servente"=> $row['serventeobra']);
                
            }
            return dados;
        }
    }
>