<?php
ob_start();
?>
    <div id="myArticles">
        <div class="container">
            <div class="row justify-content-md-center">
            <?php
                 if(count($myArticles) > 0){
                     foreach ($myArticles as $myArticle){
                         echo '<div class="article col-12 col-md-5 col-sm-6 offset-md-1"> 
                            <h4>'.$myArticle->getTitre().'</h4>
                            <h4>Le '.$myArticle->getDateCreation().'</h4>
                            <p>'.$myArticle->getContenu().'</p>
                            <img class="img-fluid" alt="Image de blog" src="../../Images/ImgBlog/'.$myArticle->getImage().'"><br/>
                            <a href="/editArticle/'.$myArticle->getIdArticle().'" class="editArticleButton">Modifier</a>
                         </div>';
                     }
                 }else{
                     echo '<h1>Vous n\'avez pas encore créé d\'article, créez votre premier article <a href="/createArticle">ici</a> !';
                 }
            ?>
            </div>
        </div>
    </div>
<?php
$content = ob_get_clean();
require VIEWS . 'layout.php';