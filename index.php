<!DOCTYPE html>
<html lang="fr">
<head>
    <?php  include 'assets/meta.php' ?>
    
    <!-- TITLE -->
    <title>Enyxia</title>
</head>
<body>
    <!-- HEAD -->
    <div class="container-fluid" id="enyxia_overhead">
        <div class="container text-center" id="enyxia_head">
            <!-- LOGO -->
            <img src="https://data.enyxia.fr/images/enyxiawhite.svg" alt="Enyxia LOGO" id="enyxia_logo">

            <!-- PHRASE -->
            <p id="enyxia_phrase">
                Un univers, des centaines d'histoires.
            </p>

            <!-- BUTTONS -->
            <div class="container enyxia-headbutton-div">
                <button class="enyxia-headbutton" id="enyxia_button_seasons">
                    SAISONS ET ARCHIVES
                </button>
            </div>

            <div class="container enyxia-headbutton-div">
                <button class="enyxia-headbutton" id="enyxia_button_characters">
                    <a href="https://github.com/enyxiaproject/fiches/blob/main/0%20-%20Sommaire.md" target="_blank" rel="noopener noreferrer">
                        PERSONNAGES (GITHUB)
                    </a>
                </button>
            </div>
        </div>
    </div>

    <!-- PAGE -->
    <div class="container-fluid" id="enyxia_page">
        <div class="container">


            <!-- READ -->
            <div class="container text-center enyxia-sectiontitle-div">
                    <button class="enyxia-sectiontitle">
                        INTRODUCTION
                    </button>
            </div>

            <p>
                Bienvenue sur le site d'Enyxia ! Ici, vous pourrez retrouver tous les contenus relatifs aux jeux de rôle ou au projet littéraire.
                <br>
                <br>

                <h5>• <u><b>Qu'est-ce qu'Enyxia ?</b></u></h5>
                <p>Enyxia est originalement un jeu de rôle en tour par tour créé le 1er aout 2017 par Jeffaria sur la plateforme Discord. Il est constitué de 7 saisons pour plus de 3 600 tours, et s'achève le <b>25 juin 2018</b>. </p>
            
                <p>Peu après l'arrêt du jeu de rôle, Sheele, — propriétaire du jeu de rôle depuis l'abandon de Jeffaria fin 2017 — décida d'écrire une huitième et dernière saison seul, nommée “Tour infinie”. Enyxia se transforma donc en véritable projet littéraire, et cette dernière saison est toujours en cours d'écriture. Des chapitres appelés “étages” sont publiés de façon plus ou moins régulière.</p>
                
                <p>Les participants du jeu de rôle original ont été : <b>Sheele</b>, <b>Hypix</b>, <b>FateHard</b>, <b>MathSpirit</b>, <b>Wellarkel</b>, <b>Izzumaki</b>, <b>RelGainSlide</b>, <b>KuYuDo</b>, <b>Sully</b>, et <b>Jeffaria</b>.</p>

                <br>

                <h5>• <u><b>Autre précisions</b></u></h5>
                <p>Ce site est <u>uniquement</u> dédié à Enyxia le jeu de rôle, ou le projet littéraire. Si vous espérez trouver ici des informations sur une team d'esport ou encore un serveur Minecraft, vous êtes au mauvais endroit !</p>
            </p>

            <hr>

            <!-- NEWS -->
            <div class="container text-center enyxia-sectiontitle-div">
                <button class="enyxia-sectiontitle">
                    DERNIÈRES NOUVELLES
                </button>
            </div>

            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="https://data.enyxia.fr/images/news1.png" class="d-block w-100 rounded" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="10000">
                        <img src="https://data.enyxia.fr/images/news2.png" class="d-block w-100 rounded" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <hr>
            
            <!-- READ -->
            <div class="container text-center enyxia-sectiontitle-div">
                    <button class="enyxia-sectiontitle" id="read">
                        LIRE ENYXIA
                    </button>
            </div>

            <p>
                Toutes les saisons de l'Enyxia originel. En raison de la quantité importante de personnages, les fiches ne se trouvent pas directement dans les saisons, mais sur GitHub (dans la section "personnages" en haut de page). Faites cependant attention, certaines fiches contiennent des spoils si vous êtes au début de l'histoire.
            </p>

            <div class="l-container">
                <div class="b-game-card">
                    <a href="https://data.enyxia.fr/files/s1.pdf">
                        <div class="b-game-card__cover" style="background-image: url(https://data.enyxia.fr/images/covers/s1.png);"></div>
                    </a>
                </div>
                <div class="b-game-card">
                    <a href="https://data.enyxia.fr/files/s2.pdf">
                        <div class="b-game-card__cover" style="background-image: url(https://data.enyxia.fr/images/covers/s2.png);"></div>
                    </a>
                </div>
                <div class="b-game-card">
                    <a href="https://data.enyxia.fr/files/s3.pdf">
                        <div class="b-game-card__cover" style="background-image: url(https://data.enyxia.fr/images/covers/s3.png);"></div>
                    </a>
                </div>
                <div class="b-game-card">
                    <a href="https://data.enyxia.fr/files/s4.pdf">
                        <div class="b-game-card__cover" style="background-image: url(https://data.enyxia.fr/images/covers/s4.png);"></div>
                    </a>
                </div>

                
                <div class="b-game-card">
                    <a href="https://data.enyxia.fr/files/s5.pdf">
                        <div class="b-game-card__cover" style="background-image: url(https://data.enyxia.fr/images/covers/s5.png);"></div>
                    </a>
                </div>
                <div class="b-game-card">
                    <a href="https://data.enyxia.fr/files/s6.pdf">
                        <div class="b-game-card__cover" style="background-image: url(https://data.enyxia.fr/images/covers/s6.png);"></div>
                    </a>
                </div>
                <div class="b-game-card">
                    <a href="https://data.enyxia.fr/files/s7.pdf">
                        <div class="b-game-card__cover" style="background-image: url(https://data.enyxia.fr/images/covers/s7.png);"></div>
                    </a>
                </div>
                <div class="b-game-card">
                    <a href="https://data.enyxia.fr/files/s8.pdf">
                        <div class="b-game-card__cover" style="background-image: url(https://data.enyxia.fr/images/covers/s8.png);"></div>
                    </a>
                </div>
            </div>
            
            <hr>
            
            <!-- ARCHIVES -->
            <div class="container text-center enyxia-sectiontitle-div">
                    <button class="enyxia-sectiontitle">
                        ARCHIVES
                    </button>
            </div>

            <p>Dans une façon de retrouver le côté participatif d'Enyxia, deux autres jeux de rôles appelés respectivement <b>Enyxia Zero</b> et <b>Enyxia Reborn</b> ont été créé :</p>
            
            <p>• <b>Enyxia Zero</b> avait pour but d'être un préquel de l'Enyxia originel, mais a malheureusement été abandonné quelques mois après son commencement. Malgré son abandon le projet est tout de même <b>canon</b>, mais a été archivé.</p>
            
            <p>• <b>Enyxia Reborn</b> avait pour but d'être un univers alternatif de l'Enyxia originel, mais a malheureusement aussi été abandonné quelques mois après son commencement. De par son abandon le projet a été archivé.</p>
            
            <p>Actuellement, un reboot d'<b>Enyxia Zero</b>, appelé <b>Enyxia Zero-2</b> est en cours d'écriture, et joué avec 5 participants actifs. Il sera rendu publique en temps voulu.</p>

            <p><b>EnyxiaTV</b> avait pour but d'être une parodie d'une émission de télé, mais est bien plus qu'un délire entre amis plutôt qu'un véritable projet sérieux.</p>

            <div class="l-container">
                <div class="b-game-card">
                    <a href="https://data.enyxia.fr/files/zero-1.pdf">
                        <div class="b-game-card__cover" style="background-image: url(https://data.enyxia.fr/images/covers/zero.png);"></div>
                    </a>
                </div>
                <div class="b-game-card">
                    <a href="https://data.enyxia.fr/files/reborn.pdf">
                        <div class="b-game-card__cover" style="background-image: url(https://data.enyxia.fr/images/covers/reborn.png);"></div>
                    </a>
                </div>
                <div class="b-game-card">
                    <a href="https://data.enyxia.fr/files/enyxiatv-1.pdf">
                        <div class="b-game-card__cover" style="background-image: url(https://data.enyxia.fr/images/covers/tv.png);"></div>
                    </a>
                </div>
            </div>

            <?php  include 'assets/footer.php' ?>
        </div>
    </div>

    <!-- JS -->
    <script src="https://data.enyxia.fr/jquery-3.6.0.min.js"></script>
    <script src="https://data.enyxia.fr/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="app.js"></script>
</body>
</html>