<?php
require_once($_SERVER['DOCUMENT_ROOT']."/infinity/controllers/controllers.php");

//var_dump($_POST);
if (isset($_POST["subscriber_email"]))
{
inscrireNewsletter($_POST["subscriber_email"]);
}
else
controllerHomePage();
?>