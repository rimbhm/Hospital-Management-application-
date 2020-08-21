
<?php


try{
$user="root";
$passwd="";
$dbh = new PDO('mysql:host=localhost;dbname=pfe', $user, $passwd);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$t=$_GET['t'];

$id_lab=intval($_GET['id_lab']);
switch($t)
{
case 'laboratoire':
$st=$dbh->query("DELETE from laboratoire where id_lab='$id_lab'");
header('Location:gestionlabo.php');


break;
}




}catch(Exception $e) {
    die('Erreur : '. $e->getMessage());
}




?>