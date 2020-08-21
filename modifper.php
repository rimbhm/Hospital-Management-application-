<?php


try{
$user="root";
$passwd="";
$dbh = new PDO('mysql:host=localhost;dbname=pfe', $user, $passwd);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$id_P=$_POST['id_P'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];

$tel=$_POST['tel'];
$email=$_POST['email'];
$disponibilite=$_POST['disponibilite'];
$username=$_POST['username'];
$password=$_POST['password'];
$st=$dbh->query("update personnel set nom_P='$nom',prenom_p='$prenom',tel_P='$tel',email_P='$email',disponibilite='$disponibilite',username='$username',password='$password' where id_P='$id_P'");
header('Location:gestionperso.php');


}catch(Exception $e) {
    die('Erreur : '. $e->getMessage());
}




?>