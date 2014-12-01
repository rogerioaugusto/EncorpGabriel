
var connection = new ActivexObject("ADODB.Connection");

var connetcionstring ="Data Source=<>";

//Function escolhenome(){
//    var mysql = mysql_query("SELECT id, nome FROM quadros");
//    while(func = mysql_fetch_object(mysql)){
//        documente.write("<option value='$func->id'> $func->nome </option>")
//    }
//}

//Function preenchecampos(){
//    $.post("",{idfunc:id},function(retorno){
//        dados = retorno.split("/");
//        $('#mat').val(dados[0]);
//        $('#funcao').val(dados[1]);
//    });
//}

    $(function(){
        var registros = ["Rogerio","Yuri","Amanda"];
        $("#nome").autocomplete({
            source: registros
        });
    });
/*$(function(){
    var input = document.getElementsByTagName("nome");
    var registros = ["Rogerio","Yuri","Amanda"];
    for(var i=0;i<input.length;i++){
        if(input[i].id  == "nome"+cont){
             $("#nome"+cont).autocomplete({
                source: registros
            });
        }
    }

  });*/

function recursivo(field){
    if (field == "nome".concat(cont)) {
        cont++;
    $("#funcionario").append("<div id=\"inputfuncionarios\">"+
                "<form action=\'\' method=\'post\' id=\"funcionario\">"+
                    "<input type=\"text\" name=\"nome\" id=\"nome0\" placeholder=\"Nome do funcionario\" onblur=\"recursivo(this.id)\">"+
                    "\<input type=\'text\' name=\'Matricula\' id=\'mat\' placeholder=\"Matricula\">"+
                    "<input type=\'text\' name=\'funcao\' id=\'funcao\' placeholder=\"funcao\">"+
                "</form>"+
            "</div>");
    }
}
var cont = 0;