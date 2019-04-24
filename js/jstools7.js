/**
*	[ JsTools 7 ]
* 	Criado por Gabriel Azuaga Barbosa
*	Version: 1.1
*	Data Criação: 08-08-2018
**/

/**
*	Função criada para verificar se diretorio ou arquivo existe
*	Retorno: [True ou False]
*/
function isUrl(url=false) {
	if(url.length) { 
		var http = new XMLHttpRequest();
		http.open('HEAD', url, false);
		http.send();
		return http.status!=404;
	}
}

/**
*	Função criada para bloquear o acesso mobile no website
*	Retorno: [True ou False]
*/
function noMobile() {
	/* Evento OnResize Ativado */
	window.onresize = function() { 
		noMobile();
	}
	/* Recebe altura do window */
	var wWidth = $(document).width();
	/* Nao deixa ver resolucao menor... esconder site */
	if(wWidth < 1200) { 
		$("html, body").html("Este website ainda não está disponivel para resoluções menores que 1200px! Acesse de um computador com uma resolução maior!");	
		console.log('NOMOBILE ACTIVED! [Width:'+wWidth+']');
	}
}
