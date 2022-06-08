<?php
ob_start();
?>
    <div id="header">
        <div class="blockNav"></div>
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-12 header_text">
                        <h1 class="titres">Blog</h1>
                        <?php
                        if (isset($_SESSION['message'])) echo '<h2 style="text-align: center" class="msg">' . $_SESSION['message'] . '</h2>';
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="Blog">
        <div class="container">
            <div class="row justify-content-md-center">
                <?php
                if (count($articles) > 0) {
                    foreach ($articles as $article) {
                        echo '<div class="article col-12 col-md-5 col-sm-6 offset-md-1"> 
                            <h4>' . $article->getTitre() . '</h4>
                            <h4>Le ' . $article->getDateCreation() . ' par ' . $article->getUsername() . '</h4>
                            <p>' . $article->getCommentaire() . '</p>
                            <img class="img-fluid" alt="Image de blog" src="../../Images/ImgBlog/' . $article->getImage() . '"><br/>';
                        if (isset($_SESSION['user']) && $_SESSION['user']['id'] == $article->getIdUser()) {
                            echo '<a href="/deleteArticle/' . $article->getIdArticle() . '" class="deleteArticleButton">Supprimer</a>';
                        }
                        echo '</div>';
                    }
                } else {
                    echo '<h2>Aucun article n\'a été créé pour le moment</h2>';
                }
                ?>
            </div>
        </div>
    </div>
<?php
$content = ob_get_clean();
require VIEWS . 'layout.php';