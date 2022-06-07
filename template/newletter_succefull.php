<?php
$title = "Infinity_accueil";
ob_start();
?>

Votre adresse <?=$adresse ?> a bien était ajoutée.
<?php
$content=ob_get_clean();
require_once 'base.php'
?>