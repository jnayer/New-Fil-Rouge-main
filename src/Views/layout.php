<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="Eologie est un projet étudiant dans le but de fabriquer une éolienne en matériaux de récupération">
    <title><?= $title ?></title>
    <link rel="preload" href="../CSS/Large/style.css" as="style">
    <link rel="preload" href="../CSS/Desktop/style.css" as="style">
    <link rel="preload" href="../CSS/Tablet/style.css" as="style">
    <link rel="preload" href="../CSS/Phone/style.css" as="style">
    <link rel="preload" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"
          as="style">
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
          as="style">
    <link rel="stylesheet" media="screen and (min-width: 1301px)" href="../CSS/Large/style.css">
    <link rel="stylesheet" media="only screen and (min-width: 901px) and (max-width: 1300px)"
          href="../CSS/Desktop/style.css">
    <link rel="stylesheet" media="only screen and (min-width: 501px) and (max-width: 900px)"
          href="../CSS/Tablet/style.css">
    <link rel="stylesheet" media="only screen and (min-width: 1px) and (max-width: 500px)"
          href="../CSS/Phone/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div id="bgNav">
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand navLogo" href="/homepage/">
            .
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="color: white;"><i class="fas fa-bars"
                                                                       style="color:#ffffff; font-size:28px;"></i></span>
        </button>

        <div class="collapse navbar-collapse navMenu" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active lienNav">
                    <a class="nav-link" href="/leProjet/">Le projet <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active lienNav">
                    <a class="nav-link" href="/leFonctionnement/">Fonctionnement <span class="sr-only">(current)</span></a>
                </li>
                <?php
                if (isset($_SESSION['user'])) {
                    echo '<li class="nav-item dropdown userNav">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Blog
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                      <a class="dropdown-item" href="/blog/">Tout les articles</a>
                                      <a class="dropdown-item" href="/createArticle/">Créer un article</a>
                                      <a class="dropdown-item" href="/myArticles/">Mes articles</a>
                                    </div>
                                   </li>';
                } else {
                    echo '<li class="nav-item active lienNav">
                        <a class="nav-link" href="/blog/">Blog <span class="sr-only">(current)</span></a>
                    </li>';
                }
                ?>
                <li class="nav-item active lienNav">
                    <a class="nav-link" href="/contact/">Contact <span class="sr-only">(current)</span></a>
                </li>
                <?php
                if (isset($_SESSION['user']) && isset($_SESSION['user']['username'])) {
                    echo '<li class="nav-item dropdown userNav">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              ' . $_SESSION["user"]["username"] . '
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                              <a class="dropdown-item" href="/monCompte/">Mon Compte</a>
                              <a class="dropdown-item" href="/logout/">Deconnexion</a>
                            </div>
                          </li>';
                } else {
                    echo '<li class="nav-item active lienNav">
                                <a class="nav-link" href="/login/">Connexion <span class="sr-only">(current)</span></a>
                              </li>';
                }
                ?>

            </ul>
        </div>
    </nav>
</div>
<main>
    <?php echo $content; ?>
</main>
<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-12 logoFooter">
                <img class="img img-fluid" src="../Images/Logo_Slogan.png" alt="Logo Eologie">
                <p class="copyright">@ edenschool eologie tout droits réservés</p>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-3 col-6 naviguer">
                <h3>Naviguer</h3>
                <a class="linkFooter" href="/homepage/">Accueil</a>
                <p></p>
                <a class="linkFooter" href="/LeProjet/">Le projet</a>
                <p></p>
                <a class="linkFooter" href="/Contact/">Contact</a>
                <p></p>
                <a class="linkFooter" href="/leFonctionnement/">Fonctionnement</a>
                <p></p>
                <a aria-label="Left align" rel="noreferrer noopener" href="https://fr-fr.facebook.com/edenschool.fr"
                   target="_blank"><i class="fa fa-facebook"></i></a>
                <a aria-label="Left align" rel="noreferrer noopener"
                   href="https://twitter.com/edenschool_FR?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"
                   target="_blank"><i class="fa fa-twitter"></i></a>
            </div>
            <div class="col-md-3 col-6 notreProjet">
                <h3>Notre projet</h3>
                <a class="linkFooter" href="/blog/">Le blog</a>
                <p></p>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/7bc1607fa1.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
</body>
</html>
<?php
unset($_SESSION['error']);//Supprime les erreurs mises en session
unset($_SESSION['old']);//Supprime les anciennes valeurs
unset($_SESSION['message']);//Supprime les messages