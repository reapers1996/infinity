<?php 
function AjouterEmailDatabase($pAdresseEmail)
{
try
{
    $sql = "INSERT INTO newsletter (email) value (?);";
    $db= new PDO('mysql:host=localhost;db=infinity','root','');
    $stmt = $db->prepare($sql);
    $stmt->execute($pAdresseEmail);
}
catch (PDOException $e)
{
    echo "erreur=".$e->getMessage();
}
}
?>