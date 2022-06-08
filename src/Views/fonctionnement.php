<?php
ob_start();
?>
    <div id="header">
        <div class="blockNav"></div>
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-12 header_text">
                        <h1 class="titres">Fonctionnement de l'éolienne</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="cards">
        <div class="container-fluid">
            <div class="container">
                <div class="row justify-content-md-center">
                    <!--<div class="col-lg-0 col-md-1 col-1"></div>-->
                    <div class="col-lg-4 col-md-8 col-12 sectionFonctionnement">
                        <div class="card">
                            <img src="../Images/cartes/Eolienne-pales.webp" class="card-img-top img"
                                 alt="Image représentant les pales de l'éolienne">
                            <div class="card-body">
                                <h5 class="card-title">L'hélice</h5>
                                <p class="card-text">L'hélice, directement fixée sur le rotor du moteur pas à pas,
                                    tourne avec un vent d'environ 10km/h et va à max 200tr/min grâce à ses 4 pales
                                    d'environ 42cm en tuyau de pvc</p>
                            </div>
                        </div>
                    </div>
                    <!--<div class="col-lg-0 col-md-1 col-1"></div>
                    <div class="col-lg-0 col-md-1 col-1"></div>-->
                    <div class="col-lg-4 col-md-8 col-12 sectionFonctionnement">
                        <div class="card">
                            <img src="../Images/cartes/Eolienne-circuit.webp" class="card-img-top img"
                                 alt="Image représentant le circuit de l'éolienne">
                            <div class="card-body">
                                <h5 class="card-title">Le moteur</h5>
                                <p class="card-text">L'éolienne génère max 7v en alternatif.
                                    Le circuit récupère le courant généré et le régule à environ 4v. Le régulateur du
                                    circuit
                                    a deux condensateurs pour prévenir les perturbations et éviter de griller
                                    l'objet qui y est branché.</p>
                            </div>
                        </div>
                    </div>
                    <!--<div class="col-lg-0 col-md-1 col-1"></div>
                    <div class="col-lg-0 col-md-1 col-1"></div>-->
                    <div class="col-lg-4 col-md-8 col-12 sectionFonctionnement">
                        <div class="card">
                            <img src="../Images/cartes/Eolienne-led-allumee.webp" class="card-img-top img"
                                 alt="Image représentant une led allumée grâce à l'éolienne">
                            <div class="card-body">
                                <h5 class="card-title">La sortie de courant</h5>
                                <p class="card-text">Nous avons donc une tension de sortie stable et suffisamment
                                    puissante pour alimenter plusieurs led, un petit moteur ou un petit laser de
                                    poche.</p>
                            </div>
                        </div>
                    </div>
                    <!--<div class="col-lg-0 col-md-1 col-1"></div>-->
                </div>
            </div>
        </div>
    </div>
<?php
$content = ob_get_clean();
require VIEWS . 'layout.php';
