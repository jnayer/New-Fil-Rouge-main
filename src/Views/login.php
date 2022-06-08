<?php
ob_start();
?>
    <div id="login">
        <h1 class="titres">Connexion</h1>
        <div class="loginSection">
            <form method="POST" action="/checkLogin/">
                <label for="username">
                    Nom d'utilisateur :
                    <input name="username" id="username" type="text">
                </label><br/>
                <label for="password">
                    Mot de passe :
                    <input name="password" id="password" type="password">
                </label><br/>
                <input class="" type="submit" value="Connexion">
            </form>
            <p>Si vous n'avez pas de compte, vous pouvez en créer un <a href="/register/">ici</a> !</p>
            <?php
            if (isset($_SESSION["error"]["message"])) {
                echo '<p class="msg">' . $_SESSION["error"]["message"] . '</p>';
            }
            if (isset($_SESSION["error"]["logged"])) {
                echo '<p class="msg">' . $_SESSION["error"]["logged"] . '</p>';
            }
            ?>
        </div>
    </div>
<?php
$content = ob_get_clean();
require VIEWS . 'layout.php';
