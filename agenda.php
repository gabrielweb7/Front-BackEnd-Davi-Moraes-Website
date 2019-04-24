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
    $pageTitle = "Davi Moraes | Agenda";
    include "includes/header.php";
    ?>
</head>
<body class="background011">

<!-- pageContainer -->
<div id="pageContainer">

    <!-- Section: parceiros -->
    <section id="agenda" class="pageContainer">
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
            <!-- Davi-Home -->
            <div class="davi-home">
                <!-- img -->
                <img src="img/davi-agenda.png" />
            </div>
            <!-- title -->
            <div class="title">AGENDA</div>

            <!-- container conteudo -->
            <div class="container-conteudo">

                <!-- seta rolagem absolute -->
                <div class="setaRolagem">
                    <img src="img/btn/setarolagem.png" alt="">
                </div>

                <!-- conteudo -->
                <div class="conteudo">

                    <!-- line -->
                    <div class="line">
                        <!-- data -->
                        <div class="data">
                            23.06.2018
                        </div>
                        <!-- info -->
                        <div class="info">
                            <p>SP - 20h30</p>
                            <p>LANÇAMENTO SP</p>
                            <p> <b>SESC POMPÉIA</b></p>
                        </div>
                    </div>

                    <!-- line -->
                    <div class="line">
                        <!-- data -->
                        <div class="data">
                            26.04.2018
                        </div>
                        <!-- info -->
                        <div class="info">
                            <p>RJ - 22h30</p>

                            <p> <b>SESC TIJUCA</b></p>
                        </div>
                    </div>


                    <!-- line -->
                    <div class="line">
                        <!-- data -->
                        <div class="data">
                            23.02.2018
                        </div>
                        <!-- info -->
                        <div class="info">
                            <p>rj - 22h30</p>
                            <p> <b>blue note rio</b></p>
                        </div>
                    </div>


                    <!-- line -->
                    <div class="line">
                        <!-- data -->
                        <div class="data">
                            23.01.2018
                        </div>
                        <!-- info -->
                        <div class="info">
                            <p>RJ - 20h</p>
                            <p>LANÇAMENTO RJ</p>
                            <p> <b>MÚSICA NA LAURA</b></p>
                            <p>cASA DE CULTURA LAURA ALVIM</p>
                        </div>
                    </div>

                </div>

            </div>



        </div>
    </section>


    <style type="text/css"> .direitosReservados span { color:white !important;  text-shadow: 1px 1px black !important; }</style>

    <!-- Section: Menu -->
    <?php include "includes/menu.php"; ?>

</div>

<?php include "includes/footer.php"; ?>



</body>
</html>