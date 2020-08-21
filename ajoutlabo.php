<?php 


try{
$user="root";
$passwd="";
$dbh = new PDO('mysql:host=localhost;dbname=pfe', $user, $passwd);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


$st=$dbh->query("insert into laboratoire (nom_lab,type_lab,disponibilite) 
	values('".$_POST['nom']."','".$_POST['type']."','".$_POST['disponibilite']."')");

header('Location:gestionlabo.php');




}catch(Exception $e) {
	die('Erreur : '. $e->getMessage());
}
?>