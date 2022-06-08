<?php
ob_start();
?>
    <div id="header">
        <div class="blockNav"></div>
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-12 header_text">
                        <h1 class="titres">Description du projet</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="leProjet">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-1 col-0"></div>
                <div class="col-md-8 col-sm-10 col-12"><p>Nous avions comme projet de construire une éolienne
                        avec uniquement des matériaux de récupération pour
                        des personnes dans le besoin.<br/>
                        En second temps, nous devions produire un site
                        web de A à Z en lien avec ce projet. Nous avons mené ce
                        projet à bien tout au cours de notre deuxième année
                        d’étude et fabriqué l'éolienne.</p></div>
                <div class="col-md-2 col-sm-1 col-0"></div>
            </div>
        </div>
        <div class="projetSection container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-12">
                        <h2>Nous sommes 2 élèves de l'école EDEN School Lyon</h2>
                        <ul>
                            <li>A gauche, c'est Loan. C'est le designer du groupe, celui qui à la fibre artistique que
                                Jalil n'a pas.
                            </li>
                            <li>A droite, c'est Jalil. L'esprit logique et pragmatique. C'est le développeur du
                                groupe.
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-12">
                        <img class="img-fluid" src="../Images/imgGroupe.jpg" alt="image de groupe">
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
$content = ob_get_clean();
require VIEWS . 'layout.php';
