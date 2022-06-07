<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/infinity/dataaccess/dataaccess.php");

function inscrireNewsletter($pEmail)
{
    //echo "inscrire";
    ajouterEmailDatabase($pEmail);
    $adresse = $pEmail;
require_once ($_SERVER['DOCUMENT_ROOT']. "/infinity/template/newletter_succefull.php");
}

?>