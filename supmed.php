

<?php


try{
$user="root";
$passwd="";
$dbh = new PDO('mysql:host=localhost;dbname=pfe', $user, $passwd);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$t=$_GET['t'];

$id_M=intval($_GET['id_M']);
switch($t)
{
case 'medecin':
$st=$dbh->query("DELETE from medecin where id_M='$id_M'");
header('Location:gestionmedecin.php');


break;
}



//header("location:Afficherutlisateur.php");
//echo" utilisateur inscrit avcec succeé" ;
}catch(Exception $e) {
    die('Erreur : '. $e->getMessage());
}




?>
