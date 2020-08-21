<?php 


try{
$user="root";
$passwd="";
$dbh = new PDO('mysql:host=localhost;dbname=pfe', $user, $passwd);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


$st=$dbh->query("insert into medecin (nom_M,prenom_M,specialite,tel_M,email_M,disponibilite,username,password) 
	values('".$_POST['nom']."','".$_POST['prenom']."','".$_POST['specialite']."','".$_POST['tel']."','".$_POST['email']."','".$_POST['disponibilite']."','".$_POST['username']."','".$_POST['password']."')");

$st1=$dbh->query("insert into utilisateur (username,password,type) 
	values('".$_POST['username']."','".$_POST['password']."','Medecin')");

header('Location:gestionmedecin.php');




}catch(Exception $e) {
	die('Erreur : '. $e->getMessage());
}
?>