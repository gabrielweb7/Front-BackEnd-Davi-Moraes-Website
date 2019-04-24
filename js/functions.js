console.log("*******************************************************");
console.log("      FRONT E BACK-END BY POR GABRIEL A. BARBOSA");
console.log("      E-MAIL: gabrielbarbosaweb7@gmail.com");
console.log("      SITE: http://gabrieldaluz7.co.nf/");
console.log("*******************************************************");

$(function() { 

	/***********************************************************
	** Iniciando Pré Loading PAGE GIF 7 By Gabriel A. Barbosa **
	************************************************************/
	$("body").preLoadingPage7({ 
		gifStyle:1, 
		onLoaded:function() { 
			$("section").css('visibility','initial'); 
			$("footer").css('visibility','initial'); 
		} 
	});
	
	/***************************************************** 
	***          OnClick Button Open And Close        ****
	******************************************************/
	$("#menu-button-open").on("click", function() { 
		$("section.pageContainer").fadeOut(900,function() {
			$("section#menu").fadeIn(1000);
			$(".direitosReservados span").css("color","white");
		});
	});
	
	$("#menu-button-close").on("click", function() { 
		$("section#menu").fadeOut(900,function() {
			$("section.pageContainer").fadeIn(1000);
			$(".direitosReservados span").css("color","#646464");
		});
	});

	/**
 	*	Owl Carrousel
 	*/
	if($(".owl-carousel").length) {
        $(".owl-carousel").owlCarousel({
            items: 1,
			dots: true
        });
    }
    /**
    *    -----------[ EVENTO NO MOBILE ]--------------
    *    Created by Gabriel A. Barbosa
    */
    function noMobile() {
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
    /*noMobile(true);*/



    console.log("**************************************************************************************************************************");
    console.log("%cUma pessoa feliz não precisa de religião, não precisa de nenhum templo. Para ela, todo o universo é um templo. %c- %cOsho ", "color:green;", "color:black;", "color:red;");
    console.log("Created By %cGabriel A. Barbosa %c<http://gabrieldaluz7.co.nf>", "color:blue;","color:black;");
    console.log("**************************************************************************************************************************");





});


// the following to the end is whats needed for the thumbnails.
jQuery( document ).ready(function() {


    // 1) ASSIGN EACH 'DOT' A NUMBER
    dotcount = 1;

    jQuery('.owl-dot').each(function() {
        jQuery( this ).addClass( 'dotnumber' + dotcount);
        jQuery( this ).attr('data-info', dotcount);
        dotcount=dotcount+1;
    });

    // 2) ASSIGN EACH 'SLIDE' A NUMBER
    slidecount = 1;

    jQuery('.owl-item').not('.cloned').each(function() {
        jQuery( this ).addClass( 'slidenumber' + slidecount);
        slidecount=slidecount+1;
    });

    // SYNC THE SLIDE NUMBER IMG TO ITS DOT COUNTERPART (E.G SLIDE 1 IMG TO DOT 1 BACKGROUND-IMAGE)
    jQuery('.owl-dot').each(function() {

        grab = jQuery(this).data('info');

        slidegrab = jQuery('.slidenumber'+ grab +' img').attr('src');
        console.log(slidegrab);

        jQuery(this).css("background-image", "url("+slidegrab+")");

    });

    jQuery('.owl-dot').css("width", "155px");
    jQuery('.owl-dot').css("height", "125px");
    jQuery('.owl-dot').css("background-size", "cover");
    jQuery('.owl-dot').css("background-position", "center");
    jQuery('.owl-dot').css("margin", "1px");
    jQuery('.owl-dot').find('span').css("display", "none");



});