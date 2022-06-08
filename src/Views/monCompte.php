<?php
ob_start();
?>
<?php
if (isset($_SESSION['user'])){
    echo '
    <div id="monCompte">
    <h1>Bonjour '.$_SESSION['user']['username'].'</h1>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <p>Nom d\'utilisateur :</p>
                    <p>Adresse email :</p>
                </div>
                <div class="col-6">
                    <p>'.$_SESSION['user']['username'].'</p>
                    <p>'.$_SESSION['user']['email'].'</p>
                </div>
            </div>
        </div>
    </div>';
}
?>
<?php
$content = ob_get_clean();
require VIEWS . 'layout.php';
