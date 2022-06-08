<?php
ob_start();
?>
    <h1>Erreur 404</h1>
    <h1>Cette page n'existe pas</h1>
<?php
$content = ob_get_clean();
require VIEWS . 'layout.php';