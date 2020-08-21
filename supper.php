
<?php


try{
$user="root";
$passwd="";
$dbh = new PDO('mysql:host=localhost;dbname=pfe', $user, $passwd);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$t=$_GET['t'];

$id_P=intval($_GET['id_P']);
switch($t)
{
case 'personnel':
$st=$dbh->query("DELETE from personnel where id_P='$id_P'");
header('Location:gestionperso.php');


break;
}



}catch(Exception $e) {
    die('Erreur : '. $e->getMessage());
}




?>