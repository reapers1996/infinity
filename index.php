<?php
require_once($_SERVER['DOCUMENT_ROOT']."/infinity/controllers/controller.php");
require($_SERVER['DOCUMENT_ROOT']."/infinity/assets/css/main.css");

var_dump($_POST);
if (isset($_POST["subscriber_email"]))
{
inscrireNewsletter($_POST["subscriber_email"]);
}
controllerHomePage();
?>