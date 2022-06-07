<?php 
function AjouterEmailDatabase($pAdresseEmail)
{
try
{
    $sql = "INSERT INTO newsletter (`email`) value ('$pAdresseEmail');";
    $db= new PDO('mysql:host=localhost;dbname=infinity','root','');
    echo $sql;
    //$stmt = $db->prepare($sql);
    $db->query($sql);
}
catch (PDOException $e)
{
    echo "Erreur=".$e->getMessage();
}
}
?>