function abre(arquivo,metodo,div){
	div_base = div;
	xmlhttp.open(metodo,arquivo);
	xmlhttp.onreadystatechange=conteudo
	xmlhttp.send(null)
}
function conteudo() {
	nova_div = div_base;
	document.getElementById(nova_div).innerHTML="<div style='top:50%;left:50%;position:absolute;'>carregando...</div>"
	if (xmlhttp.readyState==4){
	document.getElementById(nova_div).innerHTML=xmlhttp.responseText
	}
}
