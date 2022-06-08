<?php
ob_start();
?>
<div id="register">
    <h1 class="titres">Inscription</h1>
    <div class="registerSection">
        <?php
            if (isset($_SESSION['error']['username'])) echo '<p class="error">'.$_SESSION['error']['username'].'</p>';
        ?>
        <form method="post" action="/checkRegister/">
            <label for="email">
                Adresse mail :
                <input id="email" name="email" type="email">
            </label><br/>
            <label for="username">
                Nom d'utilisateur :
                <input id="username" name="username" type="text">
            </label><br/>
            <label for="password">
                Mot de passe :
                <input id="password" name="password" type="password">
            </label><br/>
            <input class="" type="submit" value="Inscription">
        </form>
        <p>Veuillez vous connecter <a href="/login/">ici</a> !</p>
    </div>
</div>
<?php
$content = ob_get_clean();
require VIEWS . 'layout.php';
