<?php


try{
$user="root";
$passwd="";
$dbh = new PDO('mysql:host=localhost;dbname=pfe', $user, $passwd);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$id_M=$_POST['id_M'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$specialite=$_POST['specialite'];
$tel=$_POST['tel'];
$email=$_POST['email'];
$disponibilite=$_POST['disponibilite'];
$username=$_POST['username'];
$password=$_POST['password'];
$st=$dbh->query("update medecin set nom_M='$nom',prenom_M='$prenom',specialite='$specialite',tel_M='$tel',email_M='$email',disponibilite='$disponibilite' ,username='$username',password='$password' where id_M='$id_M'");
header('Location:accmed.php');




//header("location:Afficherutlisateur.php");
//echo" utilisateur inscrit avcec succeé" ;
}catch(Exception $e) {
    die('Erreur : '. $e->getMessage());
}




?>