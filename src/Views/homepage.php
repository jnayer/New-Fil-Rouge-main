<?php
ob_start();
?>

    <div id="header" style="height: 650px">
        <div class="blockNav"></div>
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-10 col-12 header_text">
                        <h1>Eologie un projet écolo</h1>
                        <h2>Notre projet est de construire une éolienne pour des personnes dans le besoin et un site web
                            pour le présenter.</h2>
                        <button class="btnSavoirPlus"><a href="/leProjet/">En savoir plus</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="cards">
        <h2 class="titres">Le mécanisme</h2>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-10 offset-sm-0 offset-1 sectionFonctionnement">
                    <div class="card">
                        <img src="../Images/cartes/Eolienne-mat.webp" class="card-img-top img-fluid"
                             alt="Image représentant le mat de l'éolienne">
                        <div class="card-body">
                            <p class="card-text">L'éolienne est stable grâce à son mat à planter</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-10 offset-sm-0 offset-1 sectionFonctionnement">
                    <div class="card">
                        <img src="../Images/cartes/Eolienne-circuit.webp" class="card-img-top img-fluid"
                             alt="Image représentant le circuit de l'éolienne">
                        <div class="card-body">
                            <p class="card-text">Le moteur génère 4V</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-10 offset-sm-0 offset-1 sectionFonctionnement">
                    <div class="card">
                        <img src="../Images/cartes/Eolienne-pales.webp" class="card-img-top img-fluid"
                             alt="Image représentant les pales de l'éolienne">
                        <div class="card-body">
                            <p class="card-text">Les pales tournent avec le vent et font fonctionner le moteur</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-10 offset-sm-0 offset-1 sectionFonctionnement">
                    <div class="card">
                        <img src="../Images/cartes/Eolienne-led-allumee.webp" class="card-img-top img-fluid"
                             alt="Image représentant une led allumée grâce à l'éolienne">
                        <div class="card-body">
                            <p class="card-text">L'énergie générée permet d'allumer la petite LED</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="ml-auto mr-auto col-md-4 col-sm-6 col-8">
                    <button class="btnFonctionnement"><a class="lienFonctionnement" href="/leFonctionnement/">Fonctionnement</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div id="nousTrouver">
        <h2 class="titres">Où nous trouver</h2>
    </div>

<?php
$content = ob_get_clean();
require VIEWS . 'layout.php';