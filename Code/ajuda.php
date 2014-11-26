<html>

<head>
    <!--<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />-->
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <link rel="stylesheet" href="view/CSS/Layout.css">
</head>

<body>
    <div id="site">
        <div id="cabecalho">
            <h4 id="controle">CONTROLE DE TAREFAS DEFINITIVOS</h4>
            </div>
            <ul id="inputcabe">
                        <li><input type='text' name='tarefa' id='tarefa' placeholder="Nome da tarefa"></li>
                        <li><input type='text' name='user' id='user' placeholder="Nome do usuario"></li>
                        <li><input type='text' name='obra' id='obra' placeholder="Nome da obra"></li>
                    </ul>
                    <ul id="resto">
                        <li>Torre: <input type='text' name='torre' id='torre' placeholder="Numero de torres"></li>
                        <li>Pav: <input type='text' name='pav' id='pav' placeholder="Numero de pavimentos"></li>
                        <li>Mes de Lancamento: <input type='text' name='lanc' id='lanc'></li>
                    </ul>
            <div id="tipofunc">
                <ul id="tiposfuncionarios">
                    <li><p>Tempo do processo</p></li>
                    <li>Inicio:<br><input type="date" id="datainicio"></li>
                    <li>Fim:<br><input type="date" id="datafim"></li>
                    <li>Duracao:<br><input type="type" id="duracao" placeholder="dias"></li>
                </ul>
                <ul id="equipe">
                    <li><p>EQUIPE</p></li>
                    <li></li>
                </ul>
                
            </div>
            <div id="encima">
                    <ul id="menutextcabe">
                        <li>Tarefa</li>
                        <li>Usuario</li>
                        <li>Obra</li>
                    </ul> 
            </div>
            <div id="textfuncionarios">
                <ul id="menutextfunc">
                    <li>Nome</li>
                    <li>Matricula</li>
                    <li>funcao</li>
                </ul>
            </div>
            <div id="inputfuncionarios">
                <form action='' method='post' id="funcionario">
                    <input type="text" name="nome" id="nome0" placeholder="Nome do funcionario" onblur="recursivo(this.id)">
                    <input type='text' name='Matricula' id='mat' placeholder="Matricula">
                    <input type='text' name='funcao' id='funcao' placeholder="funcao">
                </form>
            </div>
        </div>    
        <script src="view/js/autocompletar.js" type="text/javascript"></script>
    </body>
</html>