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
    $pageTitle = "Davi Moraes | Galeria de Fotos";
    include "includes/header.php";
    ?>
</head>
<body class="background01">

<!-- pageContainer -->
<div id="pageContainer">

    <!-- Section: parceiros -->
    <section id="galeria" class="pageContainer">
        <!-- container -->
        <div class="container containerBody">
            <!-- Davi-Logo -->
            <div class="davi-logo">
                <a href="./"><img src="img/davi-logo-menu.png" /></a>
            </div>
            <!-- Menu Button -->
            <div class="menu-button" id="menu-button-open">
                <i class="glyphicon glyphicon-menu-hamburger"></i>
            </div>

            <?php
                $_GET["id"] = (isset($_GET["id"]))? $_GET["id"]: "taemcasa";
                if(($_GET["id"] == "taemcasa")) {
            ?>
                    <!-- galeriaMenu -->
                    <div class="galeriaMenu">
                        <!-- ul -->
                        <ul>
                            <li> <a href="galeria.php?id=taemcasa" class="active">TÁ EM CASA</a> </li>
                            <li> <a href="galeria.php?id=lancamento">LANÇAMENTO</a> </li>
                            <li> <a href="galeria.php?id=shows">SHOWS</a> </li>
                            <li> <a href="galeria.php?id=encontros">ENCONTROS</a> </li>
                        </ul>
                    </div>
            <!-- conteudo -->
            <div class="conteudo">
                <!-- owlCarrousel -->
                <div class="owl-carousel owl-theme">
                    <div> <img src="img/galeria/taemcasa/1.jpg" /> </div>
                    <div> <img src="img/galeria/taemcasa/2.jpg" /> </div>
                    <div> <img src="img/galeria/taemcasa/3.jpg" /> </div>
                    <div> <img src="img/galeria/taemcasa/4.jpg" /> </div>
                    <div> <img src="img/galeria/taemcasa/1.jpg" /> </div>
                    <div> <img src="img/galeria/taemcasa/2.jpg" /> </div>
                    <div> <img src="img/galeria/taemcasa/3.jpg" /> </div>
                    <div> <img src="img/galeria/taemcasa/4.jpg" /> </div>
                    <div> <img src="img/galeria/taemcasa/1.jpg" /> </div>
                    <div> <img src="img/galeria/taemcasa/2.jpg" /> </div>
                    <div> <img src="img/galeria/taemcasa/3.jpg" /> </div>
                    <div> <img src="img/galeria/taemcasa/4.jpg" /> </div>
                    <div> <img src="img/galeria/taemcasa/1.jpg" /> </div>
                    <div> <img src="img/galeria/taemcasa/2.jpg" /> </div>
                    <div> <img src="img/galeria/taemcasa/3.jpg" /> </div>
                    <div> <img src="img/galeria/taemcasa/4.jpg" /> </div>
                </div>
            </div>
            <?php } ?>

            <?php
            if(($_GET["id"] == "lancamento")) {
                ?>
                <!-- galeriaMenu -->
                <div class="galeriaMenu">
                    <!-- ul -->
                    <ul>
                        <li> <a href="galeria.php?id=taemcasa">TÁ EM CASA</a> </li>
                        <li> <a href="galeria.php?id=lancamento" class="active">LANÇAMENTO</a> </li>
                        <li> <a href="galeria.php?id=shows">SHOWS</a> </li>
                        <li> <a href="galeria.php?id=encontros">ENCONTROS</a> </li>
                    </ul>
                </div>
                <!-- conteudo -->
                <div class="conteudo">
                    <!-- owlCarrousel -->
                    <div class="owl-carousel owl-theme">
                        <div> <img src="img/galeria/lancamento/1.jpg" /> </div>
                        <div> <img src="img/galeria/lancamento/2.jpg" /> </div>
                        <div> <img src="img/galeria/lancamento/3.jpg" /> </div>
                        <div> <img src="img/galeria/lancamento/4.jpg" /> </div>
                        <div> <img src="img/galeria/lancamento/5.jpg" /> </div>
                        <div> <img src="img/galeria/lancamento/6.jpg" /> </div>
                        <div> <img src="img/galeria/lancamento/7.jpg" /> </div>
                        <div> <img src="img/galeria/lancamento/8.jpg" /> </div>
                        <div> <img src="img/galeria/lancamento/9.jpg" /> </div>
                        <div> <img src="img/galeria/lancamento/10.jpg" /> </div>
                    </div>
                </div>
            <?php } ?>


            <?php
            if(($_GET["id"] == "shows")) {
                ?>
                <!-- galeriaMenu -->
                <div class="galeriaMenu">
                    <!-- ul -->
                    <ul>
                        <li> <a href="galeria.php?id=taemcasa">TÁ EM CASA</a> </li>
                        <li> <a href="galeria.php?id=lancamento" >LANÇAMENTO</a> </li>
                        <li> <a href="galeria.php?id=shows" class="active">SHOWS</a> </li>
                        <li> <a href="galeria.php?id=encontros">ENCONTROS</a> </li>
                    </ul>
                </div>
                <!-- conteudo -->
                <div class="conteudo">
                    <!-- owlCarrousel -->
                    <div class="owl-carousel owl-theme">
                        <div> <img src="img/galeria/shows/1.jpg" /> </div>
                        <div> <img src="img/galeria/shows/2.jpg" /> </div>
                        <div> <img src="img/galeria/shows/3.jpg" /> </div>
                        <div> <img src="img/galeria/shows/4.jpg" /> </div>
                        <div> <img src="img/galeria/shows/5.jpg" /> </div>
                        <div> <img src="img/galeria/shows/6.jpg" /> </div>
                        <div> <img src="img/galeria/shows/7.jpg" /> </div>
                        <div> <img src="img/galeria/shows/8.jpg" /> </div>
                        <div> <img src="img/galeria/shows/9.jpg" /> </div>
                        <div> <img src="img/galeria/shows/10.jpg" /> </div>
                        <div> <img src="img/galeria/shows/11.jpg" /> </div>
                        <div> <img src="img/galeria/shows/12.jpg" /> </div>
                        <div> <img src="img/galeria/shows/13.jpg" /> </div>
                        <div> <img src="img/galeria/shows/14.jpg" /> </div>
                        <div> <img src="img/galeria/shows/15.jpg" /> </div>

                    </div>
                </div>
            <?php } ?>



            <?php
            if(($_GET["id"] == "encontros")) {
                ?>
                <!-- galeriaMenu -->
                <div class="galeriaMenu">
                    <!-- ul -->
                    <ul>
                        <li> <a href="galeria.php?id=taemcasa">TÁ EM CASA</a> </li>
                        <li> <a href="galeria.php?id=lancamento" >LANÇAMENTO</a> </li>
                        <li> <a href="galeria.php?id=shows" >SHOWS</a> </li>
                        <li> <a href="galeria.php?id=encontros" class="active">ENCONTROS</a> </li>
                    </ul>
                </div>
                <!-- conteudo -->
                <div class="conteudo">
                    <!-- owlCarrousel -->
                    <div class="owl-carousel owl-theme">
                        <div> <img src="img/galeria/encontros/1.jpeg" /> </div>
                        <div> <img src="img/galeria/encontros/2.jpg" /> </div>
                        <div> <img src="img/galeria/encontros/3.jpeg" /> </div>
                        <div> <img src="img/galeria/encontros/4.jpg" /> </div>
                        <div> <img src="img/galeria/encontros/5.jpg" /> </div>
                        <div> <img src="img/galeria/encontros/6.jpg" /> </div>

                    </div>
                </div>
            <?php } ?>

        </div>
    </section>


    <style type="text/css"> .direitosReservados span { color:white !important;  text-shadow: 1px 1px black !important; }</style>

    <!-- Section: Menu -->
    <?php include "includes/menu.php"; ?>

</div>

<?php include "includes/footer.php"; ?>



</body>
</html>