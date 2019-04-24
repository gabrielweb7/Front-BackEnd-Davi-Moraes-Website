<!-- 
****************************************************************
			FRONT E BACK-END BY GABRIEL A. BARBOSA
			E-MAIL: gabrielbarbosaweb7@gmail.com
			SITE: http://gabrieldaluz7.co.nf/
			DATA INICIO: 01-05-2018
****************************************************************
-->
<!doctype html>
<html lang="pt-br">
<head>
	<?php 
		$pageTitle = "Davi Moraes | Tá em Casa";
		include "includes/header.php"; 
	?>
</head>
<body class="background02">

	<!-- pageContainer -->
	<div id="pageContainer">

		<!-- Section: ta em casa -->
		<section id="taemcasa" class="pageContainer">
			<!-- container -->
			<div class="container containerBody">
				<div class="row">

					<div class="col-md-6">
						<!-- Davi-Capa -->
						<div class="davi-capa">
                            <a href="https://davimoraes.lnk.to/TaEmCasaAlbumWE" target="_blank" title="Ouça e baixe aqui!"><img src="img/capa-disco.png" /></a>
						</div>
					</div>

					<div class="col-md-6">
						<!-- cdTitle -->
                        <div class="cdTitle">
                            TÁ EM CASA <br />
                            Davi Moraes <br />
                            Deck, 2017
                        </div>
						<!-- player-controls -->
                        <div class="player-controls">
                            <!-- bar1 -->
                            <div class="bar1">
                                <!-- share -->
                                <div class="share">
                                    <img src="img/btn/share.png" /> <span>Compartilhar</span>
                                </div>
                                <!-- volume -->
                                <div class="volume">
                                    <img src="img/btn/vol-20.png" />
                                    <img src="img/btn/vol-40.png" />
                                    <img src="img/btn/vol-60.png" />
                                    <img src="img/btn/vol-80.png" />
                                    <img src="img/btn/vol-100.png" />
                                </div>
                                <!-- clear -->
                                <div class="clear"></div>
                            </div>
                            <!-- bar2 -->
                            <div class="bar2">
                                <!-- Play -->
                                <div class="col"> <a href="javascript:void(0);" id="py_play"> <img src="img/btn/play.png" /> </a> </div>
                                <!-- Pause -->
                                <div class="col"> <a href="javascript:void(0);" id="py_pause"> <img src="img/btn/pause.png" /> </a> </div>
                                <!-- Prox -->
                                <div class="col"> <a href="javascript:void(0);" id="py_proximo"> <img src="img/btn/prox.png" /> </a> </div>
                                <!-- Ante -->
                                <div class="col"> <a href="javascript:void(0);" id="py_anterior"> <img src="img/btn/ante.png" /> </a> </div>
                                <!-- Stop -->
                                <div class="col"> <a href="javascript:void(0);" id="py_stop"> <img src="img/btn/stop.png" /> </a> </div>
                            </div>
                        </div>
					</div>

                    <div class="col-md-12">
                        <!-- playlist -->
                        <div class="playlist">
                            <!-- #py_playlist -->
                            <ul id="py_playlist">
                                <li> <a href="javascript:void(0);" mp3-dir="mp3/taemcasa-1.mp3"> 1.VEM DE MALÊ (Davi Moraes / Peu Meurray / Samir) <span class="duration">6:49</span> <span class="playing"></span> </a> </li>
                                <li> <a href="javascript:void(0);" mp3-dir="mp3/taemcasa-2.mp3"> 2. CHARME VENENO (Samir) <span class="duration">3:32</span> <span class="playing"></span> </a> </li>
                                <li> <a href="javascript:void(0);" mp3-dir="mp3/taemcasa-3.mp3"> 3. SÓ NÓS DOIS (Davi Moraes) / Adriana Calcanhoto)  <span class="duration">3:45</span> <span class="playing"></span> </a> </li>
                                <li> <a href="javascript:void(0);" mp3-dir="mp3/taemcasa-4.mp3"> 4. DO CARIBE (Moraes Moreira / Fernando Moura / Guilherme Maia / Rodrigo Campello) <span class="duration">3:31</span> <span class="playing"></span> </a> </li>
                                <li> <a href="javascript:void(0);" mp3-dir="mp3/taemcasa-5.mp3"> 5.MENINA DO GUETO (Davi Moraes / Samir) <span class="duration">4:51</span> <span class="playing"></span> </a> </li>
                                <li> <a href="javascript:void(0);" mp3-dir="mp3/taemcasa-6.mp3"> 6. L&R (Davi Moraes / Fernando Moura) <span class="duration">3:41</span> <span class="playing"></span> </a> </li>
                                <li> <a href="javascript:void(0);" mp3-dir="mp3/taemcasa-7.mp3"> 7. TARDE EM BOTAFOGO (Davi Moraes / Fernando Moura) <span class="duration">3:33</span> <span class="playing"></span> </a> </li>
                                <li> <a href="javascript:void(0);" mp3-dir="mp3/taemcasa-8.mp3"> 8. CUTUCA (Davi Moraes / Fred Camacho / Marcelinho Moreira) <span class="duration">3:32</span> <span class="playing"></span> </a> </li>
                                <li> <a href="javascript:void(0);" mp3-dir="mp3/taemcasa-9.mp3"> 9. RIO VERMELHO (Davi Moraes / Quito Ribeiro) <span class="duration">5:55</span> <span class="playing"></span> </a> </li>
                                <li> <a href="javascript:void(0);" mp3-dir="mp3/taemcasa-10.mp3"> 10. GUITARRAS DA LIBERDADE (Davi Moraes) <span class="duration">2:57</span> <span class="playing"></span> </a> </li>
                                <li> <a href="javascript:void(0);" mp3-dir="mp3/taemcasa-11.mp3"> 11. TÁ EM CASA (Davi Moraes / Cainã Cavalcante) <span class="duration">3:49</span> <span class="playing"></span> </a> </li>
                                <li> <a href="javascript:void(0);" mp3-dir="mp3/taemcasa-12.mp3"> 12. RECIFE, CIDADE LENDÁRIA (Capiba) <span class="duration">4:55</span> <span class="playing"></span> </a> </li>
                                <
                            </ul>
                        </div>
                    </div>

				</div>

				<!-- Menu Button -->
				<div class="menu-button" id="menu-button-open">
					<i class="glyphicon glyphicon-menu-hamburger"></i> 
				</div>



			</div>
		</section>
		

		<style type="text/css"> .direitosReservados span { color:white !important;  text-shadow: 1px 1px black !important; }</style>

		<!-- Section: Menu -->
		<?php include "includes/menu.php"; ?>
		
	</div>

	<?php include "includes/footer.php"; ?>

    <!-- Javascript: [AUDIOPLAY7] Funções criadas por Gabriel A. Barbosa  -->
    <script src="js/audioplay7.js"></script>
    <script src="js/jssocial/jssocials.min.js"></script>

    <script>
        $(function() {
            $(".share").jsSocials({
                shares: ["email", "twitter", "facebook", "googleplus"]
            });
        });
    </script>
	  
</body>
</html>