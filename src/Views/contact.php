<?php
ob_start();
?>
    <div id="contact">
        <h1>Contact</h1>
        <div class="input_section">
            <?php
            if (isset($_SESSION['error']['message'])) {
                echo '<p class="error">' . $_SESSION['error']['message'] . '</p>';
            }
            ?>
            <form method="POST" action="/checkContact/">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <label for="email">
                                Email:
                                <input class="inputContact" type="email" id="email" name="email"/>
                            </label>
                            <label for="contenu">
                                Contenu:
                                <textarea class="inputContact" id="contenu" name="contenu">
                            </textarea>
                            </label>
                        </div>
                    </div>
                </div>
                <input type="submit" value="Envoyer">
            </form>
        </div>
    </div>
<?php
$content = ob_get_clean();
require VIEWS . 'layout.php';