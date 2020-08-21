<?php


try{
$user="root";
$passwd="";
$dbh = new PDO('mysql:host=localhost;dbname=pfe', $user, $passwd);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$st=$dbh->query("select nom_M,prenom_M from medecin where disponibilite = 'Disponible' and specialite = '".$_POST['specialite']."'");
$st -> execute(); 

while($r = $st->fetch() )
			{
		
			echo "<option > " . $r['nom_M'] . " " . $r['prenom_M'] . "</option>"; 
	
			}

}catch(Exception $e) {
    die('Erreur : '. $e->getMessage());
}




?>