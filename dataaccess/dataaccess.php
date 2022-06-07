<?php 
function AjouterEmailDatabase($pAdresseEmail)
{
try
{
    $sql = "INSERT INTO newsletter (email) value (?);";
    $db= new PDO('mysql:host=localhost;db=infinity','root','');
    echo $sql;
    //$stmt = $db->prepare($sql);
    $db->exec($sql);
}
catch (PDOException $e)
{
    echo "Erreur=".$e->getMessage();
}
}
?>