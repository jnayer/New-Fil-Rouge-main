<?php
ob_start();
?>
    <div id="editArticle">
        <div class="container">
            <div class="row justify-content-md-center">
                <h1 class="titres">Modification d'article</h1>
                <form class="formSection" action="/checkEditArticle/" method="POST" enctype="multipart/form-data">
                    <label for="title">Titre :</label>
                    <input id="title" name="title" type="text" value="<?= $article[0]->getTitre() ?>">
                    <label for="content">Contenu :</label>
                    <textarea id="content" name="content"><?= $article[0]->getContenu() ?></textarea>
                    <label for="image">Image :</label>
                    <input type="file" name="image" id="image">
                    <input type="hidden" name="previousImg" value="<?= $article[0]->getImage() ?>">
                    <input type="submit">
                </form>
            </div>
        </div>
    </div>
<?php
$content = ob_get_clean();
require VIEWS . 'layout.php';