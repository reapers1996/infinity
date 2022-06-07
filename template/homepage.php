<?php
$title = "Infinity_accueil";
ob_start();
?>
Pour ne rien manquer, abonnez-vous à notre Newsletter:
<form method="POST">
    <div><label for="email"></label> <input id="email" placeholder="Votre adresse e-mail" name="subscriber_email" type="email" />
        <button type="submit">S'abonner</button>
    </div>
</form>
Retrouvez-nous sur les réseaux !
<?php
$content=ob_get_clean();
require_once 'base.php'
?>