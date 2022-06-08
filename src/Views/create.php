<?php
ob_start();
?>
    <div id="create">
        <div class="container">
            <div class="row justify-content-md-center">
                <h1 class="titres">Création d'article</h1>
                <form class="formSection" action="/checkCreateArticle/" method="POST" enctype="multipart/form-data">
                    <label for="title">Titre :</label>
                    <input id="title" name="title" type="text"/>
                    <label for="content">Commentaire :</label>
                    <textarea id="content" name="content"></textarea>
                    <label for="image">Image :</label>
                    <input id="image" name="image" type="file"/>
                    <br><input type="submit">
                    <?php
                    if (isset($_SESSION['message'])) echo '<p class="msg">' . $_SESSION['message'] . '</p>';
                    ?>
                </form>
            </div>
        </div>
    </div>
<?php
$content = ob_get_clean();
require VIEWS . 'layout.php';