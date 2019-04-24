/**
*	[ AudioPlay 7 ]
* 	Criado por Gabriel Azuaga Barbosa
*	Version: 1.5
*	Data Criação: 08-08-2018
*	Dependencias: ./jstools7.js
*/

/**
*	Variavel guarda musica atual (dirMp3)	
*/

var elementPlaylist = "py_playlist";
var elementPlay = "py_play";
var elementPause = "py_pause";
var elementStop = "py_stop";
var elementAnterior = "py_anterior";
var elementProx = "py_proximo";
var arrayListAudio = false;
var targetMusic = 0;
var statusApp = false;
var pausedApp = false;
var _thisPlaylist = false;
var jsAudio = false;

/**
*	Função criada para dar play na musica
*	é necessario passar o caminho da musica pela variavel dirMp3
*/
function playMusic(dirMp3) {
	/* Verifica se caminho para o arquivo existe */
	if(isUrl(dirMp3)) { 
		/* Se caso jsAudio não exista.. */
		if(!jsAudio) { 
			jsAudio = new Audio(dirMp3);
			/* Listeners [Quando Audio Acabar :D] */
			jsAudio.addEventListener('ended', function(e) {
				_appProxAutomatic();
			}, false);
            jsAudio.addEventListener('timeupdate',function (){

                var duration = jsAudio.currentTime; //song is object of audio.  song= new Audio();

                var sec= new Number();
                var min= new Number();
                sec = Math.floor( duration );
                min = Math.floor( sec / 60 );
                min = min >= 10 ? min : '' + min;
                sec = Math.floor( sec % 60 );
                sec = sec >= 10 ? sec : '0' + sec;

               // console.log(min + ":"+ sec);   //Id where i have to print the total duration of song.

				if(duration != undefined) {
					_setCurrentTimeMusic(min + ":" + sec);
				}

            });
		}
		/* Status: 1 */
		statusApp = true;
        pausedApp = false;
		/* Play Music */
		jsAudio.play();
		console.log("%cPlay Music! ["+targetMusic+"] ("+dirMp3+")",'color:green;');
	} else { 
		console.log("%cErro ao executar musica: Caminho ["+dirMp3+"] não existente !",'color:red;');
	}
}

/**
*	Função criada para dar Pause na música !
*/
function pauseMusic() { 
	statusApp = false;
    pausedApp = true;
	jsAudio.pause();
	console.log("%cPause music!","color:red;");
}

/**
*	Função criada para verificar se elemento da playlist existe
*	Retorno: [True ou False]
*/
function checkExistPlayList() {
	var e = $("#"+elementPlaylist);
	/* Se a lista não existir.. retornar false! */
	if(!e.length) {
		return false;
	}
	_thisPlaylist = e; 
	return true;
}

/**
*	Função criada para alimentar variavel arrayListAudio com a primeira musica encontrada na lista #py_playlist
*/
function initArryListAudio() {
	/*  */
	if(!checkExistPlayList()) {
		console.log("Não foi possivel encontrar a lista #"+elementPlaylist);
		return false;
	}
	/* Alimentando arrayListAudio com lista de audio */
	arrayListAudio = _thisPlaylist.find("a");
	console.log("%cRegistros encontrados: "+arrayListAudio.length,'color:blue;');
	/* Se caso tiver somente 1 registro.. esconder botão anterior e proximo */
	if(arrayListAudio.length == 1) { 
		$("#"+elementAnterior).hide();
		$("#"+elementProx).hide();
	}
}


/* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */
/* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */
/* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */

/**
 *	Função criada para dar stop no app music
 */
function _appStop(resetTarget = false) {
	/* ResetTarget for igual true */
	if(resetTarget) {
        /* Reseta Target Music */
        targetMusic = 0;
        /* Reseta time des todas as musicas */
        _resetTimeMusics();
        console.log('targetMusic = 0');
	}
    /* Se jsAudio existir... */
    if(jsAudio) {
        /* Stop */
        jsAudio.load();
    }
    /* Status false */
    statusApp = false;
    pausedApp = false;
    /* jsAudio false */
    jsAudio = false;
    /* Atualiza elemento html */
    //$("#"+elementPlay).find('button').html("Play");
    _thisPlaylist.find('a').attr("style", "");
    console.log("%cStop music!", "color:red;");
}

/**
 *	Função criada para dar pause no app music
 */
function _appPause() {
    /* Se jsAudio existir... */
    if(jsAudio) {
        /* Stop */
        pauseMusic();
    }
}

/**
*	Função criada para dar play no app music 
*/
function _appPlay() {

	/* se caso musica estiver tocando.. dar pause. */
	if(statusApp) { 
		/* Pause music */
		//pauseMusic();
		/* Atualiza elemento html */
		//$("#"+elementPlay).find('button').html("Continuar");
		return false;
	}
	
	/* Caso não encontrar a lista dom no html.. mostrar erro */
	if(!checkExistPlayList()) {
		console.log("%cNão foi possivel encontrar a lista #"+elementPlaylist,'color:red;');
		return false;
	}

	/* Verifica se existe lista de audio */
	if(arrayListAudio.length){
	
		/* Recebe link do arquivo mp3 */
		var mp3Dir = _thisPlaylist.find('a').eq(targetMusic).attr('mp3-dir');
		
		/* Se caso ~link for diferente de undefined */
		if(mp3Dir != undefined) {

			/* Atualiza elementos html da página */
			_setTargetMusic(targetMusic);
			
			/* Update html */
			$("#"+elementPlay).find('button').html("Pausar");

			/* Play Music */
			playMusic(mp3Dir);

		} else { 
			console.log("TargetMusic: prop: <a 'mp3-dir'=  não existe! ");
		}
	
	} 
}

function _resetTimeMusics() {
	/* Só executa se não estiver pausado */
	if(!pausedApp) {
		/* Reseta todos playings time */
		_thisPlaylist.find('a').find('.playing').html('00:00').hide();
		_thisPlaylist.find('a').find('.duration').show();
    }
}

function _setCurrentTimeMusic(valor) {
    _thisPlaylist.find('a').eq(targetMusic).find('.duration').hide();
    _thisPlaylist.find('a').eq(targetMusic).find('.playing').html(valor).show();
}
	
function _setTargetMusic(numMusic) {
	targetMusic = numMusic;

	_resetTimeMusics();



	_thisPlaylist.find('a').attr("style", "");
	_thisPlaylist.find('a').eq(targetMusic).attr('style', 'font-weight:bold;background: #8e8e8e;');
	console.log("%cMusica Selecionada: "+targetMusic,'color:blue;');
}

/**
*	Função criada para ir para proxima musica 
*/
function _appProx() {
	/* Se caso targetMusic seja menor que quantidade de musicas na lista */
	if(targetMusic < (arrayListAudio.length-1)) { 
		/* targetMusic add++ */
		targetMusic++;
		console.log("%cMusica Selecionada: "+targetMusic,'color:blue;');
	}
}


/**
*	Função criada para ir para proxima musica AUTOMATICAMENTE após o fim da musica
*/
function _appProxAutomatic() {
    /* Stop :) */
    _appStop();

    /* targetMusic add++ */
    targetMusic++;

    /* Se caso targetMusic seja menor que quantidade de musicas na lista */
	if(targetMusic <= (arrayListAudio.length-1)) {
        _appPlay();
		console.log("%cMusica Selecionada: "+targetMusic,'color:blue;');
	} else {
        /* Stop :) */
        _appStop(true);
	}

}


/**
*	Função criada para ir para musica anterior 
*/
function _appAnterior() {
	/* Se caso targetMusic seja menor que quantidade de musicas na lista */
	if(targetMusic > 0) { 

		/* targetMusic add++ */
		targetMusic--
		console.log("%cMusica Selecionada: "+targetMusic,'color:blue;');

	}
}

/* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */
/* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */
/* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */


/**
*	Init Plugin
*	Document Loaded
*/
$(document).ready(function() { 

	console.log("%c[AUDIOPLAY7.JS] .. Iniciando ..",'color:orange; font-weight:bold;');
	initArryListAudio();

	/**
	*	Listener btn py_play onClick
	*/	
	$("#"+elementPlay).on('click', function() {
		/* Play :) */
		_appPlay();
	});
    /**
     *	Listener btn py_stop onClick
     */
    $("#"+elementStop).on('click', function() {
        /* Play :) */
        _appStop(true);
    });
    /**
     *	Listener btn py_pause onClick
     */
    $("#"+elementPause).on('click', function() {
        /* Play :) */
        _appPause();
    });
	/**
	*	Listener btn py_proximo onClick
	*/	
	$("#"+elementProx).on('click', function() {
		/* Se caso app estiver modo PLAY = true */
		if(statusApp) {
			/* Stop :) */
			_appStop();
			/* Proximo :) */
			_appProx();
        }
		/* Play :) */
		_appPlay();
	});
	/**
	*	Listener btn py_anterior onClick
	*/	
	$("#"+elementAnterior).on('click', function() {
        /* Se caso app estiver modo PLAY = true */
        if(statusApp) {
            /* Stop :) */
            _appStop();
            /* Proximo :) */
            _appAnterior();
        }
		/* Play :) */
		_appPlay();
	});

	/**
	*	Listener Lista de Mp3's onClick
	*/	
	$("#"+elementPlaylist+" a").on('click', function() {

        /* Stop :) */
        _appStop(true);

		var mp3Dir = $(this).attr("mp3-dir");
		var count = 0;
		$('#'+elementPlaylist+' a').each(function(){
		    if(mp3Dir == $(this).attr("mp3-dir")) { 
		    	_setTargetMusic(count);
		    }
		    count++;
		});

		/* Play :) */
		_appPlay();
	});

});


