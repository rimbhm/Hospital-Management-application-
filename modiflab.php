<?php


try{
$user="root";
$passwd="";
$dbh = new PDO('mysql:host=localhost;dbname=pfe', $user, $passwd);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$id_lab=$_POST['id_lab'];
$nom=$_POST['nom'];
$type=$_POST['type'];
$disponibilite=$_POST['disponibilite'];
$st=$dbh->query("update laboratoire set nom_lab='$nom',type_lab='$type',disponibilite='$disponibilite' where id_lab='$id_lab'");
header('Location:gestionlabo.php');




}catch(Exception $e) {
    die('Erreur : '. $e->getMessage());
}




?>