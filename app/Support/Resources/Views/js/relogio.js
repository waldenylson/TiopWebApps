// JavaScript Document
function relogio()
{
    ///////////////////////////////////////////////////////////////////////////////////////////////////
    var momentoAtual = new Date();
    ///////////////////////////////////////////////////////////////////////////////////////////////////
    var ano = momentoAtual.getFullYear();
    var mes = momentoAtual.getMonth();
    var dia = momentoAtual.getDate();
    var hora = momentoAtual.getHours();
    var minuto = momentoAtual.getMinutes();
    var segundo = momentoAtual.getSeconds();
    ///////////////////////////////////////////////////////////////////////////////////////////////////
    if(segundo <=9 ){ segundo = "0"+segundo; };
    if(minuto <=9 ){ minuto = "0"+minuto; };
    if(hora <=9 ){ hora = "0"+hora; };
    ///////////////////////////////////////////////////////////////////////////////////////////////////
    switch(mes){
        case 0: mestxt = "Janeiro"; break;
        case 1: mestxt = "Fevereiro"; break;
        case 2: mestxt = "Março"; break;
        case 3: mestxt = "Abril"; break;
        case 4: mestxt = "Maio"; break;
        case 5: mestxt = "Junho"; break;
        case 6: mestxt = "Julho"; break;
        case 7: mestxt = "Agosto"; break;
        case 8: mestxt = "Setembro"; break;
        case 9: mestxt = "Outubro"; break;
        case 10: mestxt = "Novembro"; break;
        case 11: mestxt = "Dezembro"; break;
    }
    ///////////////////////////////////////////////////////////////////////////////////////////////////
    document.getElementById('hora').innerHTML = hora +":"+ minuto +":"+ segundo;
    document.getElementById('data').innerHTML = dia + " de " + mestxt + " de " + ano;
    ///////////////////////////////////////////////////////////////////////////////////////////////////
    momentoAtual.setSeconds(momentoAtual.getSeconds()+1);
    ///////////////////////////////////////////////////////////////////////////////////////////////////
    setTimeout("relogio()",1000);
}