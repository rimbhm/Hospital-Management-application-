<?php


try{
$user="root";
$passwd="";
$dbh = new PDO('mysql:host=localhost;dbname=pfe', $user, $passwd);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$nom=$_POST['nom'];
$id_M=$_POST['id_M'];
$prenom=$_POST['prenom'];
$specialite=$_POST['specialite'];
$tel=$_POST['tel'];
$email=$_POST['email'];
$disponibilite=$_POST['disponibilite'];
$st=$dbh->query("update  medecin set nom_M='.$nom.',prenom_M='.$prenom.',specialite='.$specialite.',tel_M='.$tel.',email_M='.$email.',disponibilite='.$disponibilite.' where id_M='$id_M'");
header('Location:gestionmed.php');




//header("location:Afficherutlisateur.php");
//echo" utilisateur inscrit avcec succeé" ;
}catch(Exception $e) {
    die('Erreur : '. $e->getMessage());
}




?>